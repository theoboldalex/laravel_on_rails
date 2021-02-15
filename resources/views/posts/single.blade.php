@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    {{ $post->body }}

    <a href="{{ route('update', $post->id ) }}"><button>Edit</button></a>
    <form action="{{ route('delete', $post->id) }}" method="POST">
        @csrf
        <input type="submit" value="Delete">
    </form>
@endsection