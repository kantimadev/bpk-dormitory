<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDormRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dormRecords', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('roomName')->unique();
			$table->string('flatName');
			$table->integer('flatNumber');
			$table->string('flatType');
			$table->integer('roomNumber');
			$table->integer('floor');
			$table->boolean('isRoomAvailable');
			$table->string('orderNumber');
			$table->integer('empID');
			$table->string('name');
			$table->string('identNumber');
			$table->string('empDepartment');
			$table->boolean('isRoomOwner');
			$table->boolean('isRetired');
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
		Schema::drop('dormRecords');
	}

}
