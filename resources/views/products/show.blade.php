<!-- resources/views/products/show.blade.php -->
@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>

    <a href="{{ route('products.index') }}">Back to Products</a>
@endsection
