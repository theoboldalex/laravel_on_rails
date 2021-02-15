@extends('layouts.app')

@section('content')
  <h1>Login</h1>  

  <form action="{{ route('login') }}" method="post" style="display: flex; flex-direction: column; width: 50vw;">
    @csrf
    <label for="email">Email:</label>
    <input type="email" name="email">
    @error('email')
        <small style="color: red;">{{ $message }}</small>
    @enderror
    <label for="password">Password:</label>
    <input type="password" name="password">
    @error('password')
        <small style="color: red;">{{ $message }}</small>
    @enderror
    <input type="submit" name="submit" value="Login" style="margin-top: 10px;">
</form>
@endsection