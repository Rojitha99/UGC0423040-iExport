<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class postController extends Controller
{
    // app/Http/Controllers/PostController.php
public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    // Automatically assign post to logged-in user
    auth()->user()->posts()->create([
        'title' => $request->title,
        'content' => $request->content,
    ]);

    return redirect()->back()->with('success', 'Post created!');
}
// app/Http/Controllers/PostController.php
public function index()
{
    $posts = auth()->user()->posts()->latest()->get();
    return view('posts.index', compact('posts'));
}
// app/Http/Controllers/PostController.php
public function show(Post $post)
{
    $this->authorize('view', $post); // Throws 403 if unauthorized
    return view('posts.show', compact('post'));
}
}
