<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zona extends Model {

	protected $table = 'zonas';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [
		'zona'
	];

	public function restaurante()
	{
		return $this->belongsTo('Restaurante');
	}

}