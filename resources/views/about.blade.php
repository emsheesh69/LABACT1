<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About Us | Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="font-sans antialiased bg-gray-100 text-gray-900">
        <header class="bg-white shadow-md">
            <nav class="container mx-auto flex justify-between items-center py-4 px-6">
                <div class="flex items-center space-x-4">
                    <a href="/" class="text-xl font-semibold text-gray-800">Laravel App</a>
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

        <main class="py-16 px-6">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 mb-6">About Us</h1>
                <p class="text-lg text-gray-700 mb-8">We are committed to providing the best service to our customers. Our team works tirelessly to ensure that you have a great experience with our application.</p>
                <img src="{{ asset('download.jpg') }}" alt="Download Image" class="mx-auto mb-6 rounded-lg shadow-lg">
                <p class="text-md text-gray-600">Our mission is to help you achieve your goals with ease and efficiency. We value your feedback and are always looking for ways to improve.</p>
            </div>
        </main>

        <footer class="bg-white shadow-md py-4 mt-8">
            <div class="container mx-auto text-center text-gray-600">
                <p class="text-sm">© {{ date('Y') }} Laravel App. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
