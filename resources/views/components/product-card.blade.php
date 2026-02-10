<h2><a href="{{ route('products.edit', $id) }}"> {{ $name }} </a></h2>
<span> @money($price) </span>
<span> {{ $stock }}</span>
<img style="width: 200px;" src="{{ asset('storage/' . $image) }}" alt="{{ $name }}">
