@extends('layouts.main')

@section('body')
  <div class="container mt-5">
    <div class="card shadow-lg">

      {{-- title --}}
      <div class="card-header text-center">
        <h3>Manage Rooms </h3>
      </div>

      {{-- body --}}
      <div class="card-body">
          
        <!-- search -->
        {{-- <form action="/company/jobs">
          <div class="row mx-5">
            <div class="col">
              <div class="form-group">
                <input class="form-control" name="search" type="search" placeholder="Keyword" value="{{ request('search') }}">
              </div>
            </div>
            <div>
              <button class="btn btn-primary" type="submit">Search</button>
            </div>
            @if (request('search'))
            <div class="col-12 text-center">
              <div class="alert alert-light" role="alert">
                Display Rooms with keywords “<strong>{{ request('search') }}</strong>”
              </div>
            </div>
            @endif
          </div>
        </form> --}}
        {{-- alert --}}
        <div class="row justify-content-center d-flex">
          <div class="col-md-4">
            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
          </div>
        </div>

        {{-- data --}}
        <table class="table text-center">
          <tr>
            <th>No</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          @foreach ($rooms as $room)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $room->description }}</td>
              <td>{{ $room->price }}</td>
              <td>@if($room->status) Active @else Not Active @endif</td>
              <td>
                <a href="/rooms/{{ $room->id }}" class="btn btn-outline-primary">Detail</a>
                <a href="/owner/rooms/{{ $room->id }}/edit" class="btn btn-outline-success">Edit</a>
                <form action="/owner/rooms/{{ $room->id }}" method="post" class="d-inline-block">
                  @csrf
                  @method('delete')
                  <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger">Delete</button>
                </form>
                @if ($room->status)
                  <a href="rooms/{{ $room->id }}/close" onclick="return confirm('Are you sure?')" class="btn btn-outline-warning">Close Room</a>
                @endif
              </td>
            </tr>
          @endforeach
        </table>

      </div>

      {{-- paginate --}}
      <div class="d-flex justify-content-center">
        {{ $rooms->appends(request()->all())->links() }}
      </div>


    </div>
  </div>
@endsection