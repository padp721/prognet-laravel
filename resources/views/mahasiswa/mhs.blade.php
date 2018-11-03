@extends('master')
@section('title','Data Mahasiswa')
@section('content')
<div class="container-fluid" style="margin-top: 1%; margin-bottom:5%;">
  <div class="row">
    <div class="col">
            <div class="card">
                    <div class="card-header">
                        <h1 class="float-left">Daftar Mahasiswa</h1>
                    </div>
              <div class="card-body">
                <a href="mahasiswa/tambah" class="btn btn-primary" role="button">Tambah Data Mahasiswa</a>
                @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" style="margin-top:2%;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{ session('status') }}
                        </div>
                    @endif
                <table class="table table-hover" style="margin-top:2%; text-align: center;">
                  <thead class="thead-dark">
                    <tr>
                      <th>No</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Tanggal Lahir</th>
                      <th>Agama</th>
                      <th>Jenis Kelamin</th>
                      <th>Hobi</th>
                      <th colspan="2">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($data->isEmpty())
                        <tr>
                            <td colspan="9"><center><h3>Tidak ada data!</h3></center></td>
                        </tr>
                     @else
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nim }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->tgl_lahir }}</td>
                                <td>
                                  @if ($row->agama == '1')
                                      Hindu
                                  @elseif ($row->agama == '2')
                                      Islam
                                  @elseif ($row->agama == '3')
                                      Kristen
                                  @elseif ($row->agama == '4')
                                      Protestan
                                  @elseif ($row->agama == '5')
                                      Budha
                                  @elseif ($row->agama == '6')
                                      Kong Hu Chu
                                  @else
                                      Atheis
                                  @endif
                                </td>
                                <td>
                                    @if ($row->jk == 'L')
                                        Laki - Laki
                                    @else
                                        Perempuan
                                    @endif
                                </td>
                                <td>{{ $row->hobi }}</td>
                                <td><a href="{{ action('MhsController@edit', $row->nim) }}" class="btn btn-success btn-sm" role="button">Ubah</a></td>
                                <td>
                                  <form method="POST" action="{{ action('MhsController@destroy', $row->nim) }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-danger btn-sm" role="button" value="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                  </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
    </div>
  </div>
</div>
@endsection