<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {
        $posts = Post::all();
        return view('Posts', compact('posts'));
    }

    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('PostDetails', compact('post'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Post::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function storeComment(Request $request, string $id)
    {
        $validated = $request->validate([
            'content' => 'required|string|max:1000',
        ]);
        $post = Post::findOrFail($id);
        $post->comments()->create([
            'content' => $validated['content'],
        ]);
        return redirect()->route('posts.show', $id)->with('success', 'Comment added successfully!');
    }


}
