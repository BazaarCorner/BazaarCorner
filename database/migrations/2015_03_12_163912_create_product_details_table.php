<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @todo for discussion
 */
class CreateProductDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('product_details', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('product_details');
    }
}
