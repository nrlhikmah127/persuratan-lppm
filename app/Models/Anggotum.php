<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Anggotum
 * 
 * @property int $id
 * @property string $nama
 * @property int $nip
 * @property int|null $id_prmhn
 * @property int|null $id_tugas
 * @property int $id_jabatan
 * 
 * @property FrSrtPrmhn|null $fr_srt_prmhn
 * @property FrSrtTuga|null $fr_srt_tuga
 * @property Jabatan $jabatan
 *
 * @package App\Models
 */
class Anggotum extends Model
{
	protected $table = 'anggota';
	public $timestamps = false;

	protected $casts = [
		'nip' => 'int',
		'id_prmhn' => 'int',
		'id_tugas' => 'int',
		'id_jabatan' => 'int'
	];

	protected $fillable = [
		'nama',
		'nip',
		'id_prmhn',
		'id_tugas',
		'id_jabatan'
	];

	public function fr_srt_prmhn()
	{
		return $this->belongsTo(FrSrtPrmhn::class, 'id_prmhn');
	}

	public function fr_srt_tuga()
	{
		return $this->belongsTo(FrSrtTuga::class, 'id_tugas');
	}

	public function jabatan()
	{
		return $this->belongsTo(Jabatan::class, 'id_jabatan');
	}
}
