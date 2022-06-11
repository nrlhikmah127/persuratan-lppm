<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fakulta
 * 
 * @property int $id
 * @property string $fakultas
 * 
 * @property FrSrtPrmhn $fr_srt_prmhn
 * @property FrSrtTuga $fr_srt_tuga
 *
 * @package App\Models
 */
class Fakulta extends Model
{
	protected $table = 'fakultas';
	public $timestamps = false;

	protected $fillable = [
		'fakultas'
	];

	public function fr_srt_prmhn()
	{
		return $this->hasOne(FrSrtPrmhn::class, 'id_fakultas');
	}

	public function fr_srt_tuga()
	{
		return $this->hasOne(FrSrtTuga::class, 'id_fakultas');
	}
}
