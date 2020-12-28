@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <p> Profile ID: <input type="text" name="profile_id"
            value="{{ old('profile_id') }}"></p>
        <p> Title: <input type="text" name="title"
            value="{{ old('title') }}"></p>
        <p> Content: <input type="text" name="content"
            value="{{ old('content') }}"></p>
        <input type="submit" value="Submit">
        <a href="{{ route('posts.index') }}">Cancel</a>
    </form>

       

    
@endsection