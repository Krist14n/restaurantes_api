<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('direcciones', function(Blueprint $table) {
			$table->foreign('restaurante_id')->references('id')->on('restaurantes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('cocinas', function(Blueprint $table) {
			$table->foreign('restaurante_id')->references('id')->on('restaurantes')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('planes', function(Blueprint $table) {
			$table->foreign('restaurante_id')->references('id')->on('restaurantes')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('zonas', function(Blueprint $table) {
			$table->foreign('restaurante_id')->references('id')->on('restaurantes')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('promociones', function(Blueprint $table) {
			$table->foreign('restaurante_id')->references('id')->on('restaurantes')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('direcciones', function(Blueprint $table) {
			$table->dropForeign('direcciones_restaurante_id_foreign');
		});
		Schema::table('cocinas', function(Blueprint $table) {
			$table->dropForeign('cocinas_restaurante_id_foreign');
		});
		Schema::table('planes', function(Blueprint $table) {
			$table->dropForeign('planes_restaurante_id_foreign');
		});
		Schema::table('zonas', function(Blueprint $table) {
			$table->dropForeign('zonas_restaurante_id_foreign');
		});
		Schema::table('promociones', function(Blueprint $table) {
			$table->dropForeign('promociones_restaurante_id_foreign');
		});
	}
}