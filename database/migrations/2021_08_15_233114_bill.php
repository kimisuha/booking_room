<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function(Blueprint $table){
            $table->date('ngaygd');
            $table->id('makh')->autoIncrement();
            $table->dateTime('ngaybd');
            $table->dateTime('ngaykt');
            $table->integer('tongtien');
            $table->string('htthanhtoan');
            $table->boolean('ttthanhtoan');
        });

        //Schema::drop('bill');

        // Schema::dropIfExists('bill');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
    }
}
