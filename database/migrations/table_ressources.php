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
    Schema::create('ressources', function (Blueprint $table) {
        $table->id('ID_ress');
        $table->string('titre');
        $table->text('description');
        $table->string('url');
        $table->date('datePublication');
        $table->integer('nbvues');
        $table->string('type_ress');
        $table->unsignedBigInteger('ID_prof');
        $table->unsignedBigInteger('ID_cours');

        // Clé étrangère vers Cours
        $table->foreign('ID_cours')->references('ID_cours')->on('cours');

        $table->timestamps();
    });
}
public function down(): void
    {
        Schema::dropIfExists('ressources');
    }
};
