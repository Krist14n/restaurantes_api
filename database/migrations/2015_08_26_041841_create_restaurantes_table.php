<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRestaurantesTable extends Migration {

	public function up()
	{
		Schema::create('restaurantes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre', 255);
			$table->text('descripcion');
			$table->string('calificacion_comida', 255)->nullable();
			$table->string('calificacion_ambiente', 255)->nullable();
			$table->string('calificacion_servicio', 255)->nullable();
			$table->string('ideal_para', 255)->nullable();
			$table->string('marco_recomienda', 255)->nullable();
			$table->string('precio_promedio', 255);
			$table->string('foto', 255);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('restaurantes');
	}
}