<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Tweet;

class TweetController extends Controller
{
    public function create(Tweet $tweet, Request $request)
    {
        $data = [
            'user_id' => Auth::id(),
            'tweet' => $request->tweet
        ];
        $tweet->text = $data['tweet'];
        $tweet->user_id = $data['user_id'];
        $tweet->save();
        return redirect('/');
    }

    public function getall(Tweet $tweet, User $user)
    {
        $tweets = $tweet->orderBy('id', 'DESC')->get();
        /*foreach ($tweets as $tweet) {
            echo $tweet->text . ' belongs to ' . $tweet->user->username . ' | ';
        }
        die();*/
        return view('home', [
            'tweets' => $tweets,
        ]);
    }
}
