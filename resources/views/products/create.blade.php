<!-- resources/views/products/create.blade.php -->
@extends('layouts.app')

@section('title', 'Add New Product')

@section('content')
    <h1>Add New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <button type="submit">Add Product</button>
    </form>
@endsection
