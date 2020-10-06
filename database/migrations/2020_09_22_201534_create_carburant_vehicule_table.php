<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarburantVehiculeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carburant_vehicule', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carburant_id');
            $table->foreign('carburant_id')
            ->references('id')
            ->on('carburants')
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
        Schema::dropIfExists('carburant_vehicule');
    }
}
