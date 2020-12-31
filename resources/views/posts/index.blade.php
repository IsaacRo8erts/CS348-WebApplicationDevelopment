@php
    use App\Models\User;
@endphp


@extends('layouts.app')

@section('title', 'Posts')



@section('content')
    <p>A list of the Basketball Forum posts:</p>
    <ul>
        @foreach ($posts as $post)
        @php
            $user = User::find($post->user_id);
        @endphp
            <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }} </a></li>
            <a href="{{ route('users.show', ['id' => $user->id]) }}">{{ $user->name }} </a>
        @endforeach
    </ul>
    <a href="{{ route('posts.create' )}}">Create Post</a>
@endsection