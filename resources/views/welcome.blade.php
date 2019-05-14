@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')
    <div class='row justify-content-md-center'>
        <h3 class='text-secondary p-4'>Hello, 你好, Hola, Bonjour, مرحبا</h3>
    </div>
    <div class='row justify-content-md-center'>
        <h5>About this Site</h5>
    </div>
    <div class='row justify-content-md-center'>
        <p class='text-info text-center'>This site allows users to create multi-line posts and select an artwork to associate with each. All posts are shown to all users. Some pre-generated Artwork Tags and Posts reaction Emotions are displayed, but cannot be changed. You can view a list of available artwork images on the <a href='/art'>Artwork</a> page</p>
    </div>
    @if(Auth::check())
        <div class='row justify-content-md-center'>
            <h5>User Info</h5>
        </div>
        <div class='row justify-content-md-center'>
            <p class='text-info text-center'>You are logged in as <em class='text-dark'>{{ Auth::user()->name }}</em>.</p>
        </div>
        <div class='row justify-content-md-center'>
            <p class='text-info text-center'>Today is {{ date('l F d') }} 😄</p>
        </div>
        <div class='row justify-content-md-center'>
            <p class='text-info text-center'>Feel free to have a look around using the Navigation links. All users have full access, so be careful when updating and deleting!</p>
        </div>
        <div class='row'>
            <h5 class='text-secondary'>Upcoming website upgrades</h5>
        </div>
        <div class='row'>
            <ul lass='list-group'>
                <li class='list-group-item'>Add private versus published filtering for posts.</li>
                <li class='list-group-item'>Add author attribution for posts.</li>
            </ul>
        </div>
    @else
        <div class='row justify-content-md-center'>
            <p class='text-info text-center'>You <em>cannot</em> view posts until you login. Go to the
                <a href='/login'>login</a> page.</p>
        </div>
    @endif
@endsection