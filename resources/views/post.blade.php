@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-3"> {{ $single_post->title }}</h1>
                <p>By: <a href="/posts?author={{ $single_post->author->username }}">{{ $single_post->author->name }}</a> in <a href="/posts?category={{ $single_post->category->slug }}">{{ $single_post->category->name }}</a></p>
                
                @if($single_post->image)
                <img src="{{ asset('storage/' . $single_post->image)}}" alt="{{ $single_post->category->name }}" class="img-fluid ">
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $single_post->category->name }}" alt="{{ $single_post->category->name }}" class="img-fluid ">
                @endif
                <article class="mt-3">
                    {!! $single_post->body !!} 
                </article>
                              
                <br>
                <a href="/posts" class="d-block mt-3 mb-5">Back to Posts</a>                   
            </div>
        </div>
    </div>

    <!-- <h1 class="mb-5 ml-5"> {{ $single_post->title }}</h1>

    <p class="ml-5">By: <a href="/authors/{{ $single_post->author->username }}">{{ $single_post->author->name }}</a> in <a href="/categories/{{ $single_post->category->slug }}">{{ $single_post->category->name }}</a></p>
   
    <div class="ml-5">
        {!! $single_post->body !!}
    </div>
    
    <br>
    
    <a href="/posts" class="d-block mt-3 ml-5">Back to Posts</a> -->

@endsection