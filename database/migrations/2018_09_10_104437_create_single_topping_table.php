<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSingleToppingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('single_topping', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('single_id')->nullable();
			$table->integer('topping_id')->nullable();
			$table->integer('default_quantity')->nullable()->default(1);
			$table->boolean('active')->nullable()->default(1);
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
		Schema::drop('single_topping');
	}

}
