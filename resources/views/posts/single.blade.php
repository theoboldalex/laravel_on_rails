@extends('layouts.app')

@section('content')
<h1 class="font-semibold text-3xl my-4">{{ $post->title }}</h1>
<small class="opacity-60">By {{ $post->user->username }}</small><span class="px-2 opacity-60">|</span>
<small class="opacity-60">{{ $post->created_at->toFormattedDateString() }}</small>
<div class="font-light">
    {{ $post->body }}
</div>

<hr class="my-4">

<h4 class="font-semibold text-2xl">Comments</h4>
@foreach ($post->comments as $comment)
    <div class="bg-gray-100 shadow rounded p-4 my-2">
        <p>{{ $comment->user->username }}</p>
        <p class="text-sm opacity-60">{{ $comment->created_at->diffForHumans() }}</p>
        <small>{{ $comment->body }}</small>
    </div>
@endforeach

@auth
    {{-- COMMENT FORM --}}
    <h1 class="font-semibold text-xl my-4">Leave a comment</h1>
    <form action="{{ route('addComment', $post) }}" method="POST" class="flex flex-col">
        @csrf
        <div class="my-2 flex flex-col">
            <textarea name="body" id="body" cols="30" rows="10" class="border rounded p-2" placeholder="leave a comment..."></textarea>
            @error('body')
            <small style="color: red;">{{ $message }}</small> 
            @enderror
        </div>
        <button type="submit" name="submit" class="py-2 px-4 bg-blue-400 text-white hover:bg-blue-600 transition duration-300 ease rounded">Post comment</button>
    </form>
@endauth

<div class="flex my-4">
    <a href="{{ url()->previous() }}" class="mr-4 text-blue-600 hover:text-blue-800 transition duration-300 ease">Back</a>
    @can('delete', $post)
        <a href="{{ route('update', $post->id ) }}" class="mr-4 text-blue-600 hover:text-blue-800 transition duration-300 ease"><button>Edit</button></a>
        <form action="{{ route('delete', $post->id) }}" method="POST">
            @csrf
            <button type="submit" class="text-blue-600 hover:text-blue-800 transition duration-300 ease">Delete</button>
        </form>
    @endcan
</div>
@endsection