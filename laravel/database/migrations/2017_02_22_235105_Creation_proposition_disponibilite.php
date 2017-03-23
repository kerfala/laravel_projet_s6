<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationPropositionDisponibilite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposition_disponibilites', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::drop('proposition_disponibilite');
    }
}
