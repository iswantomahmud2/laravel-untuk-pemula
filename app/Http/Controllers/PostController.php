<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        //validate form update
        $request->validate([
            'image' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts' . $post->image);

            //update post with new image
            $post->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content
            ]);
        } else {
            //update post without image
            $post->update([
                'title' => $request->title,
                'content' => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil diubah!']);
    }

    public function destroy(Post $post)
    {
        //delete image to folder
        Storage::delete('public/posts/' . $post->image);

        //delete post
        $post->delete();

        //redirect index
        // return redirect()->route('posts.index')->with(['success' => 'Data berhasil diUpdate']);
        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
