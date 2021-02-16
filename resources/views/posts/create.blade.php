@extends('layouts.app')

@section('content')
    <h1 class="font-semibold text-3xl my-4">Create a post</h1>
    <form action="/create" method="POST" class="flex flex-col">
        @csrf
        <div class="my-2 flex flex-col">
            <label for="title">Title:</label>
            <input type="text" name="title" class="border rounded p-2">
            @error('title')
            <small style="color: red;">{{ $message }}</small> 
            @enderror
        </div>
        <div class="my-2 flex flex-col">
            <label for="body">Body:</label>
            <textarea name="body" id="body" cols="30" rows="10" class="border rounded p-2"></textarea>
            @error('body')
            <small style="color: red;">{{ $message }}</small> 
            @enderror
        </div>
        <button type="submit" name="submit" class="py-2 px-4 bg-blue-400 text-white hover:bg-blue-600 transition duration-300 ease rounded">Create post</button>
    </form>
@endsection