@php
    use App\Models\User;
    use App\Models\Comment;
    $comments = Comment::get()->where('post_id', $post->id);
@endphp
@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <ul>
        @php
            $user = User::find($post->user_id);
        @endphp

        Author: {{ $user->name }}<p></p>

        <h1> {{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <b>Comments:</b>
        <p></p>
        @foreach ($comments as $comment)
        @php
            $user = User::find($comment->user_id);
        @endphp
        
        <li> {{ $comment->comment }} </li>
        By: <a href="{{ route('users.show', ['id' => $user->id]) }}">{{ $user->name }} </a>
        <p></p>
        @endforeach
    </ul>

    <button onclick="location.href='{{ route('comments.create' )}}'">Add Comment</button>
@endsection