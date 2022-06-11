<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FrSrtTuga
 * 
 * @property int $id_srt
 * @property string $judul
 * @property string $lokasi
 * @property string $ketua
 * @property string $nip_ketua
 * @property Carbon $wkt_mulai
 * @property Carbon $wkt_sls
 * @property string $nama_hub
 * @property string $no_telp
 * @property string|null $catatan
 * @property string $tipe
 * @property string|null $no_surat
 * @property string $email
 * @property int $id_fakultas
 * 
 * @property Fakulta $fakulta
 * @property Anggotum $anggotum
 *
 * @package App\Models
 */
class FrSrtTuga extends Model
{
	protected $table = 'fr_srt_tugas';
	protected $primaryKey = 'id_srt';
	public $timestamps = false;

	protected $casts = [
		'id_fakultas' => 'int'
	];

	protected $dates = [
		'wkt_mulai',
		'wkt_sls'
	];

	protected $fillable = [
		'judul',
		'lokasi',
		'ketua',
		'nip_ketua',
		'wkt_mulai',
		'wkt_sls',
		'nama_hub',
		'no_telp',
		'catatan',
		'tipe',
		'no_surat',
		'email',
		'id_fakultas'
	];

	public function fakulta()
	{
		return $this->belongsTo(Fakulta::class, 'id_fakultas');
	}

	public function anggotum()
	{
		return $this->hasOne(Anggotum::class, 'id_tugas');
	}
}
