<?php

namespace App\Http\Controllers;

use App\Models\Categorie; 
use App\Models\SousCategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cours;
use App\Models\Ressource;


class SousCategoryController extends Controller
{
    public function index()
    {
        $categories = Categorie::all(); 
        return view('homemaster', compact('categories'));
    }
 

    public function create()
    {
        $scategories = SousCategorie::all();
        $categories =Categorie::all();
        return view('homescateg',compact('scategories','categories'));
    }
   
   

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'libelle' => 'required|max:255',
            'ID_cat' => 'required|exists:categories,id',
              
        ]);
       
        $scategorie = new SousCategorie;
        $scategorie->libelle = $validatedData ['libelle'];
        $scategorie->ID_cat = $validatedData['ID_cat'];
     
        $scategorie->save();
    
        return redirect()->route('home')->with('success', 'Sous Catégorie créée avec succès.');
    
    }
};