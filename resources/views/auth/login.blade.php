@extends('master')
@section('title','Login')
@section('content')
<div class="container" style="margin-top: 7%;">
  <div class="row">
  <div class="col"></div>
    <div class="col-md-5">
      <div class="card fade-in">
        <div class="card-body">
        @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                <h1>Login</h1>
                <form method="post">
                        {{ csrf_field() }}
                              <div class="form-group">
                                  <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" value="{{ old('email') }}" required>
                                </div>
                              <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                              </div>
                    <div class="form-group">
                        <center><input type="submit" class="btn btn-primary" name="login" value="Sign In" style="width : 100%;"></center>
                    </div>
                    <div class="form-group">
                        <center><a href="daftar" class="btn btn-success" style="width : 100%;">Daftar User Baru</a></center>
                    </div>
                </form>
        </div>
      </div>
    </div>
  </div> 
</div>
@endsection