<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
}


//$this->belongsToMany(Role::class, 'role_user_table', 'user_id', 'role_id');