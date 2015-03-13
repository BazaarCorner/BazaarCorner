<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('shopping_categories', function(Blueprint $table)
        {
            $table->string('store_id');
            $table->integer('category_id')->unsigned();
            $table->text('bazzar_category_id');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::drop('shopping_categories');
    }
}
