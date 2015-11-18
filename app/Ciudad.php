<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciudad extends Model {

	//
	protected $table = 'ciudades';
	public $timestamps = true;

	use SoftDeletes;

	protected $fillable = [
		'nombre', 'region_id'
	];

	protected $dates = ['deleted_at'];

	public function restaurantes_internacionales()
	{
		return $this->hasMany('Restaurante_Internacional');
	}

}
