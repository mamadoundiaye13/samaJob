<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeposeurAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposeur_annonces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('situation_professionnelle');
            $table->string('nom_entreprise');
            $table->string('nom_employeur');
            $table->string('prenom_employeur');
            $table->integer('telephone');
            $table->string('adresse');
            $table->integer('code_postal');
            $table->string('ville');
            $table->string('pays');
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
        Schema::dropIfExists('deposeur_annonces');
    }
}
