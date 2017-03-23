<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationDisponibilite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('disponibilites', function (Blueprint $table) {
            $table->increments('id_dispo');
            $table->string('jour');
            $table->time('heureDebut');
            $table->time('heureFin');
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
        Schema::drop('disponibilite');
    }
}
