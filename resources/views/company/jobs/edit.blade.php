@extends('layouts.main')

@section('body')

  <div class="container mt-5 justify-content-center d-flex">
    <div class="card shadow-lg col-lg-10">
      {{-- title --}}
      <div class="card-header text-center">
          <h3>Edit Room</h3>
      </div>
  
      {{-- body --}}
      <div class="card-body">
  
        {{-- form --}}
        <form action="/owner/rooms/{{ $room->id }}" method="POST">
          @csrf
          @method('put')
    
          <div class="form-group">
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description" name="description">{{ old('description', $room->description) }}</textarea>
          </div>
          <div class="form-group">
            <textarea class="form-control @error('price') is-invalid @enderror" name="price" placeholder="price" name="price">{{ old('price', $room->price) }}</textarea>
          </div>
          <div class="form-group text-center">
            <button class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection