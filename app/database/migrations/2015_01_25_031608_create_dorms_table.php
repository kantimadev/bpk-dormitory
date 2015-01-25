<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDormsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dorms', function(Blueprint $table)
		{
			$table->string('roomName')->unique();
			$table->string('flatName');
			$table->integer('flatNumber');
			$table->string('flatType');
			$table->integer('roomNumber');
			$table->integer('floor');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dorms');
	}

}
