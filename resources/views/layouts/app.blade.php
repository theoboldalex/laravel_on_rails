<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Laravel on Rails</title>
</head>
<body>
    <nav class="shadow h-16">
        <div class="flex justify-between items-center h-full mx-20">
            <a href="{{ route('home') }}"><h1 class="text-2xl font-bold"><em>Laravel on Rails</em></h1></a>
            @auth
                <div class="flex">
                <a href="{{ route('userPosts', auth()->user()) }}" class="opacity-60"><em>Hello {{ auth()->user()->username }}</em></a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class=" ml-4 opacity-60 hover:opacity-80 transition duration-300 ease">Logout</button>
                    </form>
                </div>
            @endauth
            @guest
                <div class="flex">
                    <a href="{{ route('login') }}" class="opacity-60 hover:opacity-80 transition duration-300 ease">Login</a>
                    <a href="{{ route('register') }}" class="ml-4 opacity-60 hover:opacity-80 transition duration-300 ease">Register</a>
                </div>
            @endguest
        </div>
    </nav>
    <main class="container mx-20">
        @yield('content')
    </main>
</body>
</html>
