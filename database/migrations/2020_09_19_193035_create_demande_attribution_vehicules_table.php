<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeAttributionVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_attribution_vehicules', function (Blueprint $table) {
            $table->id();
            $table->boolean('attribue_avec_chaffeur')
            ->default(false);
            $table->string('status_demande');
            $table->unsignedBigInteger('acquisition_vehicules_id');
            $table->foreign('acquisition_vehicules_id')
            ->references('id')
            ->on('acquisition_vehicules')
            ->onDelete('cascade');
            $table->unsignedBigInteger('direction_entreprise_id');
            $table->foreign('direction_entreprise_id')
            ->references('id')
            ->on('direction_entreprises')
            ->onDelete('cascade');
            $table->unsignedBigInteger('chauffeur_id')->nullable();
            $table->foreign('chauffeur_id')
            ->references('id')
            ->on('chauffeurs')
            ->onDelete('cascade');
            $table->unsignedBigInteger('demandeur_attribution_vehicule_id');
            $table->foreign('demandeur_attribution_vehicule_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->unsignedBigInteger('receveur_demande_attribution_vehicule_id');
            $table->foreign('receveur_demande_attribution_vehicule_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->unsignedBigInteger('vehicule_id');
            $table->foreign('vehicule_id')
            ->references('id')
            ->on('vehicules')
            ->onDelete('cascade');
           
            
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
        Schema::dropIfExists('demande_attribution_vehicules');
    }
}
