<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Reaction;
use App\Models\Comment;
use App\Models\WatchList;
use App\Http\Requests\MovieRequest;
use App\Http\Requests\FilterRequest;
use App\Http\Requests\ReactRequest;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ShowCommentsRequest;
use App\Http\Requests\WatchListRequest;

use Log;

use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    // this is only temporary solution
    // TODO: learn how to use eloquent for this 
    private function modifyMovieData($movie){
        if (count($movie->watchList)>0) {
            $newValue = $movie->watchList[0]->watched;
            unset($movie->watchList);
            $movie->watched=$newValue;
            $movie->isInWatchList = true;
        } else {
            unset($movie->watchList);
            $movie->watched=0;
            $movie->isInWatchList = false;
        }
    }

    public function index(FilterRequest $request)
    {
        $searchFilter = $request->get('search');
        $genresFilter = $request->get('genres');

        $movies = Movie::searchFilter($searchFilter)
            ->genresFilter($genresFilter)
            ->countLikesDislikes()
            ->includeMovieWatched()
            ->userReaction()
            ->paginate(10);

        foreach ($movies as $movie) {
            $this->modifyMovieData($movie);
        }

        return $movies;
    }

    public function store(MovieRequest $request)
    {
        $movie = Movie::create([
            'title' => $request->title,
            'cover_image' => $request->cover_image,
            'description' => $request->description,
        ]);

        $movie->genres()->attach($request->genre_ids);
    }

    public function show($id)
    {
        $movie = Movie::with('genres:name')
            ->countLikesDislikes()
            ->includeMovieWatched()
            ->findOrFail($id);

        $movie->times_visited +=1;
        $movie->save();

        $this->modifyMovieData($movie);

        return $movie;
    }

    public function react(ReactRequest $request)
    {
        $userReaction = $request->reaction;
        $movie_id = $request->id;

        $reactionFromDb = Reaction::where('user_id', Auth::id())->where('movie_id', $movie_id)->first();

        if (!$reactionFromDb) {
            Reaction::create([
                'user_id' => Auth::id(),
                'movie_id' => $movie_id,
                'like' => $userReaction,
            ]);

            return;
        }

        if ($reactionFromDb->like == $userReaction) {
            $reactionFromDb->delete();
        } else {
            $reactionFromDb->like = $userReaction;
            $reactionFromDb->save();
        }
    }

    public function comment($id, CommentRequest $request)
    {
        $commentText = $request->text;
        $movieId = $request->movieId;
        $userId = $request->userId;

        Comment::create([
            'user_id' => $userId,
            'movie_id' => $movieId,
            'text' => $commentText
        ]);
    }

    public function comments($id, ShowCommentsRequest $request)
    {
        $page = $request -> page;
        $movieId = $request -> movieId;

        $comments = Comment::where('movie_id', $movieId)
            ->orderBy('created_at', 'DESC')
            ->orderBy('id', 'DESC')
            ->take(5*$page)->get();

        return $comments;
    }
    
}
