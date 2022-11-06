@extends('layouts.main')

@section('container')
    <h1 class="mb-5"> {{ $single_post->title }}</h1>

    <p>By: <a href="#">{{ $single_post->user->name }}</a> in <a href="/categories/{{ $single_post->category->slug }}">{{ $single_post->category->name }}</a></p>

    {!! $single_post->body !!}
    <br>
    
    <a href="/posts" class="d-block mt-3">Back to Posts</a>

@endsection