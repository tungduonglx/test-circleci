<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTempsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('temps', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('value')->nullable();
			$table->string('name')->nullable();
			$table->string('email')->nullable();
			$table->string('password')->nullable();
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
		Schema::drop('temps');
	}

}
