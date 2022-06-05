<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'fr_srt_tugas';
    protected $primaryKey = 'id_srt';
    public $timestamps = false;
    protected $fillable = ['judul', 'lokasi', 'ketua', 'nip_ketua', 'ang1', 'nip_ang1', 'jbtn_ang1', 'ang2', 'nip_ang2', 'jbtn_ang2', 'ang3', 'nip_ang3', 'jbtn_ang3', 'ang4', 'nip_ang4', 'jbtn_ang4', 'ang5', 'nip_ang5', 'jbtn_ang5', 'ang6', 'nip_ang6', 'jbtn_ang6', 'ang7', 'nip_ang7', 'jbtn_ang7', 'ang8', 'nip_ang8', 'jbtn_ang8', 'ang9', 'nip_ang9', 'jbtn_ang9', 'ang10', 'nip_ang10', 'jbtn_ang10', 'ang11', 'nip_ang11', 'jbtn_ang11', 'ang12', 'nip_ang12', 'jbtn_ang12', 'ang13', 'nip_ang13', 'jbtn_ang13', 'ang14', 'nip_ang14', 'jbtn_ang14', 'ang15', 'nip_ang15', 'jbtn_ang15', 'wkt_mulai', 'wkt_sls', 'nama_hub', 'no_telp', 'catatan', 'tipe', 'no_surat'];
}
