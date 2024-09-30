
    
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
                    <a href="/" class="text-xl font-semibold text-gray-800">Laravel App</a>
                    <div class="hidden md:flex space-x-4">
                        <a href="/posts" class="text-gray-600 hover:text-gray-900">List</a>
                        <a href="{{ route('posts.my') }}" class="btn btn-primary">View My Posts</a>
                        <a href="/posts/create" class="text-gray-600 hover:text-gray-900">Create Post</a>
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

            <main class="flex-grow flex items-center justify-center bg-cover bg-center min-h-screen" style="background-image: url('https://laravel.com/assets/img/welcome/background.svg');">
    <div class="max-w-lg w-full p-8 bg-white bg-opacity-90 rounded-xl shadow-xl">
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Add New Post</h1>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">

                @if(session('success'))
            <div class="p-4 rounded bg-green-200 text-green-600 mb-4">
                {{ session('success') }}
            </div>
            @endif
                    <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="title" class="block text-left font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" 
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 @error('title') is-invalid @enderror" 
                                   placeholder="Enter your post title" 
                                   value="{{ old('title') }}">
                            @error('title')
                                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="content" class="block text-left font-medium text-gray-700">Content</label>
                            <textarea name="content" id="content" rows="5" 
                                      class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 @error('content') is-invalid @enderror" 
                                      placeholder="Write your post content...">{{ old('content') }}</textarea>
                            @error('content')
                                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="w-full px-6 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                                Submit Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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


<style>
    .container {
        background-color: #f8f9fa;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    .form-control {
        border-radius: 0.25rem;
        border-color: #ced4da;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        transition: border-color 0.2s, box-shadow 0.2s;
    }
    .form-control:focus {
        border-color: #28a745;
        box-shadow: 0 0 8px rgba(40, 167, 69, 0.2);
    }
    .form-label {
        font-weight: bold;
    }
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }
    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
</style>