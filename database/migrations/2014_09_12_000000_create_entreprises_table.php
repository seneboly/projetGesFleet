<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom_entreprise');
            $table->string('logo')->nullable();
            $table->unsignedBigInteger('code_entreprise');
            $table->date('date_creation')->nullable();
            $table->unsignedBigInteger('chiffre_affaire')->nullable();
            $table->unsignedBigInteger('nombre_collaborateurs')->nullable();
            $table->unsignedBigInteger('package_id');
            $table->foreign('package_id')
                  ->references('id')
                  ->on('packages')
                  ->onDelete('cascade');
            $table->string('forme_juridique')->nullable();
            $table->date('debut_souscription');
            $table->date('fin_souscription');
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('entreprises');
    }
}
