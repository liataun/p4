@extends('layouts.master')

@section('title')

@endsection

@section('content')
    @php
        dump($debug ?? 'Variable not set!');
    @endphp
@endsection