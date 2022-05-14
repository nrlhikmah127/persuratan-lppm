@extends('layout_ft_beranda')

@section('title', 'Persuratan LPPM - Admin')
@section('content')
<!--Navbar-->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <span class="navbar-brand mb-0 h1">LPPM ULM</span>
            <div class="navbar-nav ml-auto">
                <a class="nav-link" href="#halamanadmin">GANTI PASSWORD</a>
                <a class="nav-link" href="#listseminar">LOGOUT</a>
            </div>
    </div>
</nav>
<!--Navbar-->

<!--Jumbotron-->
<div class="container">
    <p>SELAMAT DATANG!<br>
    Silakan pilih jenis surat yang Anda perlukan.</p>
    <hr>
</div>
<!--Jumbotron-->

<!-- Content -->
  <div class="container">
    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Surat Tugas Penelitian</p>
                <center>
                  <i class="far fa-envelope fa-5x"></i><br>
                  <a href="#" class="btn tombol" style="font-size: 12px;">Cek Request</a>
                </center>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Surat Izin Penelitian</p>
                <center>
                  <i class="far fa-envelope fa-5x"></i><br>
                  <a href="#" class="btn tombol" style="font-size: 12px;">Cek Request</a>
                </center>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Surat Tugas Pengabdian</p>
                <center>
                  <i class="far fa-envelope fa-5x"></i><br>
                  <a href="#" class="btn tombol" style="font-size: 12px;">Cek Request</a>
                </center>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Surat Izin Pengabdian</p>
                <center>
                  <i class="far fa-envelope fa-5x"></i><br>
                  <a href="#" class="btn tombol" style="font-size: 12px;">Cek Request</a>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content -->
@endsection