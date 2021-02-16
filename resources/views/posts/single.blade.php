@extends('layouts.app')

@section('content')
    <h1 class="font-semibold text-3xl my-4">{{ $post->title }}</h1>
    <div class="font-light">
        {{ $post->body }}
    </div>

    <div class="flex">
        <a href="{{ route('update', $post->id ) }}" class="mr-4"><button>Edit</button></a>
        <form action="{{ route('delete', $post->id) }}" method="POST">
            @csrf
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection