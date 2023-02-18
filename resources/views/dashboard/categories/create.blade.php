@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Add New Category</h1>
</div>




<div class="col-lg-8">
  <form method="post" action="/dashboard/categories" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Category</label>
      <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
      @error('category')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="slug" class="form-label ">Slug</label>
      <input name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug') }}">
      @error('slug')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary mb-3">Add Category</button>



  </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
  $('#name').change(function(e) {
    $.get('/dashboard/categories/checkSlug', {
        'name': $(this).val()
      },
      function(data) {
        $('#slug').val(data.slug);
      }
    );
  });
</script>

@endsection