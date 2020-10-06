<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChauffeurDocument extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chauffeur_document', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chauffeur_id');
            $table->foreign('chauffeur_id')
            ->references('id')
            ->on('chauffeurs')
            ->onDelete('cascade');
            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id')
            ->references('id')
            ->on('documents')
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
        Schema::dropIfExists('chauffeur_document');
    }
}
