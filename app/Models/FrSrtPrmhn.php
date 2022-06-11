<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FrSrtPrmhn
 * 
 * @property int $id_srt
 * @property string $judul
 * @property string $kepada
 * @property string $lokasi
 * @property string $ketua
 * @property Carbon $wkt_mulai
 * @property Carbon $wkt_sls
 * @property string $nama_hub
 * @property string $no_telp
 * @property string|null $catatan
 * @property string $tipe
 * @property string|null $no_surat
 * @property string $email
 * @property int|null $proses
 * @property int|null $cetak
 * @property string $nip_ketua
 * @property int $id_fakultas
 * 
 * @property Fakulta $fakulta
 * @property Anggotum $anggotum
 *
 * @package App\Models
 */
class FrSrtPrmhn extends Model
{
	protected $table = 'fr_srt_prmhn';
	protected $primaryKey = 'id_srt';
	public $timestamps = false;

	protected $casts = [
		'proses' => 'int',
		'cetak' => 'int',
		'id_fakultas' => 'int'
	];

	protected $dates = [
		'wkt_mulai',
		'wkt_sls'
	];

	protected $fillable = [
		'judul',
		'kepada',
		'lokasi',
		'ketua',
		'wkt_mulai',
		'wkt_sls',
		'nama_hub',
		'no_telp',
		'catatan',
		'tipe',
		'no_surat',
		'email',
		'proses',
		'cetak',
		'nip_ketua',
		'id_fakultas'
	];

	public function fakulta()
	{
		return $this->belongsTo(Fakulta::class, 'id_fakultas');
	}

	public function anggotum()
	{
		return $this->hasOne(Anggotum::class, 'id_prmhn');
	}
}
