<h2><a href="{{ route('products.edit', $product) }}"> {{ $product->name }} </a></h2>
<span> @money($product->price) </span>
<span> {{ $product->stock }}</span>
<span> <a href="{{ route('categories.show', $product->category) }}">{{ $product->category->name }} </a></span>
<img style="width: 200px;" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">