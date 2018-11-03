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
          <form method="post" action="{{ route('prodi_mahasiswa.update', $data->id) }}">
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
                    @csrf
                    @method('PUT')
            <div class="form-group">
              <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" maxlength="10" value="{{ $data->nim }}" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $data->nama }}" required>
            </div>
            <div class="form-group">
              <textarea  type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" rows="3" required>{{ $data->alamat }}</textarea>
            </div>
            <div class="form-group">
              <select class="form-control" id="prodi" name="prodi" required>
                <option value="">Program Studi</option>
                @foreach ($prodi as $list)
                <option value="{{ $list->id }}" @if ($data->prodi == $list->id)
                  selected                    
                @endif>{{ $list->nama_prodi }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
            <center><input type="submit" class="btn btn-success" name="submit" value="Submit" style="width : 100%;"></center>
            </div>
            <div class="form-group">
				<a href="../../prodi_mahasiswa" class="btn btn-primary" role="button" style="width:100%">Kembali</a>
			</div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
  </div>
@endsection