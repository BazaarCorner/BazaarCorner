<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @todo for discussion
 */
class CreateProductAttributesTable extends Migration
{    
    public function up()
    {
        Schema::create('product_attributes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::drop('product_attributes');
    }
}
