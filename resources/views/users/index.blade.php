@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <p>A list of the Basketball Forum members:</p>
    <ul>
        @foreach ($users as $user)
            <li><a href="{{ route('users.show', ['id' => $user->id]) }}">{{ $user->name }}</a></li>
        @endforeach
    </ul>
    <a href="{{ route('users.create' )}}">Create User</a>
@endsection