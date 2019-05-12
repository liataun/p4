@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')
    <h4 class='text-secondary'>💜 Hello, 你好, Hola, Bonjour, مرحبا 💜</h4>
    @if(Auth::check())
        <p class='text-info'>You are logged in as <span class='text-dark'>{{ Auth::user()->name }}</span></p>
        <p class='text-info'>Today is {{ date('l F d') }}!</p>
        <p class='text-info'>Feel free to have a look around using the Navigation links. All users have full access, so be careful when updating and deleting!</p>
    @else
        <p class='text-info'>You can only view posts until you login. Go to the
            <a href='/users/user'>User</a> page to login.</p>
        <p class='text-info'>ToDo List out posts.</p>
    @endif
@endsection