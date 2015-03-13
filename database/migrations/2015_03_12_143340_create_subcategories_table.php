<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Subcategory name should be one (plural) and/or multi-word
 * 
 * @todo for discussion
 */
class CreateSubcategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('subcategories', function(Blueprint $table)
        {
            $table->bigIncrements('subcategory_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->text('short_description')->default("");            
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('subcategories');
    }
}
