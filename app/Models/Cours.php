<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Documents;

class Cours extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID_cours';
    protected $fillable = ['titre', 'description', 'contenu', 'etat', 'datePublication'];

    
   
    
    // Course.php
    public function documents()
    {
        return $this->hasMany(Documents::class);
    }
    public function ressources()
    {
    return $this->hasMany(Ressources::class, 'ID_cours', 'ID_cours');
    }
    public function sections()
    {
        return $this->belongsToMany(Section::class, 'course_section', 'cours_id', 'section_id');
    }
    public function categorie()
{
    return $this->belongsTo(Categorie::class, 'categorie_id');
}


}

