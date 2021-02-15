@extends('layouts.app')

@section('content')
    <h1>Update post {{ $post->id }}</h1>

    <form action="{{ route('update', $post->id) }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $post->title }}">
        @error('title')
            <small style="color: red;">{{ $message }}</small>
        @enderror
        <label for="body">Body:</label>
        <textarea name="body" id="body" cols="30" rows="10">{{ $post->body }}</textarea>
        @error('body')
           <small style="color: red;">{{ $message }}</small> 
        @enderror
        <input type="submit" name="submit" value="Update post">
    </form>
@endsection