<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('players', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('team');
			$table->integer('number');
			$table->string('position');
			$table->integer('goal');
			$table->string('club')->default(null);
			$table->timestamps();
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
		Schema::drop('players');
	}

}
