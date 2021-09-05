<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinfo', function(Blueprint $table){
            $table->id('makh')->autoIncrement();
            $table->string('hotenkh');
            $table->date('ngaysinhkh');
            $table->integer('socmkh');
            $table->integer('sdtkh');
            $table->string('emailkh');
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
