<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SousCategorie;
use Illuminate\Validation\Rule;



class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['libelle'];
    protected $primaryKey = 'id';
    public function sousCategories()
    {
        return $this->hasMany(SousCategorie::class);
    }
  
}

