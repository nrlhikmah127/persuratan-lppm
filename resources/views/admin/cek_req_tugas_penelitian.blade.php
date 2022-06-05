@extends('layout_admin')

@section('title', 'Cek Request Tugas Penelitian')
@section('content')
    <!--Jumbotron-->
    <div class="container c">
        <a href="/beranda_admin" class="text"><img src="/img/back.png" alt="icon back" class="img">BACK</a>
        <p>Permohonan Surat Tugas Penelitian</p>
        <hr>
    </div>
    <!--Jumbotron-->

    <!--Content-->
    <div class="container">
        <table class="second">
            @forelse ($requests as $tugas)
                <tr>
                    <td>
                        <h4>{{Str::limit($tugas->judul, 25, $end='...') }}</h4>
                    </td>
                    <td>
                        <a class="btn tombol tbl2" href="/proses_tugaspenelitian/{{ $tugas->id_srt }}">PROSES</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">Belum Ada Permohonan</td>
                </tr>
            @endforelse
        </table>
    </div>
    <!--Content-->
@endsection