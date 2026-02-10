@extends('layout.app')

@section('title', 'Products - Solid Snow Shop')

@if (session('success'))
    <script>
        alert('{{ session('success') }}')
    </script>
@endif

@section('content')
    <h1>Products</h1>
        <x-product-card :id="$product->id" :name="$product->name" :price="$product->price" :stock="$product->stockStatus" :image="$product->image" />
        <form action="{{ route('products.destroy', $product) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-primary">Delete Product</button>
        </form>
@endsection