@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <h4 class='text-secondary'>💜 Hello, 你好, Hola, Bonjour, مرحبا 💜</h4>
        </div>
        @if(Auth::check())
            <div class="row justify-content-md-center">
                <p class='text-info'>You are logged in as <em class='text-dark'>{{ Auth::user()->name }}.</em></p>
            </div>
            <div class="row justify-content-md-center">
                <p class='text-info'>Today is {{ date('l F d') }}!</p>
            </div>
            <div class="row justify-content-md-center">
                <p class='text-info'>Feel free to have a look around using the Navigation links. All users have full access, so be careful when updating and deleting!</p>
            </div>
            <div class="row">
                <h5 class='text-secondary'>Upcoming website upgrades</h5>
            </div>
            <div class="row">
                <ul lass='list-group'>
                    <li class='list-group-item'>Add private versus published filtering for posts.</li>
                    <li class='list-group-item'>Add author attribution for posts.</li>
                </ul>
            </div>
        @else
            <div class="row justify-content-md-center">
                <p class='text-info'>You <em>cannot</em> view posts until you login. Go to the
                    <a href='/users/user'>User</a> page to login.</p>
            </div>
        @endif
    </div>
@endsection