<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @todo for discussion
 */
class CreateProductStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('product_statuses', function(Blueprint $table)
        {
            $table->increments('id');
//            $table->enum('sku_status', ['pending', 'on-review', 'approved', 'denied'])->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('product_statuses');
    }
}
