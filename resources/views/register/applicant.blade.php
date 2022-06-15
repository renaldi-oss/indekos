@extends('layouts.main')

@section('body')
  
<div class="row mt-5">
  <div class="col">
    <div class="container">
      <div class="card shadow-lg">

        <!-- heading -->
        <div class="card-header text-center">
          <h3>Applicant Registration</h3>
        </div>

        <div class="card-body">
          <div class="row pb-4">

            <!-- syarat dan ketentuan -->
            <div class="col-md-5 offset-md-1">
              <div class="card">
                <div class="card-header text-center">
                  <h3>Term and Condition</h3>
                </div>
                <div class="card-body p-4 text-justify">
                  <h5>Welcome to Indekos</h5>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur inventore voluptatibus sunt ullam numquam eaque dicta cupiditate obcaecati ducimus quos.</p>
                </div>
              </div>
            </div>

            <!-- form -->
            <div class="col-md-5">
              <table class="table">
                <form action="/register/applicant" method="POST">
                  @csrf
                  <div class="form-group">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name" required value="{{ old('name') }}">
                    @error('name')
                      <div class="small text-danger ml-2">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" required value="{{ old('email') }}">
                    @error('email')
                      <div class="small text-danger ml-2">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" name="phone" required value="{{ old('phone') }}">
                    @error('phone')
                      <div class="small text-danger ml-2">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <select name="gender" class="form-control">
                      @if (old('gender') == 0)
                        <option value="0" selected>Female</option>
                        <option value="1">Male</option>
                      @else
                        <option value="0">Female</option>
                        <option value="1" selected>Male</option>
                      @endif
                    </select>
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
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                    @error('password')
                      <div class="small text-danger ml-2">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Retype Password" name="password_confirmation" required>
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