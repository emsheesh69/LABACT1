<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | Laravel</title>
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
            <h1 class="text-4xl font-extrabold text-gray-900 mb-6">Contact Us</h1>
            <p class="text-lg text-gray-700 mb-8">We would love to hear from you! Please reach out to us using the contact form below or through our social media channels.</p>
            <form action="#" method="POST" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md mb-4" required>

                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md mb-4" required>

                <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md mb-4" required></textarea>

                <button type="submit" class="bg-[#FF2D20] text-white py-2 px-4 rounded-md text-lg font-semibold hover:bg-red-700 transition duration-300">Send Message</button>
            </form>
        </div>
    </main>

    <footer class="bg-white shadow-md py-4 mt-8">
        <div class="container mx-auto text-center text-gray-600">
            <p class="text-sm">© {{ date('Y') }} Laravel App. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
