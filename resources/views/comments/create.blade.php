@extends('layouts.app')

@section('title', 'Add Comment')

@section('content')
    <form method="POST" action="{{ route('comments.store') }}">
        @csrf
        <p> Profile ID: <input type="text" name="user_id"
            value="{{ old('user_id') }}"></p>
        <p> Post ID: <input type="text" name="post_id"
            value="{{ old('post_id') }}"></p>
        <p> Comment: <input type="text" name="comment"
            value="{{ old('comment') }}"></p>
        <input type="submit" value="Submit">
        <a href="{{ route('posts.index') }}">Cancel</a>
    </form>
@endsection