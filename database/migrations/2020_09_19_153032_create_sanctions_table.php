<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanctions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chauffeur_id');
            $table->foreign('chauffeur_id')
            ->references('id')
            ->on('chauffeurs')
            ->onDelete('cascade');
            $table->string('libelle_saction');
            $table->boolean('avec_duree_suspension')->default(false);
            $table->date('debut_suspension')->nullable();
            $table->date('fin_suspension')->nullable();
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
        Schema::dropIfExists('sanctions');
    }
}
