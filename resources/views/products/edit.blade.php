@extends('layouts.app')
<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PATCH')
    <input type="text" name="name" value="{{ $product->name }}">
    <input type="text" name="description" value="{{ $product->description }}">
    <input type="number" name="price" value="{{ $product->price }}">
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    <!-- Other input fields -->
    <button type="submit">Update Product</button>
</form>
