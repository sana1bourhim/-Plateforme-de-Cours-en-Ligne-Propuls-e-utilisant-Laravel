<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->unsignedBigInteger('id_section');
            $table->foreign('id_section')->references('id')->on('sections');
            $table->unsignedBigInteger('id_cours');
            $table->foreign('id_cours')->references('ID_cours')->on('cours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('element');
    }
};
