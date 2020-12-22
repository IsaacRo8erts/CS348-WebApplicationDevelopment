@extends('layouts.app')

@section('title', 'Profile Details')

@section('content')
    <ul>
        <li>Firstname: {{ $profile->firstName }}</li>
        <li>Surname: {{ $profile->surname }}</li>
        <li>Age: {{ $profile->age }}</li>
        <li>Favourite Team: {{ $profile->favouriteTeam }}</li>
        <li>Email Adress: {{ $profile->email }}</li>
    </ul>
@endsection