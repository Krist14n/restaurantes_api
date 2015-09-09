<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cocina extends Model {

	protected $table = 'cocinas';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [
		'cocina'
	];

	public function restaurante()
	{
		return $this->belongsToMany('Restaurante');
	}

}