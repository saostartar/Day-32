<!-- resources/views/posts/create.blade.php -->
@extends('layouts.app')

@section('title', 'Add New Post')

@section('content')
    <h1>Add New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea><br><br>

        <label for="seo_title">SEO Title:</label>
        <input type="text" id="seo_title" name="seo_title"><br><br>

        <label for="seo_description">SEO Description:</label>
        <input type="text" id="seo_description" name="seo_description"><br><br>

        <button type="submit">Add Post</button>
    </form>
@endsection
