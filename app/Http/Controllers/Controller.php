<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

abstract class Controller
{
    /**
     * index
     * @return void
     */

    public function index()
    {
        //get post
        $post = Post::lates()->pagination(5);

        //render view with post
        return view('post.index',compact('post'));
    }
}
