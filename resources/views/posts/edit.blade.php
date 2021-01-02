@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <form method="POST" action="{{ route('posts.update')}}">
        @csrf
        <input type="hidden" name="post_id"
            value="{{ $post -> id }}">
        <p> Title: <input type="text" name="title"
            value="{{ old('title') }}"></p>
        <p> Content: <input type="text" name="content"
            value="{{ old('content') }}"></p>

        <button onclick="location.href='{{ route('posts.update' )}}'">Edit</button>
        <a href="{{ route('posts.index' )}}">Cancel</a>
    </form>

@endsection