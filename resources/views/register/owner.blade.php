@extends('layouts.main')

@section('body')

<div class="row mt-5">
  <div class="col">
    <div class="container">
      <div class="card shadow-lg">

        <div class="card-header text-center">
          <h3>Owner Registration</h3>
        </div>

        <div class="card-body">
          <div class="row mb-4">

            <!-- syarat dan ketentuan -->
            <div class="col-md-5 offset-md-1">
              <div class="card">
                <div class="card-header text-center">
                  <h3>Term and Condition</h3>
                </div>
                <div class="card-body p-4 text-justify">
                  <h5>Welcome to Indekos</h5>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, sint dignissimos? Adipisci error odit, veniam facere in dolores ex pariatur.<p>
                </div>
              </div>
            </div>

            <!-- form -->
            <div class="col-md-5">
              <table class="table">
                <form action="/register/owner" method="POST">
                  @csrf
                  <div class="form-group">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lokasi" name="name" value="{{ old('name') }}" required>
                    @error('name')
                      <div class="small text-danger ml-2">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                      <div class="small text-danger ml-2">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" required>
                    @error('phone')
                      <div class="small text-danger ml-2">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control @error('city') is-invalid @enderror" placeholder="City" name="city" value="{{ old('city') }}" required>
                    @error('city')
                      <div class="small text-danger ml-2">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <textarea type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Address" name="address" required>{{ old('address') }}</textarea>
                    @error('address')
                      <div class="small text-danger ml-2">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Description" name="description" required>{{ old('description') }}</textarea>
                    @error('description')
                      <div class="small text-danger ml-2">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                    @error('password')
                      <div class="small text-danger ml-2">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Retype Password" name="password_confirmation" required>
                  </div>
                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Register</button>
                  </div>
                </form>
                <div class="d-block text-center mt-3">
                  <small>Already registered? <a href="/login">Login!</a></small>
                </div>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection