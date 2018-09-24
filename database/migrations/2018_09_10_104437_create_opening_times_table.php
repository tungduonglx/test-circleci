<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpeningTimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opening_times', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('uuid', 50)->nullable();
			$table->string('day', 30)->nullable();
			$table->time('opening')->nullable();
			$table->time('closing')->nullable();
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
		Schema::drop('opening_times');
	}

}
