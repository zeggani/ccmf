<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id_clients');
            $table->string('nom');
            $table->string('prenom');
            $table->string('nomjf')->nullable();
            $table->string('sexe')->nullable();
            $table->string('situationfamil')->nullable();
            $table->date('datenaiss')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('tel2')->nullable();
            $table->string('tel3')->nullable();
            $table->string('adresse')->nullable();
            $table->string('cp_client')->nullable();
            $table->string('ville')->nullable();
            $table->string('regime')->nullable();
            $table->string('nss')->nullable();
            $table->string('noa')->nullable();
            $table->string('civilite')->nullable();
            $table->string('csp')->nullable();
            $table->string('commentaire')->nullable();
            $table->date('datecreation')->nullable();
            $table->datetime('lheure_client')->nullable();
            $table->date('echeance_resilier')->nullable();
            $table->string('compagnie_resilier')->nullable();
            $table->string('Npolice_resilier')->nullable();
            $table->string('adresse_resilier')->nullable();
            $table->string('cp_resilier')->nullable();
            $table->string('ville_resilier')->nullable();
            $table->string('tel_resilier')->nullable();
            $table->string('aunom_resilier')->nullable();
            $table->string('statutfiche')->nullable();
            $table->string('IBAN')->nullable();
            $table->string('banque')->nullable();
            $table->string('bicbanque')->nullable();
            $table->string('adresseBanque')->nullable();
            $table->string('cpbanque')->nullable();
            $table->string('villebanque')->nullable();
            $table->string('createby')->nullable();
            // conjoint
            $table->string('nom_conjoint')->nullable();
            $table->string('prenom_conjoint')->nullable();
            $table->string('nomjf_conjoint')->nullable();
            $table->string('sexe_conjoint')->nullable();
            $table->date('datenaiss_conjoint')->nullable();
            $table->string('email_conjoint')->nullable();
            $table->string('tel_conjoint')->nullable();
            $table->string('tel2_conjoint')->nullable();
            $table->string('tel3_conjoint')->nullable();
            $table->string('adresse_conjoint')->nullable();
            $table->string('cp_conjoint')->nullable();
            $table->string('ville_conjoint')->nullable();
            $table->string('regime_conjoint')->nullable();
            $table->string('nss_conjoint')->nullable();
            $table->string('noa_conjoint')->nullable();
            $table->string('civilite_conjoint')->nullable();
            $table->string('csp_conjoint')->nullable();
            // Enfants
            $table->string('nom_enfants')->nullable();
            $table->string("prenom_enfants")->nullable();
            $table->string("sexe_enfant")->nullable();
            $table->date("datenaiss_enfant")->nullable();
            $table->string("ayantdroit_enfant")->nullable();
            $table->string("nss_enfant")->nullable();


            $table->unsignedInteger('id_users')->nullable();
            $table->foreign('id_users')->references('id_users')->on('users');
            $table->string("updateBY")->nullable();

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
        Schema::dropIfExists('clients');
    }
}
