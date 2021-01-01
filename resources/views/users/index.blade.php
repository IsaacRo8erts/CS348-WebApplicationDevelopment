@extends('layouts.app')
@include('layouts.style')

@section('title', 'Users')

@section('content')
    <p>A list of the Basketball Forum members:</p>
    <ul>
        @foreach ($users as $user)
            <li><a href="{{ route('users.show', ['id' => $user->id]) }}">{{ $user->name }}</a></li>
        @endforeach
    </ul>
    <button onclick="location.href='{{ route('register' )}}'">Create User</button>
@endsection