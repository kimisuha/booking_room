<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clhistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clhistory', function(Blueprint $table){
            $table->id('stt')->autoIncrement();
            $table->integer('makh')->nullable(false);
            $table->string('tenkh')->nullable(false);
            $table->integer('maphong')->nullable(false);
            $table->string('tenphong')->nullable(false);
            $table->integer('sophong')->nullable(false);
            $table->date('ngaygd')->nullable(false);
            $table->date('ngaybd')->nullable(false);
            $table->integer('tgsd')->nullable(false);
            $table->integer('tongtien')->nullable(false);
            $table->string('httt')->nullable(false); 
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
