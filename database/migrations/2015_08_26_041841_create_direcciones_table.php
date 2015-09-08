<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDireccionesTable extends Migration {

	public function up()
	{
		Schema::create('direcciones', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('restaurante_id')->unsigned();
			$table->string('direccion', 255)->nullable();
			$table->string('latitud', 255)->nullable();
			$table->string('longitud', 255)->nullable();
			$table->string('telefonos', 255);
			$table->string('web', 255)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('direcciones');
	}
}