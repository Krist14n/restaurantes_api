<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dato extends Model {

	protected $table = 'datos';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [
		'plan',
		'nombre',
		'email',
		'telefono',
		'producto'
	];

}