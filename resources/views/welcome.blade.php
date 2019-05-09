@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')
    @if(Auth::check())
        <p class='text-info'>
            ToDo ---------- Do something else with this space
        </p>
        <h4 class='text-secondary'>Some header</h4>

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
    @else
        <p class='text-info'>You can only view posts until you login. Go to the
            <a href='/users/user'>User</a> page to login.</p>
        <p class='text-info'>ToDo List out posts.</p>
    @endif
@endsection