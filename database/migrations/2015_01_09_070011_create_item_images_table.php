<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
//		Schema::create('item_images',function(Blueprint $table)
//        {
//			$table->integer('item_id')->length(10)->unsigned();
//			$table->string('name')->unique();
//			$table->integer('is_primary')->default(0);
//			$table->timestamps();
//			$table->foreign('item_id')->references('id')->on('items')->onDelete('cascade')->onUpdate('cascade');
//		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
//		Schema::drop('item_images');
	}
}
