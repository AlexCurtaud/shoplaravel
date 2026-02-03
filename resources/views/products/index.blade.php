@extends('layout.app')

@section('title', 'Products - Solid Snow Shop')

@section('content')
    <h1>Products</h1>
    @forelse ($products as $product)
        <x-product-card :name="$product['name']" :price="$product['price']" />
    @empty
        <p>Not any product</p>
    @endforelse

@endsection
