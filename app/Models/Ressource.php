<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    protected $fillable = [
        'titre', 'description', 'type_ress', 'datePublication', 'ID_prof', 'ID_cours',
    ];

    public function course()
    {
        return $this->belongsTo(Cours::class, 'ID_cours', 'ID_cours');
    }
}