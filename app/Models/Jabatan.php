<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Jabatan
 * 
 * @property int $id
 * @property int $jabatan
 * 
 * @property Anggotum $anggotum
 *
 * @package App\Models
 */
class Jabatan extends Model
{
	protected $table = 'jabatan';
	public $timestamps = false;

	protected $casts = [
		'jabatan' => 'int'
	];

	protected $fillable = [
		'jabatan'
	];

	public function anggotum()
	{
		return $this->hasOne(Anggotum::class, 'id_jabatan');
	}
}
