<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanesTable extends Migration {

	public function up()
	{
		Schema::create('planes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('restaurante_id')->unsigned();
			$table->string('plan', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('planes');
	}
}