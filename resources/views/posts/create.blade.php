@extends('layouts.app')

@section('content')
    <form action="/create" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title">
        @error('title')
           <small style="color: red;">{{ $message }}</small> 
        @enderror
        <label for="body">Body:</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
        @error('body')
           <small style="color: red;">{{ $message }}</small> 
        @enderror
        <input type="submit" name="submit" value="Create post">
    </form>
@endsection