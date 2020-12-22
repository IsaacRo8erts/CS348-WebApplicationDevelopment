@extends('layouts.app')

@section('title', 'Profiles')

@section('content')
    <p>A list of the Basketball Forum members:</p>
    <ul>
        @foreach ($profiles as $profile)
            <li><a href="{{ route('profiles.show', ['id' => $profile->id]) }}">{{ $profile->firstName }} {{ $profile->surname }}</a></li>
        @endforeach
    </ul>
@endsection