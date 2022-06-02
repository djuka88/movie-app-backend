<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Reaction;
use App\Http\Requests\MovieRequest;
use App\Http\Requests\FilterRequest;
use App\Http\Requests\ReactRequest;
use Illuminate\Support\Facades\Auth;

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
        $movie = Movie::with('genres:name')->countLikesDislikes()->findOrFail($id);

        return $movie;
    }

    public function react(ReactRequest $request){
        $userReaction = $request->reaction;
        $movie_id = $request->id;

        $reactionFromDb = Reaction::where('user_id',Auth::id())->where('movie_id',$movie_id)->first();

        if(!$reactionFromDb){
            Reaction::create([
                'user_id' => Auth::id(),
                'movie_id' => $movie_id,
                'like' => $userReaction,
            ]);

            return;
        }

        if($reactionFromDb->like == $userReaction){
            $reactionFromDb->delete();
        }
        else{
            $reactionFromDb->like = $userReaction;
            $reactionFromDb->save();
        }
    }
}
