<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @todo for discussion
 */
class CreateProductPricingsTable extends Migration
{    
    public function up()
    {
        Schema::create('product_pricings', function(Blueprint $table)
        {
            $table->bigIncrements('product_pricing_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('product_pricings');
    }
}
