<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pricing | Laravel</title>
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
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Pricing Plans</h1>
            <p class="text-lg text-gray-700 mb-8">Find the plan that best suits your needs.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Basic Plan</h2>
                    <p class="text-gray-600 mb-4">$10/month</p>
                    <ul class="text-gray-600 mb-4">
                        <li>5 Projects</li>
                        <li>10 GB Storage</li>
                        <li>24/7 Support</li>
                    </ul>
                    <a href="{{ route('register') }}" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600">Sign Up</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Pro Plan</h2>
                    <p class="text-gray-600 mb-4">$30/month</p>
                    <ul class="text-gray-600 mb-4">
                        <li>Unlimited Projects</li>
                        <li>50 GB Storage</li>
                        <li>Priority Support</li>
                    </ul>
                    <a href="{{ route('register') }}" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600">Sign Up</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Enterprise Plan</h2>
                    <p class="text-gray-600 mb-4">Contact us for pricing</p>
                    <ul class="text-gray-600 mb-4">
                        <li>Custom Solutions</li>
                        <li>100 GB Storage</li>
                        <li>Dedicated Support</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600">Contact Us</a>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white shadow-md py-4 mt-8">
        <div class="container mx-auto text-center text-gray-600">
            <p class="text-sm">© {{ date('Y') }} Laravel App. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
