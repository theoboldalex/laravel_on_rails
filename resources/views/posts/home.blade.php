@extends('layouts.app')

@section('content')
    <h1 class="font-semibold text-3xl py-4">Posts</h1>

    @auth
        <a href="{{ route('create') }}" class="text-blue-600 hover:text-blue-800 transition duration-300 ease">Create a post</a>
    @endauth
    @foreach ($posts as $post)
        <div class="my-4">
            <h4 class="font-semibold text-xl hover:opacity-60 tarnsition duration-300 ease"><a href="{{ route('single', $post->id) }}">{{ $post->title }}</a></h4>
            <small class="opacity-60">Posted by {{ $post->user->username }} {{ $post->created_at->diffForHumans() }}</small>
            <p class="font-light">{{ $post->body }}</p>
        </div>
    @endforeach
@endsection