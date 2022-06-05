@extends('layout_ft_beranda')

@section('title', 'Persuratan LPPM - Admin')
@section('content')
<!--Navbar-->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <span class="navbar-brand mb-0 h1">LPPM ULM</span>
            <div class="navbar-nav ml-auto">
                <a class="nav-link nav-res" href="{{ url('/ganti_password') }}">GANTI PASSWORD</a>
                <form action="{{ url('/logout') }}" method="POST">
                  @csrf
                  <button class="nav-res buttonlogout" type="submit">LOGOUT</button>
                </form>
            </div>
            <div class="hamberger">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
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
                  <a href="/req_tugaspenelitian" class="btn tombol" style="font-size: 12px;">Cek Request</a>
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
                  <a href="/req_izinpenelitian" class="btn tombol" style="font-size: 12px;">Cek Request</a>
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
                  <a href="/req_tugaspengabdian" class="btn tombol" style="font-size: 12px;">Cek Request</a>
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
                  <a href="/req_izinpengabdian" class="btn tombol" style="font-size: 12px;">Cek Request</a>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content -->
    <script>
      const hamberger = document.querySelector(".hamberger");
          const navMenu = document.querySelector(".navbar-nav");
  
          hamberger.addEventListener("click", () => {
              hamberger.classList.toggle("active");
              navMenu.classList.toggle("active");
          })
  
          document.querySelectorAll(".nav-res").forEach(n => n.addEventListener("click", () => {
              hamberger.classList.remove("active");
              navMenu.classList.remove("active");
          }))
    </script>
@endsection