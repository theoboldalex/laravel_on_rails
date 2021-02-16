@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <h1 class="font-semibold text-3xl my-4">Update post {{ $post->id }}</h1>

        <form action="{{ route('update', $post->id) }}" method="POST" class="flex flex-col">
            @csrf
            <div class="flex flex-col">
                <label for="title">Title:</label>
                <input type="text" name="title" value="{{ $post->title }}" class="border rounded p-2 my-2">
                @error('title')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex flex-col my-2">
                <label for="body">Body:</label>
                <textarea name="body" id="body" cols="30" rows="10" class="border rounded p-2">{{ $post->body }}</textarea>
                @error('body')
                <small style="color: red;">{{ $message }}</small> 
                @enderror
            </div>
            <button type="submit" name="submit" class="bg-blue-400 py-2 px-4 hover:bg-blue-600 transition duration-300 ease text-white rounded my-4">Update post</button>
        </form>
    </div>
@endsection