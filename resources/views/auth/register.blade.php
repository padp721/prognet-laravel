@extends('master')
@section('title','Register')
@section('content')
<div class="container" style="margin-top: 3%;">
  <div class="row">
  <div class="col"></div>
    <div class="col-md-5">
      <div class="card fade-in">
        <div class="card-body">
        @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                <h1>Daftar User Baru</h1>
                <form method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ old('name') }}" required>
                              </div>
                              <div class="form-group">
                                  <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" value="{{ old('email') }}" required>
                                </div>
                              <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password" required>
                                </div>
                    <div class="form-group">
                        <center><input type="submit" class="btn btn-success" name="daftar" value="Sign Up" style="width : 100%;"></center>
                    </div>
                    <div class="form-group">
                        <center><a href="login" class="btn btn-primary" style="width : 100%;">Sign In</a></center>
                    </div>
                </form>
        </div>
      </div>
    </div>
  </div> 
</div>
@endsection