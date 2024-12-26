<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'etudiant_id',
        'didacticiel_id',
        'date_inscription',
    ];

    // Définir les relations avec d'autres modèles ici

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    public function didacticiel()
    {
        return $this->belongsTo(Didacticiel::class);
    }

    // Ajoutez d'autres relations et méthodes si nécessaire
}