@extends('layouts.master')

@section('title')
    Create New Post
@endsection

@section('content')
    <h4 class='text-secondary'>Share Your Poetry or Prose</h4>

    <p class='text-info'>{{'message'}}</p>

    <form class='text-dark' method='post' action='/pages/posts/do/thing'>
        <div class='form-group'>
            <label for='title'>Enter title for post</label>
            <input type='text' class='form-control' id='title' name='title'
                   value='{{old('title') ?? 'A Day in the Life'}}'>
            @if($errors->get('title'))
                <div class='alert alert-danger'>{{ $errors->first('title') }}</div>
            @endif
        </div>
        <input type='submit' class='mb-3 btn btn-primary' name='post' value='Save Post'>
    </form>
    @if(count($errors) > 0)
        <div class='alert alert-danger'>{{ 'Error count: '.count($errors).'. Details are displayed next to input field(s).' }}</div>
    @endif
@endsection