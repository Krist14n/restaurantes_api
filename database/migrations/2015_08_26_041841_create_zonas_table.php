<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZonasTable extends Migration {

	public function up()
	{
		Schema::create('zonas', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('restaurante_id')->unsigned();
			$table->string('zona', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('zonas');
	}
}