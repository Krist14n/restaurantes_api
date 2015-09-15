<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurante extends Model {

	protected $table = 'restaurantes';
	public $timestamps = true;

	protected $fillable = [
		'id',
		'cocina_id',
		'plan_id',
		'zona_id',
		'nombre',
		'descripcion',
		'calificacion_comida',
		'calificacion_ambiente',
		'calificacion_servicio',
		'ideal_para',
		'marco_recomienda',
		'precio_promedio',
		'foto'
	];
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function direccion()
	{
		return $this->hasOne('App\Direccion');
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