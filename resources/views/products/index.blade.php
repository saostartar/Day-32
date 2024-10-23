<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('products.create') }}">Add New Product</a>

    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a> - ${{ $product->price }}
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
