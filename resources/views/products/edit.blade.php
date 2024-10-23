<!-- resources/views/products/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $product->description }}</textarea><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="{{ $product->price }}" step="0.01" required><br><br>

        <button type="submit">Update Product</button>
    </form>
@endsection
