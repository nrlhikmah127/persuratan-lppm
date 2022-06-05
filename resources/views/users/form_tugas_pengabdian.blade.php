@extends('layout_user')

@section('title', 'Form Surat Tugas Pengabdian')
@section('content')
<!--Jumbotron-->
<div class="container c">
        <a href="/" class="text"><img src="img/back.png" alt="icon back" class="img">BACK</a>
        <p>Form Surat Tugas Pengabdian</p>
        <hr>
    </div>
    <!--Jumbotron-->

    <!--content-->
    <div class="container">
        <form method="POST" action="{{ url('/tugaspengabdian') }}">
            @csrf
            <table border="0">
                <tr>
                    <input type="hidden" id="tipe" name="tipe" value="tugas_pengabdian">
                    <td>
                        <h3>Judul Pengabdian</h3>
                    </td>
                    <td>
                        <input class="form-check-input @error('judul') is-invalid @enderror" id="judul" name="judul" type="text" placeholder="Masukkan Judul Pengabdian">
                        @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Lokasi</h3>
                    </td>
                    <td>
                        <input class="form-check-input @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" type="text" placeholder="Lokasi Pengabdian">
                        @error('lokasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Ketua Pengabdian</h3>
                    </td>
                </tr>
            </table>
            <table border="0">
                <tr>
                    <td>
                        <input class="form-check-input f @error('ketua') is-invalid @enderror" type="text" id="ketua" name="ketua" placeholder="Nama Lengkap">
                        @error('ketua')
                        <div class="invalid-feedback q">{{ $message }}</div>
                        @enderror
                    </td>
                    <td>
                        <input class="form-check-input o @error('nip_ketua') is-invalid @enderror" id="nip_ketua" name="nip_ketua" type="text" placeholder="NIP/NIDM">
                        @error('nip_ketua')
                        <div class="invalid-feedback w">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Anggota</h3>
                    </td>
                    <td>
                        <label>Jabatan Dalam Pengabdian</label>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <input class="form-check-input r @error('ang1') is-invalid @enderror" id="ang1" name="ang1" type="text" placeholder="Nama Lengkap">
                        @error('ang1')
                        <div class="invalid-feedback e">{{ $message }}</div>
                        @enderror
                    </td>
                    <td>
                        <input class="form-check-input m @error('nip_ang1') is-invalid @enderror" id="nip_ang1" name="nip_ang1" type="text" placeholder="NIP/NIDM/NIM">
                        @error('nip_ang1')
                        <div class="invalid-feedback x">{{ $message }}</div>
                        @enderror
                    </td>
                    <td>
                        <input class="form-check-input o @error('jbtn_ang1') is-invalid @enderror" id="jbtn_ang1" name="jbtn_ang1" type="text">
                        @error('jbtn_ang1')
                        <div class="invalid-feedback w">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang2" name="ang2" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang2" name="nip_ang2" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang2" name="jbtn_ang2" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang3" name="ang3" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang3" name="nip_ang3" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang3" name="jbtn_ang3" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang4" name="ang4" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang4" name="nip_ang4" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang4" name="jbtn_ang4" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang5" name="ang5" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang5" name="nip_ang5" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang5" name="jbtn_ang5" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang6" name="ang6" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang6" name="nip_ang6" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang6" name="jbtn_ang6" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang7" name="ang7" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang7" name="nip_ang7" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang7" name="jbtn_ang7" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang8" name="ang8" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang8" name="nip_ang8" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang8" name="jbtn_ang8" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang9" name="ang9" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang9" name="nip_ang9" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang9" name="jbtn_ang9" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang10" name="ang10" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang10" name="nip_ang10" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang10" name="jbtn_ang10" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang11" name="ang11" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang11" name="nip_ang11" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang11" name="jbtn_ang11" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang12" name="ang12" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang12" name="nip_ang12" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang12" name="jbtn_ang12" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang13" name="ang13" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang13" name="nip_ang13" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang13" name="jbtn_ang13" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang14" name="ang14" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang14" name="nip_ang14" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang14" name="jbtn_ang14" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="form-check-input r" id="ang15" name="ang15" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" id="nip_ang15" name="nip_ang15" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" id="jbtn_ang15" name="jbtn_ang15" type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>
                            Jangka Waktu Pengabdian
                        </h3>
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>
                        <input class="form-check-input d @error('wkt_mulai') is-invalid @enderror" id="wkt_mulai" name="wkt_mulai" type="date">
                        @error('wkt_mulai')
                        <div class="invalid-feedback p">{{ $message }}</div>
                        @enderror
                    </td>
                    <td>
                        <h5>s/d</h5>
                    </td>
                    <td>
                        <input class="form-check-input a @error('wkt_sls') is-invalid @enderror" id="wkt_sls" name="wkt_sls" type="date">
                        @error('wkt_sls')
                        <div class="invalid-feedback y">{{ $message }}</div>
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
                        <input class="form-check-input f @error('nama_hub') is-invalid @enderror" id="nama_hub" name="nama_hub" type="text" placeholder="Nama Lengkap">
                        @error('nama_hub')
                        <div class="invalid-feedback q">{{ $message }}</div>
                        @enderror
                    </td>
                    <td>
                        <input class="form-check-input o @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" type="text" placeholder="No. Telp/WA/E-mail">
                        @error('no_telp')
                        <div class="invalid-feedback w">{{ $message }}</div>
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
                        <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
                    </td>
                </tr>
                
            </table>
            <table>
                <tr>
                    <td><input class="btn btn-primary" type="reset" value="Reset"></td>
                    <td><input class="btn btn-primary t" type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div>
    <!--content-->
@endsection