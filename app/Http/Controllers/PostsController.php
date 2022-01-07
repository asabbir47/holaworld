<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        // $data = $this->validate($request, [
        //     'caption' => 'required',
        //     'image' => 'required|image'
        // ]);

        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required|image'
        ]);

        // dd(request()->all());
        dd($data);
    }
}
