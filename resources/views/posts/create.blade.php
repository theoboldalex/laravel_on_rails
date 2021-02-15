@extends('layouts.app')

@section('content')
    <form action="/create" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title">
        <label for="body">Body:</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" value="Create post">
    </form>
@endsection