<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $submissions = Post::with('user')->get();

        return view('admin.submissions', compact('submissions'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = new Post([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->user()->id
        ]);

        $post->save();

        return redirect()->back()->with('success', 'Post submitted successfully!');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
{
    $post = Post::findOrFail($id);
    $post->title = $request->input('title');
    $post->content = $request->input('message');
    $post->save();

    return redirect()->route('posts.index', $post->id)->with('success', 'Post updated successfully.');
}


    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }


    public function myPosts()
{
    $submissions = Post::where('user_id', auth()->id())->get(); 
    return view('posts.my-posts', compact('submissions'));
}

}
