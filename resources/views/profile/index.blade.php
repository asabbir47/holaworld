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
                <a href="#">Add a new Post</a>
            </div>
            <div class="" style="display:flex;">
                <div class="margin-right-30"><strong>105</strong> Posts</div>
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
                    <a href="{{-- $user->profile->url --}}">{{ $user->profile->url }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:30px;">
        <div class="col-md-4 col-sm-12">
            <img src="../image/sabbir.png" style="height:320px;" alt="">
        </div>
        <div class="col-md-4 col-sm-12">
            <img src="../image/sabbir_smile.jpg" style="height:320px;" alt="g">
        </div>
        <div class="col-md-4 col-sm-12">
            <img src="../image/sabbir_tie.jpg" style="height:320px;" alt="">
        </div>
    </div>
</div>
@endsection
