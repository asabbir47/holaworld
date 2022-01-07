<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class ProfilesController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index($user)
    {
        // Response::make("Page not found", 404);
        // dd(User::find($user));
        // $user = User::find($user);
        $user = User::findOrFail($user);

        if (!$user) {
            // return view('404', []);
            // abort(404);
            // dd('hello there');
        }

        return view('profile/index',[
            'user' => $user,
        ]);
    }


    // public function index()
    // {
    //
    //     return view('home');
    // }
}
