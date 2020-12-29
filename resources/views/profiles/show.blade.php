@extends('layouts.app')

@section('title', 'User Details')

@section('content')
    <ul>
        <li>Name: {{ $profile->firstName }}</li>
        <li>Password: {{ $profile->surname }}</li>
        <li>Age: {{ $profile->age }}</li>
        <li>Favourite Team: {{ $profile->favouriteTeam }}</li>
        <li>Email Adress: {{ $profile->email }}</li>
    </ul>
@endsection