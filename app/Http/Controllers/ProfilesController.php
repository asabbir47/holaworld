<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

    public function edit(\App\User $user)
    {
        $this->authorize('update',$user->profile);

        return view('profile/edit',compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update',$user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => ''
        ]);

        $imgArray = array();

        if(request('image'))
        {
            $imgPath = request('image')->store('profile','public');

            $image = Image::make(public_path("storage/{$imgPath}"))->fit(1200,1200);
            $image->save();

            $imgArray = ['image' => $imgPath];
        }

        auth()->user()->profile->update(array_merge($data,$imgArray));

        dd($data);
    }


    // public function index()
    // {
    //
    //     return view('home');
    // }
}
