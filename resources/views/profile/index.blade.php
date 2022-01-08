@extends('layouts.app')

@section('content')
<div class="container">
    <style media="screen">
        .margin-right-30{
            margin-right: 30px;
        }
    </style>
    <div class="row">
        <div class="col-sm-3">
            <img src="../image/inst_logo.png" al+t="" style="height:80px;">
        </div>
        <div class="col-sm-9">
            <div class="" style="display:flex;justify-content:space-between;align-items:baseline;">
                <h2>{{ $user->username }}</h2>
                @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan
                @can('update', $user->profile)
                <a href="/p/create">Add a new Post</a>
                @endcan

            </div>
            <div class="" style="display:flex;">
                <div class="margin-right-30"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                <div class="margin-right-30"><strong>12k</strong> Followers</div>
                <div class=""><strong>500</strong> Following</div>
            </div>
            <div class="" style="margin-top:20px;">
                <div class="">
                    <h4>{{ $user->profile->title }}</h4>
                </div>
                <div class="">
                    {{ $user->profile->description }}
                </div>
                <div class="">
                    <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row " style="margin-top:30px;">
        @foreach($user->posts as $post)
        <div class="col-md-4 col-sm-12 pt-3">
            <div class="">
                <h6>{{ $post->caption }}</h6>
            </div>
            <img class="w-100" src="{{ '/storage/'.$post->image }}" style="" alt="">
        </div>
        @endforeach
    </div>
</div>
@endsection
