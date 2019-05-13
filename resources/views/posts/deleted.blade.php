@extends('layouts.master')

@section('title')
    Post Deleted
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <p>You have deleted the post with ID: <strong>{{ $id }}</strong>?</p>
        </div>

        <div class="row justify-content-md-center">
            <form method='get' action='/posts/{{ $id }}'>
                <input type='submit' value='No, keep the post!' class='m-3 btn btn-primary btn-sm'>
            </form>
        </div>
    </div>
@endsection