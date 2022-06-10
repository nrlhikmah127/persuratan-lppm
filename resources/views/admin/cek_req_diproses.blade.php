@extends('layout_admin')

@section('title', 'Cek Request Diproses')
@section('content')
    <!--Jumbotron-->
    <div class="container c mb-5">
        <a href="/beranda_admin" class="text"><img src="/img/back.png" alt="icon back" class="img">BACK</a>
    </div>
    <!--Jumbotron-->

    <!--Content-->
    <div class="container">
    <div class="form-outline mb-4">
        <input type="search" class="form-control mb-4" id="datatable-search-input" placeholder="Search">
    </div>
    <div id="datatable">
    </div>
    <div class="table-responsive">
        <table class="table table-success table-striped">
        <tr>
            <thead>
                <th>
                    No
                </th>
                <th>
                    Judul Penelitian/Pengabdian
                </th>
                <th>
                    Ketua Penelitian/Pengabdian
                </th>
                <th>
                    Fakultas
                </th>
                <th>
                    Tipe
                </th>
                <th>
                    Aksi
                </th>
            </tr>
            </tr>
        </thead>
        <tbody>
        <tr>
        <td>1</td>
        <td>Dooley turu</td>
        <td>ANNISA BAHAR</td>
        <td>Teknik</td>
        <td>blbllbl</td>
        <td><button type="button" class="btn btn-warning">Proses</button>
        <button type="button" class="btn btn-primary">Sudah Dicetak</button>
        <button type="button" class="btn btn-success">Sudah Diambil</button>
    </td>
      </tr>
        </tbody>
        </table>
        </div>
    </div>
    <!--Content-->
    <!-- https://mdbootstrap.com/docs/standard/forms/search/ -->
@endsection