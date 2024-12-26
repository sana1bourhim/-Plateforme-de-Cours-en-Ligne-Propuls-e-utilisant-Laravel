<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->integer('ordre');
            $table->unsignedBigInteger('chapitre_id');
            $table->timestamps();

            // Ajouter la contrainte de clé étrangère
            $table->foreign('chapitre_id')->references('ID_chap')->on('chapitres')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sections');
    }
};
