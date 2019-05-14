@extends('layouts.master')

@section('title')
    Update Post
@endsection

@section('content')
    <h4 class='text-secondary'>Edit Your Poetry or Prose</h4>

    <form class='text-dark' method='post' action='/posts/update/{{ $post->id }}'>
        @method('PUT')
        @csrf

        <div class='form-group'>
            <label for='title'>* Edit title for post</label>
            <input type='text' class='form-control' id='title' name='title'
                   value='{{ old('title') ?? $post->title }}' placeholder='A Day in the Life'>
            @include('includes.error-field', ['fieldName' => 'title'])
        </div>

        <div class='form-group'>
            <label for='content'>* Edit your poem or prose here</label>
            <textarea class='form-control'
                      id='content'
                      name='content'
                      rows='10'
                      placeholder='My day started with rain and washed away from there...'>{{ old('content') ?? $post->content }}</textarea>
            @include('includes.error-field', ['fieldName' => 'content'])
        </div>

        <div class='form-group'>
            <label for='artwork'>* Select Artwork Image to go with your post (preview not available)</label>
            <select class='form-control' id='artwork' name='artwork'>
                <option value=''>Choose one...</option>
                @foreach($art as $artwork)
                    <option value='{{ $artwork->id }}'
                        {{ (old('artwork') ?? $post->artwork_id == $artwork->id) ? 'selected' : '' }}>{{ $artwork->label }}</option>
                @endforeach
            </select>
            @include('includes.error-field', ['fieldName' => 'artwork'])
        </div>

        <input type='submit' class='mb-3 btn btn-primary' name='put' value='Update Post'>
    </form>
@endsection