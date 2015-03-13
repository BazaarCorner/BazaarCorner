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
            $table->increments('id');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::drop('product_images');
    }

}
