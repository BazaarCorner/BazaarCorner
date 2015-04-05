<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration
{
    public function up()
    {
        Schema::create('subscribers', function(Blueprint $table)
        {
            $table->bigIncrements('id')->unsigned();
            $table->string('email')->unique();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::drop('subscribers');
    }
}
