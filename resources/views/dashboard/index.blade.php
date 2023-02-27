@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
</div>
<h4>Your Posts</h4>


<div class="container m-0">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4 mb-3" style="width: 20rem;">
            <div class="card">
                <div class="position-absolute bg-dark px-3 py-2 rounded">
                    <p class="text-white">{{ $post->category->name }}</p>
                </div>
                @if($post->image)
                <div style="max-height: 500px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                </div>
                @else
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title}}</h5>
                    <p>
                        <small class="text-muted"> {{ $post->created_at->diffForHumans() }}</small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

{{ $posts->links() }}
@endsection