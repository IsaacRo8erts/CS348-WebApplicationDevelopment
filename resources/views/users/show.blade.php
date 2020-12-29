@extends('layouts.app')

@section('title', 'Profile Details')

@section('content')
    <ul>
        <li>Firstname: {{ $user->name }}</li>
        <li>Password: {{ $user->password }}</li>
        <li>Favourite Team: {{ $user->favouriteTeam }}</li>
        <li>Email Adress: {{ $user->email }}</li>
    </ul>
@endsection