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
            $table->integer('main_category_id')->unsigned();
            $table->string('store_shopping_category_id');
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::drop('shopping_categories');
    }
}
