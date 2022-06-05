@extends('layout_admin')

@section('title', 'Proses Request Izin Pengabdian')
@section('content')
    <!--Jumbotron-->
    <div class="container c">
        <a href="{{ url('/req_izinpengabdian') }}" class="text"><img src="/img/back.png" alt="icon back" class="img">BACK</a>
        <p>Permohonan Surat Izin Pengabdian</p>
        <hr style="border-top: 2px solid #3B868A;
        margin-bottom: 35px;">

        
        <div class="row">
            <div class="col-6">
                <a href="{{ url('/edit_izinpengabdian/'.$permohonan->id_srt) }}" class="btn btn-danger" type="button" style="margin-left: 0px;">
                    EDIT
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
                            <table border="0" align="center" style="width: 100%;">
                                <tr>
                                    <td class="d-flex align-self-center justify-content-end"><img src="/img/logo.png" width="120" height="120" alt="" style="margin-left: 15px;"></td>
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
                                        <hr style="border: #0000;border-style: double; margin-top: 2px;">
                                    </td>
                                </tr>
                                <br>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <span>No</span>
                        </div>
                        <div class="col-6">
                            <span>: {{ $permohonan->no_surat ?? "XXX" }}/UN8.2/PP/2022</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <span>Lampiran</span>
                        </div>
                        <div class="col-6">
                            <span>: </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <span>Perihal</span>
                        </div>
                        <div class="col-6">
                            <span>: Mohon Izin Pengabdian</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12"><span>Kepada</span></div>
                        <div class="col-12"><span>Yth. {{ $permohonan->kepada }}</span></div>
                        <div class="col-12"><span>Di- Tempat</span></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12"><span>Sehubung dengan pelaksanaan kegiatan pengabdian berjudul {{ $permohonan->judul }}.</span></div>
                        <div class="col-12"><span>Memohon kepada Bapak/Ibu agar sekiranya memberikan izin kegiatan pengabdian tersebut. Adapun tim dalam Pengabdian ini adalah sebagai berikut:</span></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <table border="2" style="text-align: center; width: 100%;" aria-describedby="">
                                <tr>
                                    <th width="50px">No</th>
                                    <th width="200px">Nama</th>
                                    <th width="150px">NIP/NIDN/NIM</th>
                                    <th width="200px">Jabatan Dalam Penelitian</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>{{ $permohonan->ketua }}</td>
                                    <td>{{ $permohonan->nip_ketua }}</td>
                                    <td>Ketua</td>
                                </tr>
                                @for($i = 1; $i <=15; $i++ )
                                @if ($permohonan['ang'.$i] != null)
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $permohonan['ang'.$i] }}</td>
                                    <td>{{ $permohonan['nip_ang'.$i] }}</td>
                                    <td>{{ $permohonan['jbtn_ang'.$i] }}</td>
                                </tr>
                                @endif
                                @endfor
                            </table>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <span>Surat tugas ini dibuat untuk dilaksanakan dengan penuh tanggung jawab.</span>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-5">
                            <table>
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
@endsection