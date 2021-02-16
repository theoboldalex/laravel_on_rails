@extends('layouts.app')

@section('content')
    <div class="flex justify-center mt-8">
        <div class="py-4 px-10 border rounded bg-gray-200 shadow-lg w-6/12">
            <h1 class="font-semibold text-3xl py-4">Login</h1>  

            <form action="{{ route('login') }}" method="post" class="flex flex-col">
                @csrf
                <label for="email">Email:</label>
                <input type="email" name="email" class="border rounded p-2">
                @error('email')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
                <label for="password">Password:</label>
                <input type="password" name="password" class="border rounded p-2">
                @error('password')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
                <input type="submit" name="submit" value="Login" class="p-2 btn bg-blue-400 hover:bg-blue-600 text-white rounded my-4 transition duration-300 ease">
                <small>Don't have an account? <a href="{{ route('register') }}" class="text-blue-600">Register</a></small>
            </form>
        </div>
    </div>
@endsection