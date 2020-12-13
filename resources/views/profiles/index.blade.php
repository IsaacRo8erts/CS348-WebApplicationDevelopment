@extends('layouts.app')

@section('title', 'Profiles')

@section('content')
    <p>The profiles of the Basketball Forum:</p>
    <ul>
        @foreach ($profiles as $profile)
            <li>{{ $profile->name }}</li>
        @endforeach
    </ul>
@endsection