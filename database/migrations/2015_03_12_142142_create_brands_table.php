<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @todo brand image, description, status
 */
class CreateBrandsTable extends Migration
{
    public function up()
    {
        Schema::create('brands', function(Blueprint $table)
        {
            $table->bigIncrements('brand_id')->unsigned();
            $table->string('name', 150);
            $table->string('slug', 250)->default("");
            $table->string('image')->default("brand/no-image.jpg");
            $table->text('description')->default("");
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('brands');
    }
}
