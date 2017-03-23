<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableIntermediaire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant_horaire', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('etudiant_id')->unsigned()->index();
            $table->integer('horaire_id')->unsigned()->index();
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            $table->foreign('horaire_id')->references('id_horaire')->on('horaires')->onDelete('cascade');

           
        });
        Schema::create('etudiant_propostion_disponibilite', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('etudiant_id')->unsigned()->index();
            $table->integer('proposition_id')->unsigned()->index();
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            $table->foreign('proposition_id')->references('id')->on('proposition_disponibilites')->onDelete('cascade');

           
        });
        Schema::create('contrat_disponibilite', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contrat_id')->unsigned()->index();
            $table->integer('disponibilite_id')->unsigned()->index();
            $table->foreign('contrat_id')->references('id')->on('contrats')->onDelete('cascade');
            $table->foreign('disponibilite_id')->references('id_dispo')->on('disponibilites')->onDelete('cascade');
           
        });
         Schema::table('conges', function (Blueprint $table) {
            $table->integer('utilisateur_id')->unsigned()->index();
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('etudiant_horaire');
    }
}
