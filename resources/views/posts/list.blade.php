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
                    <pre>{!! nl2br(e($post->id)) !!}</pre>
                    <p>{{$text}}</p>
                    <p>{{ $post->content }}</p>
                    @foreach($text as $item)
                        Anything
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