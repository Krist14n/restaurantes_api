<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantesInternacionalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('restaurantes_internacionales', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('ciudad_id')->unsigned();
			$table->string('nombre', 255)->default('NULL');
			$table->string('tipo_comida', 255)->default('NULL');
			$table->string('foto', 255);
			$table->string('descripcion', 255)->default('NULL');
			$table->string('calificacion_comida', 255)->default('NULL');
			$table->string('calificacion_ambiente', 255)->default('NULL');
			$table->string('calificacion_servicio', 255)->default('NULL');
			$table->string('ideal_para', 255)->default('NULL');
			$table->string('recomendacion_mb', 255)->default('NULL');
			$table->string('web', 255)->default('NULL');
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
		Schema::drop('restaurantes_internacionales');
	}

}
