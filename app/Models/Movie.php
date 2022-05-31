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

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }

    public function reactions(){
        return $this->hasMany(Reaction::class);
    }
}


//$this->belongsToMany(Role::class, 'role_user_table', 'user_id', 'role_id');