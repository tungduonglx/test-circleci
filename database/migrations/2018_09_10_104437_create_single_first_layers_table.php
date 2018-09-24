<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSingleFirstLayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('single_first_layers', function(Blueprint $table)
		{
			$table->string('client', 50)->nullable();
			$table->integer('id', true);
			$table->integer('single_id')->nullable();
			$table->string('sku', 50)->nullable();
			$table->string('uuid', 50)->nullable();
			$table->string('name')->nullable();
			$table->string('image')->nullable();
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
		Schema::drop('single_first_layers');
	}

}
