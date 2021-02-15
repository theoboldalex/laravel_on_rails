@extends('layouts.app')

@section('content')
   <div class="flex justify-center mt-8">
      <div class="py-4 px-10 border rounded bg-gray-200 shadow-lg w-6/12">
         <h1 class="font-semibold text-3xl my-4">Register</h1>

         <form action="{{ route('register') }}" method="post" class="flex flex-col">
            @csrf
            <label for="username" class="font-light">Username:</label>
            <input type="text" name="username" class="border rounded p-2">
            @error('username')
               <small class="text-red-500">{{ $message }}</small> 
            @enderror
            <label for="email" class="font-light">Email:</label>
            <input type="email" name="email" class="border rounded p-2">
            @error('email')
               <small class="text-red-500">{{ $message }}</small> 
            @enderror
            <label for="password" class="font-light">Password:</label>
            <input type="password" name="password" class="border rounded p-2">
            @error('password')
               <small class="text-red-500">{{ $message }}</small> 
            @enderror
            <input type="submit" name="submit" value="Register" class="p-2 btn bg-blue-400 hover:bg-blue-600 text-white rounded my-4 transition duration-300 ease">
         </form>
         <small>Already have an account? <a href="{{ route('login') }}" class="text-blue-600">Login</a></small>
      </div>
   </div>
@endsection