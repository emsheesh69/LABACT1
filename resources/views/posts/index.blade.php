
    <div class="container">
        <h1>All Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Add Post</a>

        @foreach ($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            </div>
        @endforeach
    </div>
