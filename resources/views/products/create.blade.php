@extends('layout.app')

@section('title', 'Product Management')

@section('content')
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('layout._productForm')
        <div class="form-group">
            <label for="category_id">Category</label>
            <select id="category_id" name="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>

@endsection
