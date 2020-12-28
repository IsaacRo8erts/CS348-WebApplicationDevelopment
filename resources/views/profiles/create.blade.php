@extends('layouts.app')

@section('title', 'Create Profile')

@section('content')
    <form method="POST" action="{{ route('profiles.store') }}">
        @csrf
        <p>First name: <input type="text" name="firstName"
            value="{{ old('firstName') }}"></p>
        <p>Surname: <input type="text" name="surname"
            value="{{ old('surname') }}"></p>
        <p>Age: <input type="text" name="age"
            value="{{ old('age') }}"></p>
        <p>Favourite team: <input type="text" name="favouriteTeam"
            value="{{ old('favouriteTeam') }}"></p>
        <p>Email: <input type="text" name="email"
            value="{{ old('email') }}"></p>
        <input type="submit" value="Submit">
        <a href="{{ route('profiles.index' )}}">Cancel</a>
    </form>

    
@endsection