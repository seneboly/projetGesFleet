<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accidents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicule_id');
            $table->foreign('vehicule_id')
            ->references('id')
            ->on('vehicules')
            ->onDelete('cascade');
            $table->unsignedBigInteger('chauffeur_id');
            $table->foreign('chauffeur_id')
            ->references('id')
            ->on('chauffeurs')
            ->onDelete('cascade');
            $table->string('type_accident');
            $table->boolean('grave')->default(false);
            $table->boolean('avec_blessure_physique')
            ->default(false);
            $table->boolean('avec_degats_materiels')
            ->default(false);
            $table->text('description')->nullable();
            $table->text('commentaire')->nullable();

            $table->date('date_accident');
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
        Schema::dropIfExists('accidents');
    }
}
