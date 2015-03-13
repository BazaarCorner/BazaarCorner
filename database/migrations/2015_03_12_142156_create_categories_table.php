<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Category name should be one word - singular
 */
class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function(Blueprint $table)
        {
            $table->bigIncrements('category_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->text('short_description')->default("");
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::drop('categories');
    }
}
