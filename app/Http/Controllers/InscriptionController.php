<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;

class InscriptionController extends Controller
{
    public function index()
    {
        // Afficher la liste de toutes les inscriptions
        $inscriptions = Inscription::all();
        return view('inscriptions.index', compact('inscriptions'));
    }

    public function create()
    {
        // Afficher le formulaire de création d'inscription
        return view('inscriptions.create');
    }

    public function store(Request $request)
    {
        // Valider et créer une nouvelle inscription
        Inscription::create($request->all());
        return redirect()->route('inscriptions.index');
    }

    public function show(Inscription $inscription)
    {
        // Afficher les détails de l'inscription spécifique
        return view('inscriptions.show', compact('inscription'));
    }

    public function edit(Inscription $inscription)
    {
        // Afficher le formulaire de modification de l'inscription
        return view('inscriptions.edit', compact('inscription'));
    }

    public function update(Request $request, Inscription $inscription)
    {
        // Valider et mettre à jour l'inscription spécifique
        $inscription->update($request->all());
        return redirect()->route('inscriptions.index');
    }

    public function destroy(Inscription $inscription)
    {
        // Supprimer l'inscription spécifique
        $inscription->delete();
        return redirect()->route('inscriptions.index');
    }
}