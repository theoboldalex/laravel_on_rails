@extends('layouts.app')

@section('content')
    <h1 class="font-semibold text-3xl my-4">Posts by {{ auth()->user()->username }}</h1>

    @foreach ($posts as $post)
        <div class="my-4">
            <h4 class="font-semibold text-xl"><a href="{{ route('single', $post->id) }}">{{ $post->title }}</a></h4>
            <p class="font-light">{{ $post->body }}</p>
        </div>
        <div class="flex my-4">
            <a href="{{ route('update', $post->id ) }}" class="mr-4 text-blue-600 hover:text-blue-800 transition duration-300 ease"><button>Edit</button></a>
            <form action="{{ route('delete', $post->id) }}" method="POST">
                @csrf
                <button type="submit" class="text-blue-600 hover:text-blue-800 transition duration-300 ease">Delete</button>
            </form>
        </div>
    @endforeach
@endsection