@extends('layouts.app')

@section('content')
    <h1 class="font-semibold text-3xl my-4">{{ $post->title }}</h1>
    <small class="opacity-60">By {{ $post->user->username }}</small>
    <div class="font-light">
        {{ $post->body }}
    </div>

    <hr class="my-4">
        
    @can('delete', $post)
        <div class="flex my-4">
            <a href="{{ route('update', $post->id ) }}" class="mr-4 text-blue-600 hover:text-blue-800 transition duration-300 ease"><button>Edit</button></a>
            <form action="{{ route('delete', $post->id) }}" method="POST">
                @csrf
                <button type="submit" class="text-blue-600 hover:text-blue-800 transition duration-300 ease">Delete</button>
            </form>
        </div>
    @endcan
@endsection