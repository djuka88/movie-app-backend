<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchList extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'movie_id',
        'watched',
    ];

    public function movie(){
        return $this->belongsTo(Movie::class);
    }
}
