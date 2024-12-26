<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Professeur extends Authenticatable
{
    protected $fillable = [
        'photo',
        'pays',
        'télé',
        'siteweb',
        'linkidn',
        'facebook',
    ];
    public static $rules = [
        'photo' => 'nullable', // Le champ photo n'est pas obligatoire
        'pays' => 'required|in:Maroc,France,Canada,États-Unis,Autre',
        'télé' => 'required',
        'siteweb' => 'nullable',
        'linkidn' => 'required',
        'facebook' => 'required',
    ];

    // Méthodes spécifiques aux professeurs

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    // Définissez les relations ou les méthodes spécifiques aux professeurs ici
}


