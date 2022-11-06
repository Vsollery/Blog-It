@extends('layouts.main')

@section('container')
    <h1 class="mb-5"> {{ $single_post->title }}</h1>
    <h5>By: Venia Sollery in <a href="/categories/{{ $single_post->category->slug }}">{{ $single_post->category->name }}</a></h5>

    <p>By. Veni</p>
    {!! $single_post->body !!}
    
    <a href="/posts">Back to Posts</a>

@endsection