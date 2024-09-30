

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

            <main class="flex-grow flex items-center justify-center bg-cover bg-center" style="background-image: url('https://laravel.com/assets/img/welcome/background.svg');">
                <div class="text-center p-6 bg-white bg-opacity-80 rounded-lg shadow-lg">
                <div class="container">
    <h1 class="mb-4 text-center">My Posts</h1>

    @if($submissions->isEmpty())
        <p class="text-center text-muted">You haven't submitted any posts yet.</p>
    @else
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Submitted At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($submissions as $submission)
                    <tr>
                        <td>{{ $submission->id }}</td>
                        <td>{{ $submission->title }}</td>
                        <td>{{ Str::limit($submission->content, 50) }}</td>
                        <td>{{ $submission->created_at->format('Y-m-d H:i') }}</td>
                        <td>
                            <a href="{{ route('posts.show', $submission->id) }}" class="btn btn-info btn-sm">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
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
    .table {
        margin-bottom: 2rem;
        border-radius: 0.5rem;
        overflow: hidden;
    }
    .table thead {
        background-color: #343a40;
        color: white;
    }
    .table-hover tbody tr:hover {
        background-color: #f2f2f2;
    }
    .table td, .table th {
        vertical-align: middle;
    }
    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
    }
    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
    }
</style>
