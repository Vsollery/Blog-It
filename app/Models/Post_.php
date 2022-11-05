<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post{
    private static $blog_posts = [
        [
            "title" => "judul",
            "slug" => "judul",
            "author" => "Venia",
            "body" => "Hello You"
        ],
        [
            "title" => "judul 1 ",
            "slug" => "judul-1",
            "author" => "Venia Sollery",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Tenetur veritatis ipsa reiciendis eius nisi assumenda, earum 
                        eveniet fugit nemo praesentium beatae aliquam maiores voluptate 
                        voluptatem, sequi aliquid est possimus illo."
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug ){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
