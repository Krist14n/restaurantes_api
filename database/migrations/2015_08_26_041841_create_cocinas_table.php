<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCocinasTable extends Migration {

	public function up()
	{
		Schema::create('cocinas', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('restaurante_id')->unsigned();
			$table->string('cocina', 255)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('cocinas');
	}
}