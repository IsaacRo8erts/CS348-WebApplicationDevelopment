@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <ul>
        <li>Profile ID: {{ $post->profile_id }}</li>
        <li>Title: {{ $post->title }}</li>
        <li>Content: {{ $post->content }}</li>
    </ul>
@endsection