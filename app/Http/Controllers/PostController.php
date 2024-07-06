<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * index
     * @return void
     */

    public function index()
    {
        //get post
        $posts = Post::latest()->paginate(5);

        //render view with post
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpg,gif,svg|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Post::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content
        ]);
        $messages = ['success' => 'Data Berhasil Disimpan!'];
        //redirect to index
        return redirect()->route('posts.index')->with($messages);
    }

    public function show($id)
    {
        //get Post By ID
        $post = Post::find($id);

        //return view
        return view('posts.show', compact($post));
    }
}
