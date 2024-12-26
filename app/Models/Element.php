<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;
    // Indique à Laravel qu'il n'y a pas de clé primaire explicite
    public $incrementing = false;
    protected $primaryKey = null;

    protected $fillable =['id_section', 'id_cours'];

    // Définissez les relations avec d'autres modèles si nécessaire
    public function section()
    {
        return $this->belongsTo(Section::class, 'id_section', 'id');
    }

    public function cours()
    {
        return $this->belongsTo(Cours::class, 'id_cours', 'ID_cours');
    }
}
