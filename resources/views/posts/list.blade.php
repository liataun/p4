@extends('layouts.master')

@section('title')
    Posts
@endsection

@section('content')
    <h4 class='text-secondary'>List of Posts!</h4>

    @if(count($posts) == 0)
        No matches found.
    @else
        <ul lass='list-group'>
            @foreach($posts as $post)
                <li class='list-group-item'>
                    <pre>{{ $post->id }}</pre>
                    <a href='{{ $post->artwork->path }}'>{{ $post->artwork->label }}</a>
                    <pre>{{ 'With pre element=> '.$post->content }}</pre>
{{--                    <p>{{ 'With p element=> '.$post->content }}</p>--}}
                    @foreach($text[$post->id] as $item)
                        <p>{{ 'With explode=> '.$item }}</p>
                    @endforeach
                    <a href='/posts/update/form/{{ $post->id }}'><span class="fas fa-tint"> Update post</span></a>
                    <a href='/posts/delete/form/{{ $post->id }}'><span class="fas fa-window-close"> Delete post</span></a>
                </li>
            @endforeach
        </ul>
    @endif
    <div>
        <p class='text-info'>
            You may create a new post: <a href='/posts/insert/form'><span class="fas fa-paint-brush"> New</span></a>
        </p>
    </div>
@endsection