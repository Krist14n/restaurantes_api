<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionesInternacionalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('direcciones_internacionales', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('restaurante_internacional_id')->unsigned();
			$table->string('direccion', 255)->nullable();
			$table->string('latitud', 255)->nullable();
			$table->string('longitud', 255)->nullable();
			$table->string('telefonos', 255);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('direcciones_internacionales');

	}

}
