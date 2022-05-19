<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(){
        return Movie::all();
    }
}
