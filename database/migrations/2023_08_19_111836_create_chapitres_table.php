<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('chapitres', function (Blueprint $table) {
            $table->id('ID_chap');
            $table->string('titre');
            $table->text('description');
            $table->integer('ordre');
            $table->unsignedBigInteger('didacticiel_id');
            $table->foreign('didacticiel_id')->references('id')->on('didacticiels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chapitres');
    }
};
