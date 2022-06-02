<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover_image',
        'description',
        'times_visited',
    ];

    protected $hidden = ['pivot'];

    public function scopeSearchFilter($query, $searchFilter)
    {
        return $query->where('title', 'LIKE', '%'.$searchFilter.'%');
    }

    public function scopeGenresFilter($query, $genresFilter)
    {
        if ($genresFilter) {
            return $query->whereHas('genres', function ($q) use ($genresFilter) {
                $q->whereIn('id', $genresFilter);
            });
        }
    }

    public function scopeCountLikesDislikes($query)
    {
        return $query->withCount(['reactions as likes_count' => function ($query) {
            $query->where('like',1);
        }, 'reactions as dislikes_count' => function ($query){
            $query->where('like',0);
        }]);
    }

    public function scopeUserReaction($query)
    {
        return $query->with(['reactions' => function ($query){
                $query->where('user_id',Auth::id());
            }]);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }

    public function reactions(){
        return $this->hasMany(Reaction::class);
    }
}


//$this->belongsToMany(Role::class, 'role_user_table', 'user_id', 'role_id');