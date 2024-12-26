<?php

namespace App\Http\Controllers;
use App\Models\SousCategorie;

use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\Didacticiel; // Assurez-vous d'importer votre modèle Didacticiel

class DidacticielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $didacticiels = Didacticiel::all(); // Récupérez tous les didacticiels depuis la base de données
        return view('homeStudent', ['didacticiels' => $didacticiels]);
    }
    public function DidacbyId($id)
    {
        // Récupérer les didacticiels gratuits depuis la base de données
        $co=Cours::first();
        $didacticiel = Didacticiel::findOrFail($id);
        $chapters = $didacticiel->chapters;

        return view('descriptioncourse', compact('didacticiel','chapters','co'));
    }
    public function viewe($id){
        $co=Cours::first();
        $didacticiel = Didacticiel::findOrFail($id);
        return view('viewdidac',compact('didacticiel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sousCategories = SousCategorie::all();
        return view('homedidacticiel',compact('sousCategories'));
    }
    
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'etat' => 'required|string',
           
            'sous_categorie_id' => 'required|exists:sous_categories,id', // Validation de la sous-catégorie
        ]);
    
        $didacticiel =new  Didacticiel;
        $didacticiel->titre = $data['titre'];
        $didacticiel->description= $data['description'];
        $didacticiel->etat = $data['etat'];
        
        $didacticiel-> sous_categorie_id = $data['sous_categorie_id']; 
        if ($request->has('estgratuit')) {
            $didacticiel->estgratuit = true; // Mettre à 1 si la case est cochée
        }// Attribuer la sous-catégorie
        $didacticiel->save();
       
    
        return redirect()->route('home')->with('success', 'Didacticiel créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $didacticiel = Didacticiel::findOrFail($id);
        return view('didacticiels.show', ['didacticiel' => $didacticiel]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $didacticiel = Didacticiel::findOrFail($id);
        return view('didacticiels.edit', ['didacticiel' => $didacticiel]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'etat' => 'required|string',
            'est_gratuit' => 'required|boolean',
            
        ]);

        $didacticiel = Didacticiel::findOrFail($id);
        $didacticiel->update($data);

        return redirect()->route('didacticiels.show', ['id' => $didacticiel->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $didacticiel = Didacticiel::findOrFail($id);
        $didacticiel->delete();

        return redirect()->route('didacticiels.index');
    }
}
