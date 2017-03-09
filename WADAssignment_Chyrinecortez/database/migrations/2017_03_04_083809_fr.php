<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('frs', function (Blueprint $table){
            $table->increments('id');
            $table->string('Name',25);
            $table->integer('Age');
            $table->string('Course');
            $table->integer('StudentNumber');
            $table->string('Email',30);
            $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frs');
    }
}
