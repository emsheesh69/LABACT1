
<div class="container">
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $post[title]}}" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea value = "{{$posts['content'}}"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
