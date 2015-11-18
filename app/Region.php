<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model {

	//
	protected $table = 'regiones';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [
		'region'
	];


	public function ciudades()
	{
		return $this->hasMany('Ciudad');
	}


}
