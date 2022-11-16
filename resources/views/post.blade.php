@extends('layouts.main')

@section('container')
    <h1 class="mb-5 ml-5"> {{ $single_post->title }}</h1>

    <p class="ml-5">By: <a href="/authors/{{ $single_post->author->username }}">{{ $single_post->author->name }}</a> in <a href="/categories/{{ $single_post->category->slug }}">{{ $single_post->category->name }}</a></p>
   
    <div class="ml-5">
        {!! $single_post->body !!}
    </div>
    
    <br>
    
    <a href="/posts" class="d-block mt-3 ml-5">Back to Posts</a>

@endsection