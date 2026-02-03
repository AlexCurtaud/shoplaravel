@extends('layout.app')

@section('title', 'Home Page - Solid Snow Shop')

@section('content')
    <h1>Welcome to {{ $boutique['name'] }}</h1>
    <p>An original shop where you will find all equipment that relate freeski and snowboard culture</p>
    @if ($boutique['shopState'])
        <span>It's open</span>
    @else
        <span>It's closed</span>
    @endif
@endsection
