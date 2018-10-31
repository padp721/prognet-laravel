@extends('master')
@section('title','Tambah Data Mahasiswa')
@section('content')
<div class="container" style="margin-top:1%; margin-bottom:5%;">
  <div class="row">
    <div class="col">
      <div class="card">
          <div class="card-header ">
              <h1 class="float-left">Input Data Anda</h1>
              <div class="clearfix"></div>
          </div>
        <div class="card-body">
          <form method="post">
            @foreach ($errors->all() as $error)
          <div class="alert alert-danger alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ $error }}
          </div>                
            @endforeach
            @if (session('nim'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{ session('nim') }}
                        </div>
                    @endif
            @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{ session('status') }}
                        </div>
                    @endif
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" maxlength="10" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
            </div>
            <div class="form-group">
              <textarea  type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" rows="3" required></textarea>
            </div>
            <div class="form-group" id="sandbox-container">
              <input type="text" class="form-control" placeholder="Tanggal Lahir" id="tgl" name="tgl" autocomplete="off" required>
            </div>
            <div class="form-group">
              <select class="form-control" id="agama" name="agama" required>
                <option value="">Agama</option>
                <option value="1">Hindu</option>
                <option value="2">Islam</option>
                <option value="3">Kristen</option>
                <option value="4">Protestan</option>
                <option value="5">Budha</option>
                <option value="6">Kong Hu Chu</option>
              </select>
            </div>
            <div class="form-group">
              Jenis Kelamin :<br>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="jk" name="jk" value="L">Laki - Laki
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="jk" name="jk" value="P">Perempuan
                </label>
              </div>
            </div>
            <div class="form-group">
              Hobi :<br>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="1" name="hobi[]">Kuliah
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="2" name="hobi[]">Tidur
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="3" name="hobi[]">Main Mobile Legends
                </label>
              </div>
              <br>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="4" name="hobi[]">Main PUBG
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="5" name="hobi[]">Lain - Lain
                </label>
              </div>
            </div>
            <div class="form-group">
            <center><input type="submit" class="btn btn-success" name="submit" value="Submit" style="width : 100%;"></center>
            </div>
            <div class="form-group">
				<a href="../../mahasiswa" class="btn btn-primary" role="button" style="width:100%">Kembali</a>
			</div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
  </div>
@endsection