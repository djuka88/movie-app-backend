<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WatchList;
use App\Http\Requests\WatchListRequest;
use App\Http\Requests\AddWatchListRequest;
use Illuminate\Support\Facades\Auth;

use Log;

class WatchListController extends Controller
{
    public function index()
    {
        $watchlist = WatchList::where('user_id', Auth::id())
            ->with('movie:id,title,cover_image')
            // ->with(['movie'=>function($query){
            //     $query->select('id','title')->where('id',1)->get();
            // }])
            ->get();

        return $watchlist;
    }

    public function destroy($id)
    {
        $dataToRemove = WatchList::findOrFail($id)->delete();
    }

    public function update(WatchListRequest $request)
    {
        $movieIds = $request->movieIds;

        foreach ($movieIds as $movieId) {
            $watched = WatchList::where('user_id', Auth::id())->where('movie_id', $movieId)->first();
            $watched->watched = !$watched->watched;
            $watched->save();
        }
    }

    public function store(AddWatchListRequest $request)
    {
        $movieId=$request->movieId;

        WatchList::create([
            'user_id' => Auth::id(),
            'movie_id' => $movieId,
            'watched' => 0
        ]);
    }
}
