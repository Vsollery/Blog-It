@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Category Information in : {{ $category->name }}</h1>
</div>

<div class="mb-5">
  <h3>Number of posts in {{ $category->name }}: {{ $posts->count() }}</h3>
</div>

@if($posts->count())
  <div class="table-responsive">
    <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Author</th>
                    <th scope="col">Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->author->name }}</td>
                    <td>{{ $post->title }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
@else
<div class="alert alert-danger" role="alert">
  There are currently no posts in {{ $category->name }}
</div>
@endif

<a href="/dashboard/categories" class="btn btn-primary"> <span data-feather="arrow-left"></span> Back </a>


@endsection