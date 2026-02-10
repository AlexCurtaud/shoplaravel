@extends('layout.app')

@section('title', 'Product Management')

@section('content')
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('layout._productForm')
        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>

@endsection
