<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBazaarCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('bazaar_categories', function(Blueprint $table)
        {
            $table->string('store_id')->unique();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->mediumText('long_description')->default("");
            $table->text('short_description')->default("");
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('bazaar_categories');
    }
}
