<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SousCategorie;
use SousCategorie as GlobalSousCategorie;

class SousCategorieController extends Controller
{
    public function index()
    {
        $sousCategories = SousCategorie::all();
        return view('sous_categories.index', compact('sousCategories'));
    }

    public function create()
    {
        return view('sous_categories.create');
    }

    public function store(Request $request)
    {
        SousCategorie::create($request->all());
        return redirect()->route('sous-categories.index');
    }

    // Ajoutez les autres méthodes nécessaires pour afficher, mettre à jour et supprimer les sous-catégories
}
