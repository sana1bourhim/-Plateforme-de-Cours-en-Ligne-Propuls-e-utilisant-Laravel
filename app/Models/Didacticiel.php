<?php

namespace App\Models; 
use App\Models\Chapitre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Didacticiel extends Model
{
    protected $fillable = [
        'titre', 'description', 'contenu', 'etat', 'estgratuit' => 0, 'datePublication'
    ];

    public function sousCategorie()
    {
        return $this->belongsTo(SousCategorie::class);
    }

    
    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'inscriptions', 'didacticiel_id', 'etudiant_id');
    }
    public function chapters()
    {
        return $this->hasMany(Chapitre::class);
    }
}
