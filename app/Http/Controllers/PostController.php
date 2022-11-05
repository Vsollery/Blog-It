<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post; // connect model from Post

class PostController extends Controller
{
    public function index(){
        return view('posts',[
            "title" => "Posts",
            "posts" => Post::all() //Take function all() from model Post 
        ]);
    }

    public function show($slug){
        return view('post',[
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }
}
