@extends('layouts.master')

@section('title')
    Artwork List
@endsection

@section('content')
    <div class='row justify-content-md-center'>
        <h3 class='p-4'>Available Artwork</h3>
    </div>
    <div class='row justify-content-md-center'>
        @if(count($art) == 0)
            No artwork found.
        @else
            <ul class='list-group'>
                @foreach($art as $image)
                    <li class='list-group-item'>
                        <h4 class='text-muted'>{{ $image->label }}</h4>
                        <img src='{{ $image->path }}'
                             class='img p-1'
                             id='{{ $image->label }}_{{ $image->id }}'
                             alt='{{ $image->alt_text }}'>
                        <p>Original site for this image: <a href='{{ $image->link }}'>{{ $image->link }}</a></p>
                        <h6 class='text-info'>Tags for this image:</h6>
                        <ul>
                            @foreach($image->tags as $tag)
                                <li><em>{{ $tag->name }}</em></li>
                            @endforeach
                        </ul>
                        <p class='small m-3'>&copy; Brian Twitchell</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection