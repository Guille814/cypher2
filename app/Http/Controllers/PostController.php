<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.createPost');
    }

    public function store(Request $request)
    {
        $request->validate([
            'texto' => 'required|max:250',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'video_url' => 'nullable|url',
        ]);
    }

    public function showCreatePostForm()
    {
        return view('posts.createPost');
    }
}
