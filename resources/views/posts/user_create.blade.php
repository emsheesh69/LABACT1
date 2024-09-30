
    <h1>Create a Post</h1>
    <form action="{{ route('posts.user.store') }}" method="POST">
        @csrf
        <input type="text" name="title" required>
        <textarea name="content" required></textarea>
        <button type="submit">Submit</button>
    </form>
    