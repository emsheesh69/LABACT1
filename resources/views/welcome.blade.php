<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="font-sans antialiased bg-gray-100 text-gray-900">
        <div class="relative min-h-screen flex flex-col bg-gray-50">
            <header class="bg-white shadow-md">
                <nav class="container mx-auto flex justify-between items-center py-4 px-6">
                    <div class="flex items-center space-x-4">
                        <a href="/" class="text-xl font-semibold text-gray-800">Laboratory Activity 1</a>
                        <div class="hidden md:flex space-x-4">
                            <a href="/about" class="text-gray-600 hover:text-gray-900">About</a>
                            <a href="/contact" class="text-gray-600 hover:text-gray-900">Contact</a>
                            <a href="/pricing" class="text-gray-600 hover:text-gray-900">Pricing</a>
                            <a href="/services" class="text-gray-600 hover:text-gray-900">Services</a>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        @if (Route::has('login'))
                            @auth
                            <a href="/dashboard" class="text-gray-600 hover:text-gray-900">Dashboard</a>
                            <a href="/profile" class="text-gray-600 hover:text-gray-900">Profile</a>
                            <a href="/settings" class="text-gray-600 hover:text-gray-900">Settings</a>
                                <form method="POST" action="{{ route('logout') }}" class="inline">
                                    @csrf
                                    <button type="submit" class="text-gray-600 hover:text-gray-900">Logout</button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-900">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </nav>
            </header>

            <main class="flex-grow flex items-center justify-center bg-cover bg-center" style="background-image: url('https://laravel.com/assets/img/welcome/background.svg');">
                <div class="text-center p-6 bg-white bg-opacity-80 rounded-lg shadow-lg">
                    <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Welcome to my Lab Act 1</h1>
                    <p class="text-lg text-gray-600 mb-8">Build amazing applications with the power of Laravel. Get started with the best framework for PHP.</p>
                    <a href="{{ url('/about') }}" class="inline-block bg-[#FF2D20] text-white py-2 px-4 rounded-md text-lg font-semibold hover:bg-red-700 transition duration-300">Learn More</a>
                </div>
            </main>

            <footer class="bg-white shadow-md py-4 mt-8">
                <div class="container mx-auto text-center text-gray-600">
                    <p class="text-sm">© {{ date('Y') }} Laravel App. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
