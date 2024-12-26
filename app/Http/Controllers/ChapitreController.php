<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapitre;
use App\Models\Didacticiel;

class ChapitreController extends Controller
{
    public function index()
    {
        $chapitres = Chapitre::all();
        return view('homechapitre', compact('chapitres'));
    }

    public function create()
    {
        $didacticiels = Didacticiel::all();
        return view('homechapitre', compact('didacticiels'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'ordre' => 'required|integer',
            'didacticiel_id' => 'required|exists:didacticiels,id', // Validation de la relation
        ]);

        $chapitre =new  Chapitre;
        $chapitre->titre = $data['titre'];
        $chapitre->description= $data['description'];
        $chapitre->ordre = $data['ordre'];
        $chapitre->didacticiel_id = $data['didacticiel_id'];
        $chapitre->save();
        return redirect()->route('home')->with('success', 'Chapitre créé avec succès.');
    }
   
    public function show(Chapitre $chapitre)
    {
        return view('chapitres.show', compact('chapitre'));
    }

    public function edit(Chapitre $chapitre)
    {
        $didacticiels = Didacticiel::all();
        return view('chapitres.edit', compact('chapitre', 'didacticiels'));
    }

    public function update(Request $request, Chapitre $chapitre)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'ordre' => 'required|integer',
            'ID_didac' => 'required|exists:didacticiels,ID_didac', // Validation de la relation
        ]);

        $chapitre->update($data);

        return redirect()->route('chapitres.index')->with('success', 'Chapitre mis à jour avec succès.');
    }

    public function destroy(Chapitre $chapitre)
    {
        $chapitre->delete();
        return redirect()->route('chapitres.index')->with('success', 'Chapitre supprimé avec succès.');
    }
}
