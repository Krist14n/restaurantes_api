<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromocionesTable extends Migration {

	public function up()
	{
		Schema::create('promociones', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('restaurante_id')->unsigned();
			$table->string('promocion', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('promociones');
	}
}