@extends('layouts.app')

@section('content')
    @if (auth()->user())
        <p>Hello {{ auth()->user()->username }}</p>
    @endif
    <h1>Posts</h1>

    <a href="{{ route('create') }}">Create a post</a>
    @foreach ($posts as $post)
        <h4><a href="{{ route('single', $post->id) }}">{{ $post->title }}</a></h4>
        <p>{{ $post->body }}</p>
    @endforeach
@endsection