<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @todo for discussion
 */
class CreateProductImagesTable extends Migration
{
    public function up()
    {
        Schema::create('product_images', function(Blueprint $table)
        {
            $table->integer('product_id')->length(10)->unsigned();
			$table->string('name')->unique();
			$table->integer('is_primary')->default(0);
			$table->timestamps();
//			$table->foreign('id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }
    
    public function down()
    {
        Schema::drop('product_images');
    }

}
