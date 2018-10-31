@extends('master')
@section('title','Home')
@section('content')
@include('jumbotron')
<div class="container">
  <div class="row">
    <div class="col">
       <div id="tugasprognet">
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#content">Tugas Pemrograman Internet B</a>
          </div>
          <div id="content" class="collapse" data-parent="#tugasprognet">
            <div class="card-body">
              <div class="list-group">
                <a href="/mahasiswa" class="list-group-item list-group-item-action">CRUD Mahasiswa w/ Laravel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection