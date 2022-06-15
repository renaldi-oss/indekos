@extends('layouts.main')

@section('body')
  <div class="container mt-5 justify-content-center d-flex">
    <div class="card col-md-8 shadow-lg">
      <div class="card-header text-center">
        <h3>{{ $title }}</h3>
      </div>
      <div class="card-body">
        <form action="/owner/rooms" method="POST">
          @csrf
          <div class="form-group">
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description" name="description" required></textarea>
          </div>
          <div class="form-group">
            <textarea class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Price" name="price" required></textarea>
          </div>          
          <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection