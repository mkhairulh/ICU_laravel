<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;



class FeedController extends Controller
{
    public function index() {
        //$feeds = Feed::all();
        $feeds = Feed::paginate(3);
        return view('pages.feed.index', compact('feeds'));
    }

    public function create() {
        return view('pages.feed.create');
    }

    public function show(Feed $feed) {
        //dd($feed);
        Gate::authorize('update',$feed);
        Log::debug("Show feed",[ 'feed'=>$feed]);
        return view('pages.feed.show', compact('feed'));
    }

    public function update(Request $request, Feed $feed) {
        $validated_request = $request->validate([
            'title'=>'required | string |max:100',
            'description'=>'required | string | max:300' ,
        ]);
        $feed->update($validated_request);
        return redirect()->route('feeds');
    }

    public function store(Request $request) {
        $validated_request = $request->validate([
            'title'=>'required | string |max:100 | min:3',
            'description'=>'required | string | max:300' ,
        ]);
        $user=Auth::user();
        $validated_request['user_id']=$user->id;

        Feed::create($validated_request);
        return redirect()->route('feeds')->with('success','Feed created successfully');

    }
}
