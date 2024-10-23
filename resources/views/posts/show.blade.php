<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

@section('title', $post->seo_title ?? $post->title)

@section('description', $post->seo_description ?? Str::limit($post->content, 160))

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.index') }}">Back to Blog</a>
@endsection
