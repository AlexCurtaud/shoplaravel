@extends('layout.app')

@section('title', 'Update {{ $products->name }}')

@section('content')
    {{-- Form for the update method of the ProductController --}}
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">

        @method('PUT')
        @csrf
        @include('layout._productForm')

        {{-- Part of the form for the categories --}}
        <div class="form-group">
            <label for="category_id">Category</label>
            <select id="category_id" name="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" <?php if ($product->category_id === $category->id) {
                        echo 'selected';
                    } ?>>
                        {{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>

    {{-- Form for the destroy method of the ProductController --}}
    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-primary" value="Confirmer"
            onclick="return confirm('Are you sure to delete the Porduct ?')">Delete Product</button>
    </form>

@endsection
