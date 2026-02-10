@extends('layout.app')

@section('title', 'Category : {{ $category->name }}')

@section('content')
    <h1>{{ $category->name }}</h1>
    @forelse ($products as $product)
        <x-product-card :product="$product"/>
        <form action="{{ route('products.destroy', $product) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-primary">Delete Product</button>
        </form>
    @empty
        <p>Not any product</p>
    @endforelse
@endsection