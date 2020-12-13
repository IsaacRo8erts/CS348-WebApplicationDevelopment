@extends('layouts.app')

@section('title', 'Profiles')

@section('content')
    <p>The profiles of the Basketball Forum:</p>
    <ul>
        @foreach ($profiles as $profile)
            <li>{{ $profile->firstName }}</li>
        @endforeach
    </ul>
@endsection