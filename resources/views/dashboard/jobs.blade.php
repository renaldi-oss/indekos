@extends('dashboard.layouts.main')

@section('body')
  <div class="card shadow mb-4">
    <div class="card-header text-center">
      <h3 class="">Rooms Data</h3>
    </div>
  <div class="card-body">

    {{-- alert --}}
    @if (session()->has('success'))
      <div class="text-center">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    @endif

    <!-- search -->
    <form action="/dashboard/jobs">
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
    </form>

    {{-- jobs table --}}
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Lokasi</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($rooms as $room)
            <tr>
              <td>{{ $rooms->count() * ($rooms->currentPage() - 1) + $loop->iteration }}</td>
              <td>{{ $room->company->name }}</td>
              <td>{{  Str::limit($room->description, 100, '...') }}</td>
              <td>{{ $room->price }}</td>
              <td>@if($room->status) Active @else Not Active @endif</td>
              <td>
                <a href="/dashboard/rooms/{{ $room->id }}" class="btn btn-outline-primary">Detail</a>
                <form action="/dashboard/rooms/{{ $room->id }}" method="post">
                  @csrf
                  @method('delete')
                  <button onclick="return confirm('Are you sure?')" class="btn btn-outline-danger mt-1" type="submit">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
      </tbody>
      </table>
    </div>

    {{-- paginate --}}
    <div class="d-flex justify-content-center">
      {{ $rooms->appends(request()->all())->links() }}
    </div>


  </div>
</div>
@endsection