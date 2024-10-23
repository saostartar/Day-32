<!-- resources/views/posts/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $post->title }}" required><br><br>

        <label for="content">Content:</label>
        <textarea id="content" name="content" required>{{ $post->content }}</textarea><br><br>

        <label for="seo_title">SEO Title:</label>
        <input type="text" id="seo_title" name="seo_title" value="{{ $post->seo_title }}"><br><br>

        <label for="seo_description">SEO Description:</label>
        <input type="text" id="seo_description" name="seo_description" value="{{ $post->seo_description }}"><br><br>

        <button type="submit">Update Post</button>
    </form>
@endsection
