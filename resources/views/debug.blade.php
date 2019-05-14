@extends('layouts.master')

@section('title')

@endsection

@section('content')
    @php
        dump($debug ?? 'Variable debug not set!');
        dump($emote_user ?? 'Variable emote_user not set!');
    @endphp
@endsection