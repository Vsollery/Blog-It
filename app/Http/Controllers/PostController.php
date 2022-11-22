<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post; // connect model from Post

class PostController extends Controller
{
    public function index(){

        return view('posts',[
            "title" => "All Posts",
            "active" =>"posts",
            //Take function all() from model Post_
            "posts" => Post::latest()->filter(request(['search','category']))->get()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "Single Post",
            "active" =>'posts',
            "single_post" => $post
        ]);
    }
}
