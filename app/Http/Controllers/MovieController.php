<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Requests\MovieRequest;
use App\Http\Requests\FilterRequest;

use Illuminate\Support\Facades\Log;
use DB;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(FilterRequest $request)
    {
        $searchFilter = $request->get('search');
        $genresFilter = $request->get('genres');

        $movies = Movie::
            searchFilter($searchFilter)
            ->genresFilter($genresFilter)
            ->countLikesDislikes()
            ->userReaction()
            ->paginate(10);

        return $movies;
    }

    public function store(MovieRequest $request){
        $movie = Movie::create([
            'title' => $request->title,
            'cover_image' => $request->cover_image,
            'description' => $request->description,
        ]);

        $movie->genres()->attach($request->genre_ids);
    }

    public function show($id){
        $movie = Movie::with('genres:name')->findOrFail($id);

        return $movie;
    }

    public function like($id){

    }

    public function dislike($id){

    }
}
