<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->enum('type', ['local', 'vimeo', 'youtube']);
            $table->string('url');
            $table->date('datePublication');
            $table->unsignedBigInteger('id_ressource'); // Ajoutez la colonne id_ressource
            $table->foreign('id_ressource')->references('ID_ress')->on('ressources'); // Ajoutez la clé étrangère
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('videos');
    }
};
