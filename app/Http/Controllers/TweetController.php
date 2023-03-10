<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index(Request $request)
    {
        return $request->user()->tweets()->with(['user'])->get();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:255'
        ]);

        $tweet = $request->user()->tweets()->create([
            'body' => $request->body
        ])->load('user');

        return $tweet;
    }
}
