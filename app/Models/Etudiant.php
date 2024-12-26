<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Etudiant extends Authenticatable
{
    protected $fillable = [
        
        'photo',
        'pays',
        'niveau_etudes',
        'ecole',
    ];
    //Création automatique de la date par défaut 
   
    // Définissez les règles de validation pour la création et la mise à jour d'un étudiant
    public static $rules = [
        'photo' => 'nullable', // Le champ photo n'est pas obligatoire
        'pays' => 'required|in:Maroc,France,Canada,États-Unis,Autre', // Exemple de validation pour le pays, ajustez la liste selon vos besoins
        'niveau_etudes' => 'required|in:Collège,Lycée,Bac+1,Bac+2,Bac+3,Bac+4,Bac+5,Autre',
        'ecole' => 'required',
    ];
    
    // Méthodes spécifiques aux étudiants
    public function user()
    {
            return $this->belongsTo(User::class, 'user_id');
    }

    public function didacticiels()
    {
        return $this->belongsToMany(Didacticiel::class, 'inscriptions', 'etudiant_id', 'didacticiel_id');
    }
    // Définissez les relations ou les méthodes spécifiques aux étudiants ici
}
