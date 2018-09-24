<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCombosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('combos', function(Blueprint $table)
		{
			$table->string('client', 50)->nullable();
			$table->integer('id', true);
			$table->integer('category_id')->nullable();
			$table->string('sku', 50)->nullable();
			$table->string('uuid', 50)->nullable();
			$table->string('name')->nullable();
			$table->string('name_seo', 50)->nullable();
			$table->string('image')->nullable();
			$table->text('description', 65535)->nullable();
			$table->boolean('hidden')->nullable()->default(0);
			$table->boolean('active')->nullable()->default(1);
			$table->dateTime('date_start')->nullable();
			$table->dateTime('date_end')->nullable();
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
		Schema::drop('combos');
	}

}
