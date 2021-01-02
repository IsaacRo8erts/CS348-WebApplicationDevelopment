@php
    use App\Models\User;
    use App\Models\Comment;
    use App\Models\Post;
    $comments = Comment::get()->where('user_id', $user->id);
    $posts = Post::get()->where('user_id', $user->id);
@endphp

@extends('layouts.app')
@include('layouts.style')

@section('title', 'User Details')

@section('content')
    <ul>
    <b>Your Details:</b>
        <li>Name: {{ $user->name }}</li>
        <li>Password: {{ $user->password }}</li>
        <li>Favourite Team: {{ $user->favouriteTeam }}</li>
        <li>Email Adress: {{ $user->email }}</li>
    
    <p></p>
    <b>Your Posts:</b>
    @foreach ($posts as $post)
        @php
            $user = User::find($post->user_id);
        @endphp
        
        <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }} </a></li>
        <p></p>
    @endforeach

    <p></p>
    <b>Comments:</b>
    @foreach ($comments as $comment)
        @php
            $user = User::find($comment->user_id);
        @endphp
        
        <li> {{ $comment->comment }} </li>
        <p></p>
    @endforeach

    @if(Auth::id()==$user->id)
    <form method="POST" action="{{ route('users.delete', ['id' => $user->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete User</button>
    </form>
    @endif
    </ul>
@endsection