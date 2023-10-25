<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <body class="antialiased">
            <div class="relative min-h-screen bg-white bg-center sm:flex sm:justify-center sm:items-center bg-dots-darker selection:bg-red-500 selection:text-white">
                @if (Route::has('login'))
                    <div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Hola</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
    
                
        </body>

        <div class="font-sans antialiased text-gray-900 bg-white">

            
        </div>

        @livewireScripts
    </body>
</html>
