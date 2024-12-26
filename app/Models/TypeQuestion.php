<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeQuestion extends Model
{
    use HasFactory;
    protected $fillable = ['libelle'];
     // Getters
     public function getTitreAttribute($value)
     {
         return ucfirst($value); // Exemple de transformation : première lettre en majuscule
     }
 
     // Setters
     public function setTitreAttribute($value)
     {
         $this->attributes['titre'] = strtolower($value); // Exemple de transformation : en minuscules
     }

}
