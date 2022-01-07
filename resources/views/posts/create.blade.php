@extends('layouts.app')

@section('content')
<div class="container">

    <form class="" action="/p" enctype="multipart/form-data" method="post">
        <!-- {{ csrf_field() }} -->
        @csrf
        <h2>Add New Post</h2>
        <div class="">
            <div class="form-group{{ $errors->has('caption') ? ' has-error' : '' }} row">
                <label for="caption" class="col-md-4 control-label">Post Caption</label>

                <div class="col-md-6">
                    <input id="caption" type="text" class="form-control" name="caption" value="{{ old('caption') }}"  autofocus>

                    @if ($errors->has('caption'))
                        <span class="help-block">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row" style="">
                <label for="image" class="col-md-4 control-label">Post Image</label>

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
                <button type="submit" class="btn btn-primary" name="button">Add New Post</button>
            </div>

        </div>

    </form>
</div>
@endsection
