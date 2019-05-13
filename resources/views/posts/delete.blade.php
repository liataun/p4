@extends('layouts.master')

@section('title')
    Delete Post
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <p>Are you sure you want to delete <strong>{{ $post->title }}</strong>?</p>
        </div>

        <div class="row justify-content-md-center">
            <form method='post' action='/posts/delete/{{ $post->id }}'>
                @method('DELETE')
                @csrf

                <input type='submit' value='Yes, delete!' class='m-3 btn btn-danger btn-lg'>
            </form>
        </div>

        <div class="row justify-content-md-center">
            <form method='get' action='/posts/{{ $post->id }}'>
                <input type='submit' value='No, keep the post!' class='m-3 btn btn-primary btn-sm'>
            </form>
        </div>
    </div>
@endsection