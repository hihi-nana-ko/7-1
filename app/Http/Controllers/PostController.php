<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    
    public function index(Post $post)
    {
        // dd('hello');
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(1)]);
    }
}
?>