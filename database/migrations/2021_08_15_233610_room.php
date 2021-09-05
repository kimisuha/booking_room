<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Room extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function(Blueprint $table){
            $table->id('maphong')->autoIncrement();
            $table->string('tenphong');
            $table->integer('sophong');
            $table->string('tinhtrang');
            $table->string('loai');
            $table->integer('gia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
