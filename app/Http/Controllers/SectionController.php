<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Chapitre;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('sections.index', compact('sections'));
    }

    public function create()
    {
        $chapitres = Chapitre::all();
        return view('homesection', compact('chapitres'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'ordre' => 'required|integer',
            'chapitre_id' => 'required|exists:chapitres,ID_chap', // Validation de la relation
        ]);

        
        $section =new  Section;
        $section->titre = $data['titre'];
        $section->ordre = $data['ordre'];
        $section-> chapitre_id = $data['chapitre_id'];
        $section->save();

        return redirect()->route('home')->with('success', 'Section créée avec succès.');
    }
 

    public function show(Section $section)
    {
        return view('sections.show', compact('section'));
    }

    public function edit(Section $section)
    {
        $chapitres = Chapitre::all();
        return view('sections.edit', compact('section', 'chapitres'));
    }

    public function update(Request $request, Section $section)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'ordre' => 'required|integer',
            'chapitre_id' => 'required|exists:chapitres,ID_chap', // Validation de la relation
        ]);

        $section->update($data);

        return redirect()->route('sections.index')->with('success', 'Section mise à jour avec succès.');
    }

    public function destroy(Section $section)
    {
        $section->delete();
        return redirect()->route('sections.index')->with('success', 'Section supprimée avec succès.');
    }
}
