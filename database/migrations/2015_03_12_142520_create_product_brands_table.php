<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductBrandsTable extends Migration
{
    public function up()
    {
        Schema::create('product_brands', function(Blueprint $table)
        {
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('brand_id')->unsigned();
            $table->text('product_brand_id');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }    
    
    public function down()
    {
        Schema::drop('product_brands');
    }
}
