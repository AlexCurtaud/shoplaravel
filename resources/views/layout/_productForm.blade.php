<div class="form-group">
    <label for="name">Name</label>
    {{-- Old() is used in order to keep the data if we go backward and  here it has a default value to make sure taht we have the value of the selected product we want to update --}}
    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $product->name ?? "") }}"
        required>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea id="description" name="description" class="form-control">{{ old('description', $product->description ?? "") }}</textarea>
</div>
<div class="form-group">
    <label for="price">Price</label>
    <input type="number" id="price" name="price" class="form-control" step="0.01"
        value="{{ old('price', $product->price ?? "") }}" required>
</div>
<div class="form-group">
    <label for="quantity">Stock</label>
    <input type="number" id="stock" name="stock" class="form-control" value="{{ old('stock', $product->stock ?? "") }}"
        required>
</div>
<div class="form-group">
    <label for="image">Image</label>
    <input type="file" id="image" name="image" class="form-control" accept="image/*">
</div>
<div class="form-group">
    <label for="category_id">Category</label>
    <input type="text" id="category_id" name="category_id" class="form-control"
        value="{{ old('category_id', $product->category_id ?? "") }}" required>
</div>
<div class="form-group">
    <label for="active">Active</label>
    <input type="checkbox" id="active" name="active" value="1" checked="{{ $product->active ?? ""}}">
</div>
