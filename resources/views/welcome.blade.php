@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')
    <p class='text-info'>
        Your post here?
    </p>
    <h4 class='text-secondary'>Some header</h4>

    <form class='text-dark' method='get' action='/pages/posts/do/thing'>
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