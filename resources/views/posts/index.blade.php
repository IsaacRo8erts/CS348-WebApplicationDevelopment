@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <p>A list of the Basketball Forum posts:</p>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', ['id' => $post->profile_id]) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
@endsection