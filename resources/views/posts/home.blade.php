@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    <a href="{{ route('create') }}">Create a post</a>
    @foreach ($posts as $post)
        <h4><a href="{{ $post->id }}">{{ $post->title }}</a></h4>
        <p>{{ $post->body }}</p>
    @endforeach
@endsection