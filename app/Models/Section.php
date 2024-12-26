<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'ordre'];

    // Getters
    public function getTitreAttribute($value)
    {
        return ucfirst($value);
    }

    // Setters
    public function setTitreAttribute($value)
    {
        $this->attributes['titre'] = strtolower($value);
    }
}

