<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurante extends Model {

	protected $table = 'restaurantes';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function direccion()
	{
		return $this->hasOne('Direccion');
	}

	/*public function zona()
	{
		return $this->hasOne('Zona');
	}*/

	public function cocina()
	{
		return $this->hasMany('Cocina');
	}

	public function plan()
	{
		return $this->hasMany('Plan');
	}

	public function promocion()
	{
		return $this->hasMany('Promocion');
	}

}