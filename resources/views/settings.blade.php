<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings | Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-900">
    <header class="bg-white shadow-md">
        <nav class="container mx-auto flex justify-between items-center py-4 px-6">
        <a href="/" class="text-xl font-semibold text-gray-800">Laravel App</a>
            <div class="flex items-center space-x-4">
                <a href="/dashboard" class="text-gray-600 hover:text-gray-900">Dashboard</a>
                <a href="/profile" class="text-gray-600 hover:text-gray-900">Profile</a>
                <a href="/settings" class="text-gray-600 hover:text-gray-900">Settings</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-gray-600 hover:text-gray-900">Logout</button>
                </form>
            </div>
        </nav>
    </header>

    <main class="py-16 px-6">
        <div class="container mx-auto">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-6">Settings</h1>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Update Your Information</h2>
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <button type="submit" class="bg-[#FF2D20] text-white py-2 px-4 rounded-md text-lg font-semibold hover:bg-red-700 transition duration-300">Save Changes</button>
                </form>
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
