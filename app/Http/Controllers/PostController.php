<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post; // connect model from Post

class PostController extends Controller
{
    public function index(){
        return view('posts',[
            "title" => "All Posts",
            //Take function all() from model Post_
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "Single Post",
            "single_post" => $post
        ]);
    }
}
