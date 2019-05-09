@extends('layouts.master')

@section('title')
    User Profile
@endsection

@section('content')
    @if(Auth::check())
        <p>You are currently logged in.</p>
        <p>Do you want to logout?</p>
        <form method='POST' id='logout' action='/logout'>
            {{ csrf_field() }}
            <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
        </form>
    @else
        <p>You are NOT currently logged in.</p>
        <a href='/login'>Login Here</a>
    @endif
@endsection