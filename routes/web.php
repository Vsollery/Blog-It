<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function() {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Venia Sollery",
        "email" => "vsollery@gmail.com"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
//SINGLE VIEW POST
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//single category
Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'title' => "Post by Category: $category->name",
        'active' => 'posts',
        'posts' => $category->posts->load('category', 'author'),
        //'category'=> $category->name

    ]);
});

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Catogories',
        'active' => "categories",
        'categories' => Category::all()

    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts',[
        'title' => "Post by Author: $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});