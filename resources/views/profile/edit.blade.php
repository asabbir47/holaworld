@extends('layouts.app')

@section('content')
<div class="container">
    <form class="" action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <h2>Edit Title</h2>
        <div class="">
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} row">
                <label for="title" class="col-md-4 control-label">Title</label>

                <div class="col-md-6">
                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') ?? $user->profile->title }}"  autofocus>

                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title')  }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} row">
                <label for="description" class="col-md-4 control-label">Description</label>

                <div class="col-md-6">
                    <input id="description" type="text" class="form-control" name="description" value="{{ old('description') ?? $user->profile->description }}"  autofocus>

                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description')  }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }} row">
                <label for="url" class="col-md-4 control-label">URL</label>

                <div class="col-md-6">
                    <input id="url" type="text" class="form-control" name="url" value="{{ old('url') ?? $user->profile->url }}"  autofocus>

                    @if ($errors->has('url'))
                        <span class="help-block">
                            <strong>{{ $errors->first('url')  }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row" style="">
                <label for="image" class="col-md-4 control-label">Profile Image</label>

                <div class="col-md-6">
                    <input id="image" type="file" class="form-control" name="image" >

                    @if ($errors->has('image'))
                        <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="">
                <button type="submit" class="btn btn-primary" name="button">Edit Profile</button>
            </div>

        </div>

    </form>
</div>
@endsection
