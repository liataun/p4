@extends('layouts.master')

@section('title')
    Create New Post
@endsection

@section('content')
    <h4 class='text-secondary'>Share Your Poetry or Prose</h4>

    <form class='text-dark' method='post' action='/posts/insert'>
        @csrf

        <div class='form-group'>
            <label for='title'>* Enter title for post</label>
            <input type='text' class='form-control' id='title' name='title'
                   value='{{old('title')}}' placeholder='A Day in the Life'>
            @include('includes.error-field', ['fieldName' => 'title'])
        </div>

        <div class='form-group'>
            <label for='content'>* Type your poem or prose here</label>
            <textarea class='form-control'
                      id='content'
                      name='content'
                      rows='10'
                      placeholder='My day started with rain and washed away from there...'>{{old('content')}}</textarea>
            @include('includes.error-field', ['fieldName' => 'content'])
        </div>

        <div class='form-group'>
            <label for='artwork'>* Select Artwork Image to go with your post (preview not available)</label>
            <select class='form-control' name='artwork' name='artwork'>
                <option value=''>Choose one...</option>
                @foreach($art as $artwork)
                    <option value='{{ $artwork->id }}'
                    {{ (old('artwork') == $artwork->id) ? 'selected' : '' }}>{{ $artwork->label }}</option>
                @endforeach
            </select>
            @include('includes.error-field', ['fieldName' => 'artwork'])
        </div>

        <input type='submit' class='mb-3 btn btn-primary' name='post' value='Create Post'>
    </form>
@endsection