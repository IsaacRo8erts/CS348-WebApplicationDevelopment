@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <ul>
        <li>User ID: {{ $post->user_id }}</li>
        <li>Title: {{ $post->title }}</li>
        <li>Content: {{ $post->content }}</li>
    </ul>
@endsection