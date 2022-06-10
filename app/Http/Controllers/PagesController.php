<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\Tugas;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function beranda(){
        return view('beranda');
    }

    public function login(){
        return view('login');
    }

    public function form_izin_penelitian(){
        return view('users/form_izin_penelitian');
    }

    public function form_izin_pengabdian(){
        return view('users/form_izin_pengabdian');
    }

    public function form_tugas_penelitian(){
        return view('users/form_tugas_penelitian');
    }

    public function form_tugas_pengabdian(){
        return view('users/form_tugas_pengabdian');
    }

    public function beranda_admin(){
        return view ('beranda_admin');
    }


    /**PERMOHONAN */
    public function store_permohonan(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kepada' => 'required',
            'lokasi' => 'required',
            'ketua' => 'required',
            'nip_ketua' => 'required',
            'ang1' => 'required',
            'nip_ang1' => 'required',
            'jbtn_ang1' => 'required',
            'ang2' => 'nullable',
            'nip_ang2' => 'nullable',
            'jbtn_ang2' => 'nullable',
            'ang3' => 'nullable',
            'nip_ang3' => 'nullable',
            'jbtn_ang3' => 'nullable',
            'ang4' => 'nullable',
            'nip_ang4' => 'nullable',
            'jbtn_ang4' => 'nullable',
            'ang5' => 'nullable',
            'nip_ang5' => 'nullable',
            'jbtn_ang5' => 'nullable',
            'ang6' => 'nullable',
            'nip_ang6' => 'nullable',
            'jbtn_ang6' => 'nullable',
            'ang7' => 'nullable',
            'nip_ang7' => 'nullable',
            'jbtn_ang7' => 'nullable',
            'ang8' => 'nullable',
            'nip_ang8' => 'nullable',
            'jbtn_ang8' => 'nullable',
            'ang9' => 'nullable',
            'nip_ang9' => 'nullable',
            'jbtn_ang9' => 'nullable',
            'ang10' => 'nullable',
            'nip_ang10' => 'nullable',
            'jbtn_ang10' => 'nullable',
            'ang11' => 'nullable',
            'nip_ang11' => 'nullable',
            'jbtn_ang11' => 'nullable',
            'ang12' => 'nullable',
            'nip_ang12' => 'nullable',
            'jbtn_ang12' => 'nullable',
            'ang13' => 'nullable',
            'nip_ang13' => 'nullable',
            'jbtn_ang13' => 'nullable',
            'ang14' => 'nullable',
            'nip_ang14' => 'nullable',
            'jbtn_ang14' => 'nullable',
            'ang15' => 'nullable',
            'nip_ang15' => 'nullable',
            'jbtn_ang15' => 'nullable',
            'wkt_mulai' => 'required | date',
            'wkt_sls' => 'required | date',
            'nama_hub' => 'required',
            'no_telp' => 'required',
            'catatan' => 'nullable',
            'tipe' => 'required',
            'no_surat' => 'nullable'
        ]);

        $permohonan = new permohonan;
        $permohonan->judul = $request->judul;
        $permohonan->kepada = $request->kepada;
        $permohonan->lokasi = $request->lokasi;
        $permohonan->ketua = $request->ketua;
        $permohonan->nip_ketua = $request->nip_ketua;
        $permohonan->ang1 = $request->ang1;
        $permohonan->nip_ang1 = $request->nip_ang1;
        $permohonan->jbtn_ang1 = $request->jbtn_ang1;
        $permohonan->ang2 = $request->ang2;
        $permohonan->nip_ang2 = $request->nip_ang2;
        $permohonan->jbtn_ang2 = $request->jbtn_ang2;
        $permohonan->ang3 = $request->ang3;
        $permohonan->nip_ang3 = $request->nip_ang3;
        $permohonan->jbtn_ang3 = $request->jbtn_ang3;
        $permohonan->ang4 = $request->ang4;
        $permohonan->nip_ang4 = $request->nip_ang4;
        $permohonan->jbtn_ang4 = $request->jbtn_ang4;
        $permohonan->ang5 = $request->ang5;
        $permohonan->nip_ang5 = $request->nip_ang5;
        $permohonan->jbtn_ang5 = $request->jbtn_ang5;
        $permohonan->ang6 = $request->ang6;
        $permohonan->nip_ang6 = $request->nip_ang6;
        $permohonan->jbtn_ang6 = $request->jbtn_ang6;
        $permohonan->ang7 = $request->ang7;
        $permohonan->nip_ang7 = $request->nip_ang7;
        $permohonan->jbtn_ang7 = $request->jbtn_ang7;
        $permohonan->ang8 = $request->ang8;
        $permohonan->nip_ang8 = $request->nip_ang8;
        $permohonan->jbtn_ang8 = $request->jbtn_ang8;
        $permohonan->ang9 = $request->ang9;
        $permohonan->nip_ang9 = $request->nip_ang9;
        $permohonan->jbtn_ang9 = $request->jbtn_ang9;
        $permohonan->ang10 = $request->ang10;
        $permohonan->nip_ang10 = $request->nip_ang10;
        $permohonan->jbtn_ang10 = $request->jbtn_ang10;
        $permohonan->ang11 = $request->ang11;
        $permohonan->nip_ang11 = $request->nip_ang11;
        $permohonan->jbtn_ang11 = $request->jbtn_ang11;
        $permohonan->ang12 = $request->ang12;
        $permohonan->nip_ang12 = $request->nip_ang12;
        $permohonan->jbtn_ang12 = $request->jbtn_ang12;
        $permohonan->ang13 = $request->ang13;
        $permohonan->nip_ang13 = $request->nip_ang13;
        $permohonan->jbtn_ang13 = $request->jbtn_ang13;
        $permohonan->ang14 = $request->ang14;
        $permohonan->nip_ang14 = $request->nip_ang14;
        $permohonan->jbtn_ang14 = $request->jbtn_ang14;
        $permohonan->ang15 = $request->ang15;
        $permohonan->nip_ang15 = $request->nip_ang15;
        $permohonan->jbtn_ang15 = $request->jbtn_ang15;
        $permohonan->wkt_mulai = $request->wkt_sls;
        $permohonan->wkt_sls = $request->wkt_sls;
        $permohonan->nama_hub = $request->nama_hub;
        $permohonan->no_telp = $request->no_telp;
        $permohonan->catatan = $request->catatan;
        $permohonan->tipe = $request->tipe;
        $permohonan->no_surat = $request->no_surat;
        $permohonan->save();

        return redirect('/')->with('status', 'Data berhasil ditambahkan');
    }

    public function sdh_diproses(){
        return view('admin/cek_req_sdh_diproses');
    }

    public function proses_izin_penelitian(Permohonan $permohonan){
        return view ('admin/proses_izin_penelitian', compact('permohonan'));
    }

    public function edit_izin_penelitian(Permohonan $permohonan){
        return view ('admin/edit_izin_penelitian', compact('permohonan'));
    }

    public function update_izin_penelitian(Request $request, Permohonan $permohonan){
        $request->validate([
            'judul' => 'required',
            'kepada' => 'required',
            'lokasi' => 'required',
            'ketua' => 'required',
            'nip_ketua' => 'required',
            'ang1' => 'required',
            'nip_ang1' => 'required',
            'jbtn_ang1' => 'required',
            'ang2' => 'nullable',
            'nip_ang2' => 'nullable',
            'jbtn_ang2' => 'nullable',
            'ang3' => 'nullable',
            'nip_ang3' => 'nullable',
            'jbtn_ang3' => 'nullable',
            'ang4' => 'nullable',
            'nip_ang4' => 'nullable',
            'jbtn_ang4' => 'nullable',
            'ang5' => 'nullable',
            'nip_ang5' => 'nullable',
            'jbtn_ang5' => 'nullable',
            'ang6' => 'nullable',
            'nip_ang6' => 'nullable',
            'jbtn_ang6' => 'nullable',
            'ang7' => 'nullable',
            'nip_ang7' => 'nullable',
            'jbtn_ang7' => 'nullable',
            'ang8' => 'nullable',
            'nip_ang8' => 'nullable',
            'jbtn_ang8' => 'nullable',
            'ang9' => 'nullable',
            'nip_ang9' => 'nullable',
            'jbtn_ang9' => 'nullable',
            'ang10' => 'nullable',
            'nip_ang10' => 'nullable',
            'jbtn_ang10' => 'nullable',
            'ang11' => 'nullable',
            'nip_ang11' => 'nullable',
            'jbtn_ang11' => 'nullable',
            'ang12' => 'nullable',
            'nip_ang12' => 'nullable',
            'jbtn_ang12' => 'nullable',
            'ang13' => 'nullable',
            'nip_ang13' => 'nullable',
            'jbtn_ang13' => 'nullable',
            'ang14' => 'nullable',
            'nip_ang14' => 'nullable',
            'jbtn_ang14' => 'nullable',
            'ang15' => 'nullable',
            'nip_ang15' => 'nullable',
            'jbtn_ang15' => 'nullable',
            'wkt_mulai' => 'required | date',
            'wkt_sls' => 'required | date',
            'nama_hub' => 'required',
            'no_telp' => 'required',
            'catatan' => 'nullable',
            'tipe' => 'required',
            'no_surat' => 'nullable'
        ]);

        $permohonan->judul = $request->judul;
        $permohonan->kepada = $request->kepada;
        $permohonan->lokasi = $request->lokasi;
        $permohonan->ketua = $request->ketua;
        $permohonan->nip_ketua = $request->nip_ketua;
        $permohonan->ang1 = $request->ang1;
        $permohonan->nip_ang1 = $request->nip_ang1;
        $permohonan->jbtn_ang1 = $request->jbtn_ang1;
        $permohonan->ang2 = $request->ang2;
        $permohonan->nip_ang2 = $request->nip_ang2;
        $permohonan->jbtn_ang2 = $request->jbtn_ang2;
        $permohonan->ang3 = $request->ang3;
        $permohonan->nip_ang3 = $request->nip_ang3;
        $permohonan->jbtn_ang3 = $request->jbtn_ang3;
        $permohonan->ang4 = $request->ang4;
        $permohonan->nip_ang4 = $request->nip_ang4;
        $permohonan->jbtn_ang4 = $request->jbtn_ang4;
        $permohonan->ang5 = $request->ang5;
        $permohonan->nip_ang5 = $request->nip_ang5;
        $permohonan->jbtn_ang5 = $request->jbtn_ang5;
        $permohonan->ang6 = $request->ang6;
        $permohonan->nip_ang6 = $request->nip_ang6;
        $permohonan->jbtn_ang6 = $request->jbtn_ang6;
        $permohonan->ang7 = $request->ang7;
        $permohonan->nip_ang7 = $request->nip_ang7;
        $permohonan->jbtn_ang7 = $request->jbtn_ang7;
        $permohonan->ang8 = $request->ang8;
        $permohonan->nip_ang8 = $request->nip_ang8;
        $permohonan->jbtn_ang8 = $request->jbtn_ang8;
        $permohonan->ang9 = $request->ang9;
        $permohonan->nip_ang9 = $request->nip_ang9;
        $permohonan->jbtn_ang9 = $request->jbtn_ang9;
        $permohonan->ang10 = $request->ang10;
        $permohonan->nip_ang10 = $request->nip_ang10;
        $permohonan->jbtn_ang10 = $request->jbtn_ang10;
        $permohonan->ang11 = $request->ang11;
        $permohonan->nip_ang11 = $request->nip_ang11;
        $permohonan->jbtn_ang11 = $request->jbtn_ang11;
        $permohonan->ang12 = $request->ang12;
        $permohonan->nip_ang12 = $request->nip_ang12;
        $permohonan->jbtn_ang12 = $request->jbtn_ang12;
        $permohonan->ang13 = $request->ang13;
        $permohonan->nip_ang13 = $request->nip_ang13;
        $permohonan->jbtn_ang13 = $request->jbtn_ang13;
        $permohonan->ang14 = $request->ang14;
        $permohonan->nip_ang14 = $request->nip_ang14;
        $permohonan->jbtn_ang14 = $request->jbtn_ang14;
        $permohonan->ang15 = $request->ang15;
        $permohonan->nip_ang15 = $request->nip_ang15;
        $permohonan->jbtn_ang15 = $request->jbtn_ang15;
        $permohonan->wkt_mulai = $request->wkt_mulai;
        $permohonan->wkt_sls = $request->wkt_sls;
        $permohonan->nama_hub = $request->nama_hub;
        $permohonan->no_telp = $request->no_telp;
        $permohonan->catatan = $request->catatan;
        $permohonan->tipe = $request->tipe;
        $permohonan->no_surat = $request->no_surat;
        $permohonan->save();

        return redirect('/proses_izinpenelitian/'.$permohonan->id_srt);
    }


    /** TUGAS */
    public function store_tugas(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'lokasi' => 'required',
            'ketua' => 'required',
            'nip_ketua' => 'required',
            'ang1' => 'required',
            'nip_ang1' => 'required',
            'jbtn_ang1' => 'required',
            'ang2' => 'nullable',
            'nip_ang2' => 'nullable',
            'jbtn_ang2' => 'nullable',
            'ang3' => 'nullable',
            'nip_ang3' => 'nullable',
            'jbtn_ang3' => 'nullable',
            'ang4' => 'nullable',
            'nip_ang4' => 'nullable',
            'jbtn_ang4' => 'nullable',
            'ang5' => 'nullable',
            'nip_ang5' => 'nullable',
            'jbtn_ang5' => 'nullable',
            'ang6' => 'nullable',
            'nip_ang6' => 'nullable',
            'jbtn_ang6' => 'nullable',
            'ang7' => 'nullable',
            'nip_ang7' => 'nullable',
            'jbtn_ang7' => 'nullable',
            'ang8' => 'nullable',
            'nip_ang8' => 'nullable',
            'jbtn_ang8' => 'nullable',
            'ang9' => 'nullable',
            'nip_ang9' => 'nullable',
            'jbtn_ang9' => 'nullable',
            'ang10' => 'nullable',
            'nip_ang10' => 'nullable',
            'jbtn_ang10' => 'nullable',
            'ang11' => 'nullable',
            'nip_ang11' => 'nullable',
            'jbtn_ang11' => 'nullable',
            'ang12' => 'nullable',
            'nip_ang12' => 'nullable',
            'jbtn_ang12' => 'nullable',
            'ang13' => 'nullable',
            'nip_ang13' => 'nullable',
            'jbtn_ang13' => 'nullable',
            'ang14' => 'nullable',
            'nip_ang14' => 'nullable',
            'jbtn_ang14' => 'nullable',
            'ang15' => 'nullable',
            'nip_ang15' => 'nullable',
            'jbtn_ang15' => 'nullable',
            'wkt_mulai' => 'required | date',
            'wkt_sls' => 'required | date',
            'nama_hub' => 'required',
            'no_telp' => 'required',
            'catatan' => 'nullable',
            'tipe' => 'required',
            'no_surat' => 'nullable'
        ]);

        $tugas = new tugas;
        $tugas->judul = $request->judul;
        $tugas->lokasi = $request->lokasi;
        $tugas->ketua = $request->ketua;
        $tugas->nip_ketua = $request->nip_ketua;
        $tugas->ang1 = $request->ang1;
        $tugas->nip_ang1 = $request->nip_ang1;
        $tugas->jbtn_ang1 = $request->jbtn_ang1;
        $tugas->ang2 = $request->ang2;
        $tugas->nip_ang2 = $request->nip_ang2;
        $tugas->jbtn_ang2 = $request->jbtn_ang2;
        $tugas->ang3 = $request->ang3;
        $tugas->nip_ang3 = $request->nip_ang3;
        $tugas->jbtn_ang3 = $request->jbtn_ang3;
        $tugas->ang4 = $request->ang4;
        $tugas->nip_ang4 = $request->nip_ang4;
        $tugas->jbtn_ang4 = $request->jbtn_ang4;
        $tugas->ang5 = $request->ang5;
        $tugas->nip_ang5 = $request->nip_ang5;
        $tugas->jbtn_ang5 = $request->jbtn_ang5;
        $tugas->ang6 = $request->ang6;
        $tugas->nip_ang6 = $request->nip_ang6;
        $tugas->jbtn_ang6 = $request->jbtn_ang6;
        $tugas->ang7 = $request->ang7;
        $tugas->nip_ang7 = $request->nip_ang7;
        $tugas->jbtn_ang7 = $request->jbtn_ang7;
        $tugas->ang8 = $request->ang8;
        $tugas->nip_ang8 = $request->nip_ang8;
        $tugas->jbtn_ang8 = $request->jbtn_ang8;
        $tugas->ang9 = $request->ang9;
        $tugas->nip_ang9 = $request->nip_ang9;
        $tugas->jbtn_ang9 = $request->jbtn_ang9;
        $tugas->ang10 = $request->ang10;
        $tugas->nip_ang10 = $request->nip_ang10;
        $tugas->jbtn_ang10 = $request->jbtn_ang10;
        $tugas->ang11 = $request->ang11;
        $tugas->nip_ang11 = $request->nip_ang11;
        $tugas->jbtn_ang11 = $request->jbtn_ang11;
        $tugas->ang12 = $request->ang12;
        $tugas->nip_ang12 = $request->nip_ang12;
        $tugas->jbtn_ang12 = $request->jbtn_ang12;
        $tugas->ang13 = $request->ang13;
        $tugas->nip_ang13 = $request->nip_ang13;
        $tugas->jbtn_ang13 = $request->jbtn_ang13;
        $tugas->ang14 = $request->ang14;
        $tugas->nip_ang14 = $request->nip_ang14;
        $tugas->jbtn_ang14 = $request->jbtn_ang14;
        $tugas->ang15 = $request->ang15;
        $tugas->nip_ang15 = $request->nip_ang15;
        $tugas->jbtn_ang15 = $request->jbtn_ang15;
        $tugas->wkt_mulai = $request->wkt_sls;
        $tugas->wkt_sls = $request->wkt_sls;
        $tugas->nama_hub = $request->nama_hub;
        $tugas->no_telp = $request->no_telp;
        $tugas->catatan = $request->catatan;
        $tugas->tipe = $request->tipe;
        $tugas->no_surat = $request->no_surat;
        $tugas->save();

        return redirect('/')->with('status', 'Data berhasil ditambahkan');
    }

    public function req_izin_pengabdian(){
        $requests = Permohonan::where('tipe', 'izin_pengabdian')->get();
        return view ('admin/cek_req_izin_pengabdian', compact('requests'));
    }

    public function proses_izin_pengabdian(Permohonan $permohonan){
        return view ('admin/proses_izin_pengabdian', compact('permohonan'));
    }

    public function edit_izin_pengabdian(Permohonan $permohonan){
        return view ('admin/edit_izin_pengabdian', compact('permohonan'));
    }

    public function update_izin_pengabdian(Permohonan $permohonan, Request $request){
        $request->validate([
            'judul' => 'required',
            'kepada' => 'required',
            'lokasi' => 'required',
            'ketua' => 'required',
            'nip_ketua' => 'required',
            'ang1' => 'required',
            'nip_ang1' => 'required',
            'jbtn_ang1' => 'required',
            'ang2' => 'nullable',
            'nip_ang2' => 'nullable',
            'jbtn_ang2' => 'nullable',
            'ang3' => 'nullable',
            'nip_ang3' => 'nullable',
            'jbtn_ang3' => 'nullable',
            'ang4' => 'nullable',
            'nip_ang4' => 'nullable',
            'jbtn_ang4' => 'nullable',
            'ang5' => 'nullable',
            'nip_ang5' => 'nullable',
            'jbtn_ang5' => 'nullable',
            'ang6' => 'nullable',
            'nip_ang6' => 'nullable',
            'jbtn_ang6' => 'nullable',
            'ang7' => 'nullable',
            'nip_ang7' => 'nullable',
            'jbtn_ang7' => 'nullable',
            'ang8' => 'nullable',
            'nip_ang8' => 'nullable',
            'jbtn_ang8' => 'nullable',
            'ang9' => 'nullable',
            'nip_ang9' => 'nullable',
            'jbtn_ang9' => 'nullable',
            'ang10' => 'nullable',
            'nip_ang10' => 'nullable',
            'jbtn_ang10' => 'nullable',
            'ang11' => 'nullable',
            'nip_ang11' => 'nullable',
            'jbtn_ang11' => 'nullable',
            'ang12' => 'nullable',
            'nip_ang12' => 'nullable',
            'jbtn_ang12' => 'nullable',
            'ang13' => 'nullable',
            'nip_ang13' => 'nullable',
            'jbtn_ang13' => 'nullable',
            'ang14' => 'nullable',
            'nip_ang14' => 'nullable',
            'jbtn_ang14' => 'nullable',
            'ang15' => 'nullable',
            'nip_ang15' => 'nullable',
            'jbtn_ang15' => 'nullable',
            'wkt_mulai' => 'required | date',
            'wkt_sls' => 'required | date',
            'nama_hub' => 'required',
            'no_telp' => 'required',
            'catatan' => 'nullable',
            'tipe' => 'required',
            'no_surat' => 'nullable'
        ]);

        $permohonan->judul = $request->judul;
        $permohonan->kepada = $request->kepada;
        $permohonan->lokasi = $request->lokasi;
        $permohonan->ketua = $request->ketua;
        $permohonan->nip_ketua = $request->nip_ketua;
        $permohonan->ang1 = $request->ang1;
        $permohonan->nip_ang1 = $request->nip_ang1;
        $permohonan->jbtn_ang1 = $request->jbtn_ang1;
        $permohonan->ang2 = $request->ang2;
        $permohonan->nip_ang2 = $request->nip_ang2;
        $permohonan->jbtn_ang2 = $request->jbtn_ang2;
        $permohonan->ang3 = $request->ang3;
        $permohonan->nip_ang3 = $request->nip_ang3;
        $permohonan->jbtn_ang3 = $request->jbtn_ang3;
        $permohonan->ang4 = $request->ang4;
        $permohonan->nip_ang4 = $request->nip_ang4;
        $permohonan->jbtn_ang4 = $request->jbtn_ang4;
        $permohonan->ang5 = $request->ang5;
        $permohonan->nip_ang5 = $request->nip_ang5;
        $permohonan->jbtn_ang5 = $request->jbtn_ang5;
        $permohonan->ang6 = $request->ang6;
        $permohonan->nip_ang6 = $request->nip_ang6;
        $permohonan->jbtn_ang6 = $request->jbtn_ang6;
        $permohonan->ang7 = $request->ang7;
        $permohonan->nip_ang7 = $request->nip_ang7;
        $permohonan->jbtn_ang7 = $request->jbtn_ang7;
        $permohonan->ang8 = $request->ang8;
        $permohonan->nip_ang8 = $request->nip_ang8;
        $permohonan->jbtn_ang8 = $request->jbtn_ang8;
        $permohonan->ang9 = $request->ang9;
        $permohonan->nip_ang9 = $request->nip_ang9;
        $permohonan->jbtn_ang9 = $request->jbtn_ang9;
        $permohonan->ang10 = $request->ang10;
        $permohonan->nip_ang10 = $request->nip_ang10;
        $permohonan->jbtn_ang10 = $request->jbtn_ang10;
        $permohonan->ang11 = $request->ang11;
        $permohonan->nip_ang11 = $request->nip_ang11;
        $permohonan->jbtn_ang11 = $request->jbtn_ang11;
        $permohonan->ang12 = $request->ang12;
        $permohonan->nip_ang12 = $request->nip_ang12;
        $permohonan->jbtn_ang12 = $request->jbtn_ang12;
        $permohonan->ang13 = $request->ang13;
        $permohonan->nip_ang13 = $request->nip_ang13;
        $permohonan->jbtn_ang13 = $request->jbtn_ang13;
        $permohonan->ang14 = $request->ang14;
        $permohonan->nip_ang14 = $request->nip_ang14;
        $permohonan->jbtn_ang14 = $request->jbtn_ang14;
        $permohonan->ang15 = $request->ang15;
        $permohonan->nip_ang15 = $request->nip_ang15;
        $permohonan->jbtn_ang15 = $request->jbtn_ang15;
        $permohonan->wkt_mulai = $request->wkt_mulai;
        $permohonan->wkt_sls = $request->wkt_sls;
        $permohonan->nama_hub = $request->nama_hub;
        $permohonan->no_telp = $request->no_telp;
        $permohonan->catatan = $request->catatan;
        $permohonan->tipe = $request->tipe;
        $permohonan->no_surat = $request->no_surat;
        $permohonan->save();

        return redirect('/proses_izinpengabdian/'.$permohonan->id_srt);
    }

    public function req_diproses(){
        return view ('admin/cek_req_diproses');
    }

    public function proses_tugas_penelitian(Tugas $tugas){
        return view ('admin/proses_tugas_penelitian', compact('tugas'));
    }

    public function edit_tugas_penelitian(Tugas $tugas){
        return view ('admin/edit_tugas_penelitian', compact('tugas'));
    }

    public function update_tugas_penelitian(Tugas $tugas, Request $request){
        $request->validate([
            'judul' => 'required',
            'lokasi' => 'required',
            'ketua' => 'required',
            'nip_ketua' => 'required',
            'ang1' => 'required',
            'nip_ang1' => 'required',
            'jbtn_ang1' => 'required',
            'ang2' => 'nullable',
            'nip_ang2' => 'nullable',
            'jbtn_ang2' => 'nullable',
            'ang3' => 'nullable',
            'nip_ang3' => 'nullable',
            'jbtn_ang3' => 'nullable',
            'ang4' => 'nullable',
            'nip_ang4' => 'nullable',
            'jbtn_ang4' => 'nullable',
            'ang5' => 'nullable',
            'nip_ang5' => 'nullable',
            'jbtn_ang5' => 'nullable',
            'ang6' => 'nullable',
            'nip_ang6' => 'nullable',
            'jbtn_ang6' => 'nullable',
            'ang7' => 'nullable',
            'nip_ang7' => 'nullable',
            'jbtn_ang7' => 'nullable',
            'ang8' => 'nullable',
            'nip_ang8' => 'nullable',
            'jbtn_ang8' => 'nullable',
            'ang9' => 'nullable',
            'nip_ang9' => 'nullable',
            'jbtn_ang9' => 'nullable',
            'ang10' => 'nullable',
            'nip_ang10' => 'nullable',
            'jbtn_ang10' => 'nullable',
            'ang11' => 'nullable',
            'nip_ang11' => 'nullable',
            'jbtn_ang11' => 'nullable',
            'ang12' => 'nullable',
            'nip_ang12' => 'nullable',
            'jbtn_ang12' => 'nullable',
            'ang13' => 'nullable',
            'nip_ang13' => 'nullable',
            'jbtn_ang13' => 'nullable',
            'ang14' => 'nullable',
            'nip_ang14' => 'nullable',
            'jbtn_ang14' => 'nullable',
            'ang15' => 'nullable',
            'nip_ang15' => 'nullable',
            'jbtn_ang15' => 'nullable',
            'wkt_mulai' => 'required | date',
            'wkt_sls' => 'required | date',
            'nama_hub' => 'required',
            'no_telp' => 'required',
            'catatan' => 'nullable',
            'tipe' => 'required',
            'no_surat' => 'nullable'
        ]);

        $tugas->judul = $request->judul;
        $tugas->lokasi = $request->lokasi;
        $tugas->ketua = $request->ketua;
        $tugas->nip_ketua = $request->nip_ketua;
        $tugas->ang1 = $request->ang1;
        $tugas->nip_ang1 = $request->nip_ang1;
        $tugas->jbtn_ang1 = $request->jbtn_ang1;
        $tugas->ang2 = $request->ang2;
        $tugas->nip_ang2 = $request->nip_ang2;
        $tugas->jbtn_ang2 = $request->jbtn_ang2;
        $tugas->ang3 = $request->ang3;
        $tugas->nip_ang3 = $request->nip_ang3;
        $tugas->jbtn_ang3 = $request->jbtn_ang3;
        $tugas->ang4 = $request->ang4;
        $tugas->nip_ang4 = $request->nip_ang4;
        $tugas->jbtn_ang4 = $request->jbtn_ang4;
        $tugas->ang5 = $request->ang5;
        $tugas->nip_ang5 = $request->nip_ang5;
        $tugas->jbtn_ang5 = $request->jbtn_ang5;
        $tugas->ang6 = $request->ang6;
        $tugas->nip_ang6 = $request->nip_ang6;
        $tugas->jbtn_ang6 = $request->jbtn_ang6;
        $tugas->ang7 = $request->ang7;
        $tugas->nip_ang7 = $request->nip_ang7;
        $tugas->jbtn_ang7 = $request->jbtn_ang7;
        $tugas->ang8 = $request->ang8;
        $tugas->nip_ang8 = $request->nip_ang8;
        $tugas->jbtn_ang8 = $request->jbtn_ang8;
        $tugas->ang9 = $request->ang9;
        $tugas->nip_ang9 = $request->nip_ang9;
        $tugas->jbtn_ang9 = $request->jbtn_ang9;
        $tugas->ang10 = $request->ang10;
        $tugas->nip_ang10 = $request->nip_ang10;
        $tugas->jbtn_ang10 = $request->jbtn_ang10;
        $tugas->ang11 = $request->ang11;
        $tugas->nip_ang11 = $request->nip_ang11;
        $tugas->jbtn_ang11 = $request->jbtn_ang11;
        $tugas->ang12 = $request->ang12;
        $tugas->nip_ang12 = $request->nip_ang12;
        $tugas->jbtn_ang12 = $request->jbtn_ang12;
        $tugas->ang13 = $request->ang13;
        $tugas->nip_ang13 = $request->nip_ang13;
        $tugas->jbtn_ang13 = $request->jbtn_ang13;
        $tugas->ang14 = $request->ang14;
        $tugas->nip_ang14 = $request->nip_ang14;
        $tugas->jbtn_ang14 = $request->jbtn_ang14;
        $tugas->ang15 = $request->ang15;
        $tugas->nip_ang15 = $request->nip_ang15;
        $tugas->jbtn_ang15 = $request->jbtn_ang15;
        $tugas->wkt_mulai = $request->wkt_mulai;
        $tugas->wkt_sls = $request->wkt_sls;
        $tugas->nama_hub = $request->nama_hub;
        $tugas->no_telp = $request->no_telp;
        $tugas->catatan = $request->catatan;
        $tugas->tipe = $request->tipe;
        $tugas->no_surat = $request->no_surat;
        $tugas->save();

        return redirect('/proses_tugaspenelitian/'.$tugas->id_srt);
    }

    public function req_tugas_pengabdian(){
        $requests = Tugas::where('tipe', 'Cek Request Diproses')->get();
        return view ('admin/cek_req_tugas_pengabdian', compact('requests'));
    }

    public function proses_tugas_pengabdian(Tugas $tugas){
        return view ('admin/proses_tugas_pengabdian', compact('tugas'));
    }

    public function edit_tugas_pengabdian(Tugas $tugas){
        return view ('admin/edit_tugas_pengabdian', compact('tugas'));
    }

    public function update_tugas_pengabdian(Tugas $tugas, Request $request){
        $request->validate([
            'judul' => 'required',
            'lokasi' => 'required',
            'ketua' => 'required',
            'nip_ketua' => 'required',
            'ang1' => 'required',
            'nip_ang1' => 'required',
            'jbtn_ang1' => 'required',
            'ang2' => 'nullable',
            'nip_ang2' => 'nullable',
            'jbtn_ang2' => 'nullable',
            'ang3' => 'nullable',
            'nip_ang3' => 'nullable',
            'jbtn_ang3' => 'nullable',
            'ang4' => 'nullable',
            'nip_ang4' => 'nullable',
            'jbtn_ang4' => 'nullable',
            'ang5' => 'nullable',
            'nip_ang5' => 'nullable',
            'jbtn_ang5' => 'nullable',
            'ang6' => 'nullable',
            'nip_ang6' => 'nullable',
            'jbtn_ang6' => 'nullable',
            'ang7' => 'nullable',
            'nip_ang7' => 'nullable',
            'jbtn_ang7' => 'nullable',
            'ang8' => 'nullable',
            'nip_ang8' => 'nullable',
            'jbtn_ang8' => 'nullable',
            'ang9' => 'nullable',
            'nip_ang9' => 'nullable',
            'jbtn_ang9' => 'nullable',
            'ang10' => 'nullable',
            'nip_ang10' => 'nullable',
            'jbtn_ang10' => 'nullable',
            'ang11' => 'nullable',
            'nip_ang11' => 'nullable',
            'jbtn_ang11' => 'nullable',
            'ang12' => 'nullable',
            'nip_ang12' => 'nullable',
            'jbtn_ang12' => 'nullable',
            'ang13' => 'nullable',
            'nip_ang13' => 'nullable',
            'jbtn_ang13' => 'nullable',
            'ang14' => 'nullable',
            'nip_ang14' => 'nullable',
            'jbtn_ang14' => 'nullable',
            'ang15' => 'nullable',
            'nip_ang15' => 'nullable',
            'jbtn_ang15' => 'nullable',
            'wkt_mulai' => 'required | date',
            'wkt_sls' => 'required | date',
            'nama_hub' => 'required',
            'no_telp' => 'required',
            'catatan' => 'nullable',
            'tipe' => 'required',
            'no_surat' => 'nullable'
        ]);

        $tugas->judul = $request->judul;
        $tugas->lokasi = $request->lokasi;
        $tugas->ketua = $request->ketua;
        $tugas->nip_ketua = $request->nip_ketua;
        $tugas->ang1 = $request->ang1;
        $tugas->nip_ang1 = $request->nip_ang1;
        $tugas->jbtn_ang1 = $request->jbtn_ang1;
        $tugas->ang2 = $request->ang2;
        $tugas->nip_ang2 = $request->nip_ang2;
        $tugas->jbtn_ang2 = $request->jbtn_ang2;
        $tugas->ang3 = $request->ang3;
        $tugas->nip_ang3 = $request->nip_ang3;
        $tugas->jbtn_ang3 = $request->jbtn_ang3;
        $tugas->ang4 = $request->ang4;
        $tugas->nip_ang4 = $request->nip_ang4;
        $tugas->jbtn_ang4 = $request->jbtn_ang4;
        $tugas->ang5 = $request->ang5;
        $tugas->nip_ang5 = $request->nip_ang5;
        $tugas->jbtn_ang5 = $request->jbtn_ang5;
        $tugas->ang6 = $request->ang6;
        $tugas->nip_ang6 = $request->nip_ang6;
        $tugas->jbtn_ang6 = $request->jbtn_ang6;
        $tugas->ang7 = $request->ang7;
        $tugas->nip_ang7 = $request->nip_ang7;
        $tugas->jbtn_ang7 = $request->jbtn_ang7;
        $tugas->ang8 = $request->ang8;
        $tugas->nip_ang8 = $request->nip_ang8;
        $tugas->jbtn_ang8 = $request->jbtn_ang8;
        $tugas->ang9 = $request->ang9;
        $tugas->nip_ang9 = $request->nip_ang9;
        $tugas->jbtn_ang9 = $request->jbtn_ang9;
        $tugas->ang10 = $request->ang10;
        $tugas->nip_ang10 = $request->nip_ang10;
        $tugas->jbtn_ang10 = $request->jbtn_ang10;
        $tugas->ang11 = $request->ang11;
        $tugas->nip_ang11 = $request->nip_ang11;
        $tugas->jbtn_ang11 = $request->jbtn_ang11;
        $tugas->ang12 = $request->ang12;
        $tugas->nip_ang12 = $request->nip_ang12;
        $tugas->jbtn_ang12 = $request->jbtn_ang12;
        $tugas->ang13 = $request->ang13;
        $tugas->nip_ang13 = $request->nip_ang13;
        $tugas->jbtn_ang13 = $request->jbtn_ang13;
        $tugas->ang14 = $request->ang14;
        $tugas->nip_ang14 = $request->nip_ang14;
        $tugas->jbtn_ang14 = $request->jbtn_ang14;
        $tugas->ang15 = $request->ang15;
        $tugas->nip_ang15 = $request->nip_ang15;
        $tugas->jbtn_ang15 = $request->jbtn_ang15;
        $tugas->wkt_mulai = $request->wkt_mulai;
        $tugas->wkt_sls = $request->wkt_sls;
        $tugas->nama_hub = $request->nama_hub;
        $tugas->no_telp = $request->no_telp;
        $tugas->catatan = $request->catatan;
        $tugas->tipe = $request->tipe;
        $tugas->no_surat = $request->no_surat;
        $tugas->save();

        return redirect('/proses_tugaspengabdian/'.$tugas->id_srt);
    }
}
