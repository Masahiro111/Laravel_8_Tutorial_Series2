<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function addPost()
    {
        return view('add-post');
    }

    public function createPost(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_created', 'Post has been created successfuly!');
    }

    public function getPost()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('posts', compact('posts'));
    }
}
