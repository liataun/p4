@extends('layouts.master')

@section('title')
    Posts
@endsection

@section('content')
    <div class='row justify-content-md-center'>
        <h3 class='p-4'>All Posts</h3>
    </div>
    <div class='row justify-content-md-center'>
        @if(count($posts) == 0)
            No Posts found.
        @else
            <ul class='list-group'>
                @foreach($posts as $post)
                    <li class='list-group-item'>
                        <h4 class='text-muted'>{{ $post->title }}</h4>
                        {{--                    <pre>{{ $post->id }}</pre>--}}
                        {{--                    <p>{{gettype( e($post->content) )}}</p>--}}
                        <a href='{{ $post->artwork->path }}'>{{ $post->artwork->label }}</a>
                        <p class='text-info'>{!! nl2br(e($post->content)) !!}</p>
                        <ul class='list-group'>
                            @foreach($post->emotions as $emotion)
                                <li class='list-group-item list-group-item-secondary'>User <span class='text-secondary'>{{ $emotion->user->name }}</span> responded with
                                    <em class='text-success'>{{ $emotion->name }}</em></li>
                            @endforeach
                        </ul>
                        <a href='/posts/update/form/{{ $post->id }}'><span class='fas fa-tint'> Update post</span></a>
                        <a href='/posts/delete/form/{{ $post->id }}'><span class='fas fa-window-close'> Delete post</span></a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class='row justify-content-md-center'>
        <p class='text-info'>
            Create a new post: <a href='/posts/insert/form'><span class='fas fa-paint-brush'> New</span></a>
        </p>
    </div>
@endsection