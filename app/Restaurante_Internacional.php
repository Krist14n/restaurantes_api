<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurante_Internacional extends Model {

	//
	protected $table = 'restaurantes_internacionales';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = 
		[
			'id',
			'ciudad_id',
			'nombre',
			'tipo_comida',
			'foto',
			'descripcion',
			'calificacion_comida',
			'calificacion_ambiente',
			'calificacion_servicio',
			'ideal_para',
			'recomendacion_mb',
			'web',
			'_token',
			
		];

	public function direccion()
	{
		return $this->hasOne('App\Direccion');
	}


}
