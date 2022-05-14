@extends('layout_admin')

@section('title', 'Edit Surat Izin Pengabdian')
@section('content')
    <!--Jumbotron-->
    <div class="container c">
        <a href="#" class="text"><img src="img/back.png" alt="icon back" class="img">BACK</a>
        <p>Permohonan Surat Izin Pengabdian</p>
        <hr>
    </div>
    <!--Jumbotron-->

    <!--content-->
    <div class="container">
        <form action="#">
            <table border="0">
                <tr>
                    <td>
                        <h3>Judul Pengabdian</h3>
                    </td>
                    <td>
                        <input class="form-check-input " type="text" placeholder="Masukkan Judul Pengabdian">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Ditujukan Kepada</h3>
                    </td>
                    <td>
                        <input class="form-check-input " type="text" placeholder="Cth: Yth. Rektor Universitas Lambung Mangkurat">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Lokasi</h3>
                    </td>
                    <td>
                        <input class="form-check-input " type="text" placeholder="Lokasi Penelitian">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Ketua</h3>
                    </td>
                </tr>
            </table>
            <table border="0">
                <tr>
                    <td>
                        <input class="form-check-input f" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input o" type="text" placeholder="NIP/NIDM">
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
                        <input class="form-check-input r" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input m" type="text" placeholder="NIP/NIDM/NIM">
                    </td>
                    <td>
                        <input class="form-check-input o" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <button class="btn btn-light" type="button">
                        <i class="glyphicon glyphicon-plus"></i> Add
                      </button>
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
                        <input class="form-check-input d " type="date">
                    </td>
                    <td>
                        <h5>s/d</h5>
                    </td>
                    <td>
                        <input class="form-check-input a" type="date">
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
                        <input class="form-check-input f" type="text" placeholder="Nama Lengkap">
                    </td>
                    <td>
                        <input class="form-check-input o" type="text" placeholder="No. Telp/WA/E-mail">
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
                            No Surat
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="form-check-input f" type="text" placeholder="Nomor Surat">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Tambahkan Nomor Surat.</h4>
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-light l" type="button">
                            Clear
                        </button>
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
@endsection