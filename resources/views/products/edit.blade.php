@extends('layout.app')

@section('title', 'Update {{ $products->name }}')

@section('content')
    {{-- Form for the update method of the ProductController --}}
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">

        @method('PUT')
        @csrf
        @include('layout._productForm')
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>

    {{-- Form for the destroy method of the ProductController --}}
    {{-- <script>
        function confirmAge() {
            return confirm('Do you confirm the suppression of the product ?') {
        }
        }
    </script> --}}
    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-primary" value="Confirmer"
            onclick="return confirm('Are you sure to delete the Porduct ?')">Delete Product</button>
    </form>

@endsection
