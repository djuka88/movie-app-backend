<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover_image',
        'description',
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

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
}


//$this->belongsToMany(Role::class, 'role_user_table', 'user_id', 'role_id');