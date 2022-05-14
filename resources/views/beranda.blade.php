@extends('layout_ft_beranda')

@section('title', 'Persuratan LPPM')
@section('content')
<!--Navbar-->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <span class="navbar-brand mb-0 h1">LPPM ULM</span>
    <div class="navbar-nav ml-auto">
      <a class="nav-link" href="#halamanadmin">Login Admin</a>
      <a class="nav-item btn" href="https://wa.me/6282256027018">HUBUNGI ADMIN</a>
    </div>
  </div>
</nav>
<!--Navbar-->

<!--Jumbotron-->
<div class="container">
      <p>SELAMAT DATANG DI FORM REQUEST SURAT PADA LPPM ULM!<br>
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
                  <a href="#" class="btn tombol">Isi Form</a>
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
                  <a href="#" class="btn tombol">Isi Form</a>
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
                  <a href="#" class="btn tombol">Isi Form</a>
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
                  <a href="#" class="btn tombol">Isi Form</a>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content -->
@endsection