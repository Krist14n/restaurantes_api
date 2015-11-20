<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Direccion_Internacional extends Model {

	//
	protected $table = 'direcciones_internacionales';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = 
		[
			'direccion',
			'telefonos',
			'restaurante_internacional_id',
			'latitud',
			'longitud',
		];

	public function restaurante_internacional()
	{
		return $this->belongsTo('Restaurante_Internacional');
	}



}
