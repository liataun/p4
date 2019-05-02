@extends('layouts.master')

@section('title')
    Posts
@endsection

@section('content')
    List of Posts!

    @if(count($posts) == 0)
        No matches found.
    @else
        <ul>
            @foreach($posts as $post)
                <pre>{!! nl2br(e($post->content)) !!}</pre>
            @endforeach
        </ul>
    @endif
@endsection