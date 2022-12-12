@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="my-5"> {{ $single_post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span> Back to my posts</a>
                <a href="" class="btn btn-warning"> <span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"> <span data-feather="trash"></span> Delete</a>
                
                <img src="https://source.unsplash.com/1200x400?{{ $single_post->category->name }}" alt="{{ $single_post->category->name }}" class="img-fluid mt-5">

                <article class="mt-3 fs-6">
                    {!! $single_post->body !!} 
                </article>
                              
                <br>
                <a href="/posts" class="d-block mt-3 mb-5">Back to Posts</a>                   
            </div>
        </div>
    </div>

@endsection