@extends('layouts.app')

@section('title', 'Profiles')

@section('content')
    <p>Basketball Forum Profiles:</p>
    <ul>
    <p>Name:</p>
        @foreach ($profiles as $profile)
            <li>{{ $profile->firstName }} {{ $profile->surname }}</li>
        @endforeach
    </ul>
@endsection