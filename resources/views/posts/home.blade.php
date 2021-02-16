@extends('layouts.app')

@section('content')
    <h1 class="font-semibold text-3xl py-4">Posts</h1>

    @auth
        <a href="{{ route('create') }}" class="text-blue-600 hover:text-blue-800 transition duration-300 ease">Create a post</a>
    @endauth
    @foreach ($posts as $post)
        <div class="my-4">
            <h4 class="font-semibold text-xl"><a href="{{ route('single', $post->id) }}">{{ $post->title }}</a></h4>
            <p class="font-light">{{ $post->body }}</p>
        </div>
    @endforeach
@endsection