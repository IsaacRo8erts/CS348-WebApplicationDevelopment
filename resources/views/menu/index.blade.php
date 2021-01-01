@extends('layouts.home')
@include('layouts.style')

@section('title')
<p class="text-calibri">Basketball Forum<img src="{{ URL::asset('images/nba.png') }}" width="200" height="50"></p>
@endsection

@section('models')
    <h1><a href="/users">Users</a></h1>
    <h1><a href="/posts">Posts</a></h1>
@endsection