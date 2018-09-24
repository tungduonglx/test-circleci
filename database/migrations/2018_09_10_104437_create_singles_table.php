<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSinglesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('singles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('uuid', 50);
			$table->string('client', 50)->nullable();
			$table->integer('category_id')->nullable();
			$table->integer('single_type_id')->nullable();
			$table->string('sku', 50)->nullable()->comment('plucode');
			$table->string('name')->nullable()->comment('json');
			$table->string('name_seo', 50)->nullable();
			$table->string('image')->nullable()->comment('json');
			$table->text('description', 65535)->nullable()->comment('json');
			$table->boolean('piece')->nullable()->default(1);
			$table->boolean('hidden')->nullable()->default(0);
			$table->boolean('active')->nullable()->default(1);
			$table->timestamps();
			$table->dateTime('date_start')->nullable()->comment('not use');
			$table->dateTime('date_end')->nullable()->comment('not use');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('singles');
	}

}
