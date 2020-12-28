@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <p>A list of the Basketball Forum posts:</p>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }} </a></li>
        @endforeach
    </ul>
    <a href="{{ route('posts.create' )}}">Create Post</a>
@endsection