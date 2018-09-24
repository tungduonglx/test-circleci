<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComboGroupSinglesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('combo_group_singles', function(Blueprint $table)
		{
			$table->string('client', 50)->nullable();
			$table->integer('id', true);
			$table->string('uuid', 11)->nullable();
			$table->integer('combo_group_id')->nullable();
			$table->integer('single_id')->nullable();
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
		Schema::drop('combo_group_singles');
	}

}
