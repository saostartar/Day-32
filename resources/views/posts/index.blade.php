<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>Blog</h1>
    <a href="{{ route('posts.create') }}">Add New Post</a>

    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
