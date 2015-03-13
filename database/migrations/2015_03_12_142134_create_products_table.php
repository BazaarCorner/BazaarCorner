<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @todo Product Status - for review
 * @todo Product Images - for review
 * @todo Product Description - for review
 */
class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function(Blueprint $table)
        {
            $table->bigIncrements('product_id')->unsigned();
            $table->string('sku', 150);
            $table->string('name', 150);
            $table->string('slug', 250);
            $table->string('excerpt', 250)->default("");
            $table->text('short_description')->default("");
            $table->string('image')->default('product/no-image.jpg');
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('products');
    }
}
