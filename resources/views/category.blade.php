@extends('layouts.main')

@section('container')

    <h1 class='mb-5 ml-5'>Categories : {{ $category }}</h1>

    @foreach($posts as $post)
        <article class="mb-5 ml-5">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title}}</a>
            </h2>
            <h5> By: {{ $post->author->name }}</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach



@endsection

