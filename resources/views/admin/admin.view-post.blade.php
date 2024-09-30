<div class="container">
    <h1>View Post</h1>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" class="form-control" value="{{ $post->title }}" readonly>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" class="form-control" readonly>{{ $post->message }}</textarea>
    </div>
    <a href="{{ route('admin.submissions') }}" class="btn btn-secondary">Back to List</a>
</div>