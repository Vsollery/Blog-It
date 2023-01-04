@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="my-5"> {{ $single_post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span> Back to my posts</a>
            <a href="/dashboard/posts/{{ $single_post->slug }}/edit" class="btn btn-warning"> <span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $single_post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure you want to delet this post?')"><span data-feather="trash" class="align-text-bottom"></span> Delete</button>
            </form>

            @if ($single_post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $single_post->image)}}" alt=" {{ $single_post->category->name   }}" class="img-fluid mt-5">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $single_post->category->name }}" alt="{{ $single_post->category->name }}" class="img-fluid mt-5">
            @endif


            <article class="mt-3 fs-6">
                {!! $single_post->body !!}
            </article>

            <br>
            <a href="/dashboard/posts" class="d-block mt-3 mb-5">Back to Posts</a>
        </div>
    </div>
</div>

@endsection