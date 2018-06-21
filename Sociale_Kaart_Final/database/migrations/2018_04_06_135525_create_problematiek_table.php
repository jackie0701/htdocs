<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblematiekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problematiek', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thema_id')->unsigned();
            $table->integer('organisatie_id')->unsigned();
            $table->foreign('thema_id')->references('thema_id')->on('thema');
            $table->foreign('organisatie_id')->references('organisatie_id')->on('organisaties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problematiek');
    }
}
