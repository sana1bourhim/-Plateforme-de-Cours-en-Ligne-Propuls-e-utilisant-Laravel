<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->id('ID_cours');
            $table->string('titre');
            $table->text('description');
            $table->text('contenu');
            $table->string('etat');
            $table->date ('datePublication');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cours');
    }
    
};


