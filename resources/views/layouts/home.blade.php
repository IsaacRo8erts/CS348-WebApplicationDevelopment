@extends('layouts.app')
@include('layouts.style')

@section('title', 'Basketball Forum')

@section('content')
    <p>Date/Time: <span id="datetime"></span></p>
    <p id="datetime"></p>
    <script>
        var dt = new Date();
        document.getElementById("datetime").innerHTML = dt.toLocaleString();
    </script>

    <center><p><h1><a href="/users">Users</a></h1></p>
    <p><h1><a href="/posts">Posts</a></h1></p></center>
@endsection


