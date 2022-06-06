<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Movie;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'movie_id',
        'text',
    ];

    public function movie(){
        return $this->belongsTo(Movie::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
