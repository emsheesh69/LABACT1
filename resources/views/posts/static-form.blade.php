<div class="container">
    <h1>Submit Your Post</h1>
    <form action="{{ route('submit.post') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
