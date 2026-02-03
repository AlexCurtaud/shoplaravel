@extends('layout.app')

@section('title', 'Products - Solid Snow Shop')

@section('content')
    <h1>Products</h1>
    @forelse ($products as $product)
        <p>{{ $loop->index }}</p>
        <h2> {{ $product['name'] }} </h2>
        <span> {{ $product['price'] }} </span>
    @empty
        <p>Not any product</p>
    @endforelse

    @endsection

