@extends('master')
@section('title','Edit Data Mahasiswa')
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
            @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{ session('status') }}
                        </div>
                    @endif
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" maxlength="10" value="{{ $data->nim }}" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $data->nama }}" required>
            </div>
            <div class="form-group">
              <textarea  type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" rows="3" required>{{ $data->alamat }}</textarea>
            </div>
            <div class="form-group" id="sandbox-container">
              <input type="text" class="form-control" placeholder="Tanggal Lahir" id="tgl" name="tgl" value="{{ $data->tgl_lahir }}" autocomplete="off" required>
            </div>
            <div class="form-group">
              <select class="form-control" id="agama" name="agama" required>
                <option value="">Agama</option>
                <option value="1" @if ($data->agama == '1')
                    selected
                  @endif>Hindu</option>
                <option value="2" @if ($data->agama == '2')
                  selected
                @endif>Islam</option>
                <option value="3" @if ($data->agama == '3')
                  selected
                @endif>Kristen</option>
                <option value="4" @if ($data->agama == '4')
                  selected
                @endif>Protestan</option>
                <option value="5" @if ($data->agama == '5')
                  selected
                @endif>Budha</option>
                <option value="6" @if ($data->agama == '6')
                  selected
                @endif>Kong Hu Chu</option>
              </select>
            </div>
            <div class="form-group">
              Jenis Kelamin :<br>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="jk" name="jk" value="L"  @if ($data->jk == 'L')
                  checked
                @endif>Laki - Laki
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="jk" name="jk" value="P"  @if ($data->jk == 'P')
                  checked
                @endif>Perempuan
                </label>
              </div>
            </div>
            <div class="form-group">
              Hobi :<br>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="1" name="hobi[]" @foreach ($data2 as $x)
                    @if ($x->hobi == 1)
                        checked
                    @endif                      
                  @endforeach>Kuliah
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="2" name="hobi[]" @foreach ($data2 as $x)
                  @if ($x->hobi == 2)
                      checked
                  @endif                      
                @endforeach>Tidur
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="3" name="hobi[]" @foreach ($data2 as $x)
                  @if ($x->hobi == 3)
                      checked
                  @endif                      
                @endforeach>Main Mobile Legends
                </label>
              </div>
              <br>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="4" name="hobi[]" @foreach ($data2 as $x)
                  @if ($x->hobi == 4)
                      checked
                  @endif                      
                @endforeach>Main PUBG
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="5" name="hobi[]" @foreach ($data2 as $x)
                  @if ($x->hobi == 5)
                      checked
                  @endif                      
                @endforeach>Lain - Lain
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