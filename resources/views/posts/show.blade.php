@php
    use App\Models\User;
@endphp
@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <ul>
        @php
            $user = User::find($post->user_id);
        @endphp
        User ID: {{ $post->user_id }}
        <p>Name: {{ $user->name }}</p>

        <p><li>Title: {{ $post->title }}</li>
        <li>Content: {{ $post->content }}</li></p>
    </ul>

    <button onclick="location.href='{{ route('register' )}}'">Add Comment</button>
@endsection