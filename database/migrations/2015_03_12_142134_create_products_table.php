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
            $table->bigIncrements('id')->unsigned();
            $table->string('sku', 150)->unique();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('excerpt', 250)->default("");
            $table->text('description')->default("");
            $table->string('image')->default('product/no-image.jpg');
            $table->boolean('is_active')->default(false);
            $table->bigInteger('merchant_id')->unsigned()->default(0);
            $table->bigInteger('brand_id')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('products');
    }
}
