@extends('layout_admin')

@section('title', 'Proses Request Tugas Penelitian')
@section('content')
    <!--Jumbotron-->
    <div class="container c">
        <a href="{{ url('/req_tugaspenelitian') }}" class="text"><img src="/img/back.png" alt="icon back" class="img">BACK</a>
        <p>Permohonan Surat Tugas Penelitian</p>
        <hr style="border-top: 2px solid #3B868A;
        margin-bottom: 35px;">

        
        <div class="row">
            <div class="col-6">
                <a href="/edit_tugaspenelitian/{{ $tugas->id_srt }}" class="btn btn-danger" type="button" style="margin-left: 0px;">
                    EDIT
                </a>
                <a href="/edit_tugaspenelitian/{{ $tugas->id_srt }}" class="btn btn-success u" type="button" style="margin-left: 5px;">
                    EMAIL PENGUSUL
                </a>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <button class="btn btn-primary-proses" type="button" onclick="printDiv('printableArea')" style="margin-left: auto;">
                <img src="/img/download.png" alt="" class="img b"> CETAK
                </button>
            </div>
        </div>
        
        <div class="container" id="printableArea">
            <div class="row justify-content-center">
                <div class="col-8" id="printableColumn">
                    <div class="row">
                        <div class="col-12">
                            <table border="0" align="center">
                                <tr>
                                    <td class="d-flex align-self-center"><img src="/img/logo.png" width="120" height="120" alt="" style="margin-left: 15px; margin-top: 10px"></td>
                                    <td>
                                        <center>
                                            <h5><strong>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN, RISET DAN TEKNOLOGI</strong></h5>
                                            <h5 style="font-size:28px;" id="univ-name"><strong>UNIVERSITAS LAMBUNG MANGKURAT</stro></h5>
                                            <h5>LEMBAGA PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT</h5>
                                            <h6>JL. Brigjend. H. Hasan Basry - Banjarmasin Telp. (0511) 3305240 - Fak. (0511) 3305240</h6>
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="200">
                                        <hr style="border: #0000;border-style: double; margin-top: 2px; margin-left: 5px;">
                                    </td>
                                </tr>
                                <br>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center"><h5>SURAT TUGAS</h5></div>
                        <div class="col-12 text-center"><h5>Nomor : {{ $tugas->no_surat ?? 'XXX' }} /UN8.2/PP/2022</h5></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <span>Ketua Lembaga Penelitian dan Pengabdian kepada Masyarakat Universitas Lambung Mangkurat Banjarmasin, dengan ini menugaskan kepada :</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table border="2" style="margin-top:20px; text-align: center; width: 100%;" aria-describedby="">
                                <tr>
                                    <th width="50px">No</th>
                                    <th width="200px">Nama</th>
                                    <th width="150px">NIP/NIDN/NIM</th>
                                    <th width="200px">Jabatan Dalam Penelitian</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>{{ $tugas->ketua }}</td>
                                    <td>{{ $tugas->nip_ketua }}</td>
                                    <td>Ketua</td>
                                </tr>
                                @for($i = 1; $i <=15; $i++ )
                                @if ($tugas['ang'.$i] != null)
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $tugas['ang'.$i] }}</td>
                                    <td>{{ $tugas['nip_ang'.$i] }}</td>
                                    <td>{{ $tugas['jbtn_ang'.$i] }}</td>
                                </tr>
                                @endif
                                @endfor
                            </table>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-12">
                            <span>Untuk melaksanakan kegiatan Penelitian dengan judul {{ $tugas->judul }}</span>
                        </div>
                        <div class="col-12" style="margin-top: 20px;">
                            <span>Adapun kegiatan Penelitian dilaksanakan sejak Tanggal {{ \Carbon\Carbon::parse($tugas->wkt_mulai)->translatedFormat('d F Y') }} s.d {{ \Carbon\Carbon::parse($tugas->wkt_sls)->translatedFormat('d F Y') }} dengan tujuan {{ $tugas->lokasi }}</span>
                        </div>
                        <div class="col-12" style="margin-top: 20px;">
                            <span>Surat tugas ini dibuat untuk dilaksanakan dengan penuh tanggung jawab</span>
                        </div>
                    </div>
                    <div class="row justify-content-end" style="margin-top: 20px;">
                        <div class="col-5">
            
                            <table style="margin-top: 20px;">
                                <tr>
                                    <td>
                                        <br>
                                        <br>
                                        <span style="text-align: right;">Dikeluarkan di</span>
                                    </td>
                                    <td>
                                        <br>
                                        <br>
                                        <span style="text-align: right;">: Banjarmasin</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="text-align: right;">Tanggal</span>
                                    </td>
                                    <td>
                                        <span style="text-align: right;">: {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="text-align: right;">Ketua LPPM</span>
                                    </td>
                                </tr>
                            </table>
                            <table style="margin-top: 75px; margin-bottom: 60px;">
                                <tr>
                                    <td>
                                        <span style="text-align: right;">Prof. Dr. Ir. H. Danang Biyatmoko, M.Si</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="text-align: right;">NIP. 19680507 199303 1 020</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Jumbotron-->

    <!--Content-->
    <!--Content-->
@endsection