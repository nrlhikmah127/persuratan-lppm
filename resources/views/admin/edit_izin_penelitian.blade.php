<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/style_edit.css">
    <link rel="stylesheet" type="text/css" href="/assets/responsive_edit.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/b70bdea85f.js" crossorigin="anonymous"></script>
    <title>Edit Izin Penelitian</title>
</head>

<body>
    @auth
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <span class="navbar-brand mb-0 h1">LPPM ULM</span>
            <div class="navbar-nav ml-auto">
                <a class="nav-item btn tbl_beranda nav-res" href="/beranda_admin">BERANDA</a>
                <form action="{{ url('/logout') }}" method="POST">
                    @csrf
                    <button class="buttonlogout nav-res" type="submit">LOGOUT</button>
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
    <div class="container c">
        <a href="{{ url('/proses_izinpenelitian/'.$permohonan->id_srt) }}" class="text"><img src="/img/back.png" alt="icon back" class="img">BACK</a>
        <p>Permohonan Surat Izin Penelitian</p>
        <hr>
    </div>
    <!--Jumbotron-->

    <!--content-->
    <div class="container">
        <form method="POST" action="{{ url('/update_izinpenelitian/'.$permohonan->id_srt) }}">
            @csrf
            <table border="0">
                <tr>
                    <td>
                        <h3>Nomor Surat</h3>
                    </td>
                    <td>
                        <input class="form-check-input @error('no_surat') is-invalid @enderror" id="no_surat" name="no_surat"
                            type="text" placeholder="Masukkan Nomor Surat" value="{{ old('no_surat', $permohonan->no_surat) }}">
                        @error('no_surat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <input type="hidden" id="tipe" name="tipe" value="izin_penelitian">
                    <td>
                        <h3>Judul Penelitian</h3>
                    </td>
                    <td>
                        <input class="form-check-input @error('judul') is-invalid @enderror" id="judul" name="judul"
                            type="text" placeholder="Masukkan Judul Penelitian" value="{{ old('judul', $permohonan->judul) }}">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Ditujukan Kepada</h3>
                    </td>
                    <td>
                        <input class="form-check-input @error('kepada') is-invalid @enderror" id="kepada" name="kepada"
                            type="text" placeholder="Cth: Yth. Rektor Universitas Lambung Mangkurat" value="{{ old('kepada', $permohonan->kepada) }}">
                        @error('kepada')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Lokasi</h3>
                    </td>
                    <td>
                        <input class="form-check-input @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi"
                            type="text" placeholder="Lokasi Penelitian" value="{{ old('lokasi', $permohonan->lokasi) }}">
                        @error('lokasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Ketua Peneliti</h3>
                    </td>
                </tr>
            </table>
            <table border="0">
                <tr>
                    <td>
                        <input class="form-check-input f @error('ketua') is-invalid @enderror" id="ketua" name="ketua"
                            type="text" placeholder="Nama Lengkap" value="{{ old('ketua', $permohonan->ketua) }}">
                        @error('ketua')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                    <td>
                        <input class="form-check-input o @error('nip_ketua') is-invalid @enderror" id="nip_ketua"
                            name="nip_ketua" type="text" placeholder="NIP/NIDM"  value="{{ old('nip_ketua', $permohonan->nip_ketua) }}">
                        @error('nip_ketua')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Anggota</h3>
                    </td>
                    <td>
                        <label>Jabatan Dalam Penelitian</label>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <input class="form-check-input r @error('ang1') is-invalid @enderror" id="ang1" name="ang1"
                            type="text" placeholder="Nama Lengkap" value="{{ old('ang1', $permohonan->ang1) }}">
                        @error('ang1')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                    <td>
                        <input class="form-check-input m @error('nip_ang1') is-invalid @enderror" id="nip_ang1"
                            name="nip_ang1" type="text" placeholder="NIP/NIDM/NIM" value="{{ old('nip_ang1', $permohonan->nip_ang1) }}">
                        @error('nip_ang1')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                    <td>
                        <input class="form-check-input o @error('jbtn_ang1') is-invalid @enderror" id="jbtn_ang1"
                            name="jbtn_ang1" type="text"  value="{{ old('jbtn_ang1', $permohonan->jbtn_ang1) }}">
                        @error('jbtn_ang1')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang2" name="ang2" type="text" placeholder="Nama Lengkap"  value="{{ old('ang2', $permohonan->ang2) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang2" name="nip_ang2" type="text"
                            placeholder="NIP/NIDM/NIM"  value="{{ old('nip_ang2', $permohonan->nip_ang2) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang2" name="jbtn_ang2" type="text" value="{{ old('jbtn_ang2', $permohonan->jbtn_ang2) }}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang3" name="ang3" type="text" placeholder="Nama Lengkap"  value="{{ old('ang3', $permohonan->ang3) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang3" name="nip_ang3" type="text"
                            placeholder="NIP/NIDM/NIM"  value="{{ old('nip_ang3', $permohonan->nip_ang3) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang3" name="jbtn_ang3" type="text"  value="{{ old('jbtn_ang3', $permohonan->jbtn_ang3) }}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang4" name="ang4" type="text" placeholder="Nama Lengkap"  value="{{ old('ang4', $permohonan->ang4) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang4" name="nip_ang4" type="text"
                            placeholder="NIP/NIDM/NIM"  value="{{ old('nip_ang4', $permohonan->nip_ang4) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang4" name="jbtn_ang4" type="text"  value="{{ old('jbtn_ang4', $permohonan->jbtn_ang4) }}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang5" name="ang5" type="text" placeholder="Nama Lengkap"  value="{{ old('ang5', $permohonan->ang5) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang5" name="nip_ang5" type="text"
                            placeholder="NIP/NIDM/NIM"  value="{{ old('nip_ang5', $permohonan->nip_ang5) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang5" name="jbtn_ang5" type="text"  value="{{ old('jbtn_ang5', $permohonan->jbtn_ang5) }}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang6" name="ang6" type="text" placeholder="Nama Lengkap"  value="{{ old('ang6', $permohonan->ang6) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang6" name="nip_ang6" type="text"
                            placeholder="NIP/NIDM/NIM"  value="{{ old('nip_ang6', $permohonan->nip_ang6) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang6" name="jbtn_ang6" type="text" value="{{ old('jbtn_ang6', $permohonan->jbtn_ang6) }}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang7" name="ang7" type="text" placeholder="Nama Lengkap" value="{{ old('ang7', $permohonan->ang7) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang7" name="nip_ang7" type="text"
                            placeholder="NIP/NIDM/NIM" value="{{ old('nip_ang7', $permohonan->nip_ang7) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang7" name="jbtn_ang7" type="text" value="{{ old('jbtn_ang7', $permohonan->jbtn_ang7) }}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang8" name="ang8" type="text" placeholder="Nama Lengkap" value="{{ old('ang8', $permohonan->ang8) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang8" name="nip_ang8" type="text"
                            placeholder="NIP/NIDM/NIM" value="{{ old('nip_ang8', $permohonan->nip_ang8) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang8" name="jbtn_ang8" type="text" value="{{ old('jbtn_ang8', $permohonan->jbtn_ang8) }}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang9" name="ang9" type="text" placeholder="Nama Lengkap" value="{{ old('ang9', $permohonan->ang9) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang9" name="nip_ang9" type="text"
                            placeholder="NIP/NIDM/NIM" value="{{ old('nip_ang9', $permohonan->nip_ang9) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang9" name="jbtn_ang9" type="text" value="{{ old('jbtn_ang9', $permohonan->jbtn_ang9) }}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang10" name="ang10" type="text" placeholder="Nama Lengkap" value="{{ old('ang10', $permohonan->ang10) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang10" name="nip_ang10" type="text"
                            placeholder="NIP/NIDM/NIM" value="{{ old('nip_ang10', $permohonan->nip_ang10) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang10" name="jbtn_ang10" type="text" value="{{ old('jbtn_ang10', $permohonan->jbtn_ang10) }}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang11" name="ang11" type="text" placeholder="Nama Lengkap" value="{{ old('ang11', $permohonan->ang11) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang11" name="nip_ang11" type="text"
                            placeholder="NIP/NIDM/NIM" value="{{ old('nip_ang11', $permohonan->nip_ang11) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang11" name="jbtn_ang11" type="text" value="{{ old('jbtn_ang11', $permohonan->jbtn_ang11) }}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang12" name="ang12" type="text" placeholder="Nama Lengkap" value="{{ old('ang12', $permohonan->ang12) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang12" name="nip_ang12" type="text"
                            placeholder="NIP/NIDM/NIM" value="{{ old('nip_ang12', $permohonan->nip_ang12) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang12" name="jbtn_ang12" type="text" value="{{ old('jbtn_ang12', $permohonan->jbtn_ang12) }}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang13" name="ang13" type="text" placeholder="Nama Lengkap" value="{{ old('ang13', $permohonan->ang13) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang13" name="nip_ang13" type="text"
                            placeholder="NIP/NIDM/NIM" value="{{ old('nip_ang13', $permohonan->nip_ang13) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang13" name="jbtn_ang13" type="text" value="{{ old('jbtn_ang13', $permohonan->jbtn_ang13) }}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang14" name="ang14" type="text" placeholder="Nama Lengkap" value="{{ old('ang14', $permohonan->ang14) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang14" name="nip_ang14" type="text"
                            placeholder="NIP/NIDM/NIM" value="{{ old('nip_ang14', $permohonan->nip_ang14) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang14" name="jbtn_ang14" type="text" value="{{ old('jbtn_ang14', $permohonan->jbtn_ang14) }}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang15" name="ang15" type="text" placeholder="Nama Lengkap" value="{{ old('ang15', $permohonan->ang15) }}">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang15" name="nip_ang15" type="text"
                            placeholder="NIP/NIDM/NIM" value="{{ old('nip_ang15', $permohonan->nip_ang15) }}">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang15" name="jbtn_ang15" type="text" value="{{ old('jbtn_ang15', $permohonan->jbtn_ang15) }}">
                    </td>
                </tr>

                <td>
                    <h3>
                        Jangka Waktu Penelitian
                    </h3>
                </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>
                        <input class="form-check-input d @error('wkt_mulai') is-invalid @enderror" id="wkt_mulai"
                            name="wkt_mulai" type="date" value="{{ old('wkt_mulai', $permohonan->wkt_mulai) }}">
                        @error('wkt_mulai')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                    <td>
                        <h5>s/d</h5>
                    </td>
                    <td>
                        <input class="form-check-input a @error('wkt_sls') is-invalid @enderror" id="wkt_sls" name="wkt_sls"
                            type="date" value="{{ old('wkt_sls', $permohonan->wkt_sls) }}">
                        @error('wkt_sls')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>
                            Kotak yang Bisa Dihubungi
                        </h3>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <input class="form-check-input f @error('nama_hub') is-invalid @enderror" id="nama_hub"
                            name="nama_hub" type="text" placeholder="Nama Lengkap" value="{{ old('nama_hub', $permohonan->nama_hub) }}">
                        @error('nama_hub')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                    <td>
                        <input class="form-check-input o @error('no_telp') is-invalid @enderror" id="no_telp"
                            name="no_telp" type="text" placeholder="No. Telp/WA/E-mail" value="{{ old('no_telp', $permohonan->no_telp) }}">
                        @error('no_telp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <h4>Mohon cantumkan kontak aktif yang bisa dihubungi jika terjadi kesalahan dsb.</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>
                            Catatan Tambahan (Opsional)
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea class="form-control" id="catatan" name="catatan" rows="3">{{ old('catatan', $permohonan->catatan) }}</textarea>
                    </td>
                </tr>

            </table>
            <table>
                <tr>
                    <td><input class="btn btn-primary" type="submit" value="Update"></td>
                </tr>
            </table>
        </form>
    </div>
    <!--content-->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }

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
    @endauth
</body>
</html>
