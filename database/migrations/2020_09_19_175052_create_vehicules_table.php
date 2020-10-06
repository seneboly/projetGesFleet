<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->double('capacite_reservoir');
            $table->string('numero_chassis')->nullable();
            $table->unsignedBigInteger('marque_vehicules_id');
            $table->foreign('marque_vehicules_id')
            ->references('id')
            ->on('marque_vehicules')
            ->onDelete('cascade');
            $table->unsignedBigInteger('modele_vehicule_id');
            $table->foreign('modele_vehicule_id')
            ->references('id')
            ->on('modele_vehicules')
            ->onDelete('cascade');
            $table->unsignedBigInteger('chauffeur_id');
            $table->foreign('chauffeur_id')
            ->references('id')
            ->on('chauffeurs')
            ->onDelete('cascade');
            $table->unsignedBigInteger('direction_entreprise_id');
            $table->foreign('direction_entreprise_id')
            ->references('id')
            ->on('direction_entreprises')
            ->onDelete('cascade');
            $table->unsignedBigInteger('concessionnaire_vehicules_id');
            $table->foreign('concessionnaire_vehicules_id')
            ->references('id')
            ->on('concessionnaire_vehicules')
            ->onDelete('cascade');
//typ_acquision
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
        Schema::dropIfExists('vehicules');
    }
}
