<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisatiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisaties', function (Blueprint $table) {
            $table->increments('organisatie_id');
            $table->string('naam');
            $table->string('adres');
            $table->string('contactpersoon');
            $table->string('gemeente');
            $table->string('telefoonnummer');
            $table->string('beschrijving', 1000)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisaties');
    }
}
