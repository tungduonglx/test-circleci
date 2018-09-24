<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->string('client', 50)->nullable();
			$table->integer('id', true);
			$table->string('uuid');
			$table->integer('category_type_id')->nullable();
			$table->string('sku', 50)->nullable();
			$table->string('name')->nullable();
			$table->string('name_seo', 50)->nullable();
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
		Schema::drop('categories');
	}

}
