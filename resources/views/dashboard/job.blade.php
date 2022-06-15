@extends('dashboard.layouts.main')

@section('body')
  <div class="container">
    <div class="row">
        <div class="col">
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h3>{{ 'Room at ' .$room->company->name . ' on ' . $room->company->city }}</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="container">
                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col-auto d-none d-lg-block">
                                    <img src="/storage/{{ $room->company->photo }}" width="200" height="205">
                                </div>
                                <div class="col p-4 d-flex flex-column position-static">
                                    <h3 class="mb-0">{{ $room->company->name }}</h3>
                                    <div class="mb-1 text-muted">{{ $room->company->address }}</div>
                                    <div class="mb-1 text-muted">{{ $room->company->email . ' | ' . $room->company->phone }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <table class="table">
                                <tr>
                                    <th>Description</th>
                                    <td>{{ $room->description }}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{ $room->price }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection