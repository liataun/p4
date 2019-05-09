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
                <a href='/posts/insert/{{ $post->id }}'><span class="fas fa-paint-brush"> Create WHAT?????!!!!!</span></a>
                <a href='/posts/update/{{ $post->id }}'><span class="fas fa-tint"> Update post</span></a>
                <a href='/posts/delete/{{ $post->id }}'><span class="fas fa-window-close"> Delete post</span></a>
            @endforeach
        </ul>
    @endif
@endsection