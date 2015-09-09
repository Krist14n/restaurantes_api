<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promocion extends Model {

	protected $table = 'promociones';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [
		'promocion'
	];

	public function restaurante()
	{
		return $this->belongsToMany('Restaurante');
	}

}