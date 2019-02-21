<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function viewProfile()
    {
        $tweets = Tweet::where('user_id', '=', Auth::id())->orderBy('id', 'DESC')->get();
        return view('profile', [
            'tweetId' => $tweets
        ]);
    }

    public function getAllUsers(User $users)
    {
        $usersAll = $users->orderBy('id', 'DESC')->get();
        return view('users', [
            'users' => $usersAll
        ]);
    }

    public function getUser(User $user, Request $request)
    {
        $theuser = $user->where('username', $request->username)->firstOrFail();
        $tweets = Tweet::where('user_id', '=', $theuser->id)->orderBy('id', 'DESC')->get();
        return view('page_user', [
            'theuser' => $theuser,
            'tweetsUser' => $tweets
        ]);

    }


}