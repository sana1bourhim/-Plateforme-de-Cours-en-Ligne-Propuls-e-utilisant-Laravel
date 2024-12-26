<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;

class SousCategorie extends Model
{
    use HasFactory;
    protected $table = 'sous_categories';
   // protected $table = 'sous_categories'; // Nom de la table dans la base de données

   // protected $primaryKey = 'ID_sous'; // Clé primaire de la table

    protected $fillable = ['libelle', 'ID_cat']; // Colonnes que vous souhaitez pouvoir remplir massivement

    // Relation avec la catégorie parente
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'ID_cat');
    }
}
