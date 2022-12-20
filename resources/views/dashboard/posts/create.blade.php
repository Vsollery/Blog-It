@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Add New Post</h1>
</div>

<div class="col-lg-8">
  <form method="post" action="/dashboard/posts">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title">
      @error('title')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label ">Slug</label>
      <input name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" id="slug">
      @error('slug')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error('body')
      <p>{{ $message}}</p>
      @enderror
      <input id="body" type="hidden" name="body">
      <trix-editor input="body"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary">Add Post</button>
  </form>
</div>

{{-- <script>
  const title = document.querySelector("#title");
  const slug = document.querySelector("#slug");

  title.addEventListener('change', function(){
    fetch('/dashboard/posts/checkSlug?title=' + title.value)//if there is a request to /dashboard/posts/createSlug
      .then(response => response.json)
      .then(data => slug.value = data.slug)    
  });

</script>  --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
  $('#title').change(function(e) {
    $.get('/dashboard/posts/checkSlug', {
        'title': $(this).val()
      },
      function(data) {
        $('#slug').val(data.slug);
      }
    );
  });
</script>

@endsection