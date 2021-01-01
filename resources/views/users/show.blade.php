@extends('layouts.app')
@include('layouts.style')

@section('title', 'User Details')

@section('content')
    <ul>
        <li>Name: {{ $user->name }}</li>
        <li>Password: {{ $user->password }}</li>
        <li>Favourite Team: {{ $user->favouriteTeam }}</li>
        <li>Email Adress: {{ $user->email }}</li>
    </ul>

    <form method="POST" action="{{ route('users.delete', ['id' => $user->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete User</button>
    </form>
@endsection