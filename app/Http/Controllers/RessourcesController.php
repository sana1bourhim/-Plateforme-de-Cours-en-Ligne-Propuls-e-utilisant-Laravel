<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Ressource;
use App\Models\Video;

class RessourcesController extends Controller
{
    public function ajouterRessource(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:video,document',
            'url' => 'required|url',
        ]);

        // Créer la nouvelle ressource
        Ressource::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'type' => $request->type,
            'url' => $request->url,
            // Autres champs de la ressource
        ]);
       

        // Rediriger l'utilisateur vers une page de confirmation
        return redirect()->route('confirmation')->with('success', 'La ressource a été ajoutée avec succès.');
    }
    public function ajoutervideo(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video' => 'required|mimes:mp4,avi,mov,wmv|max:2048', // Exemple de validation pour les fichiers vidéo
        ]);
    
        // Stockez la vidéo dans le système de fichiers
        $videoPath = $request->file('video')->store('videos');
    
        // Créez une nouvelle entrée dans la table des vidéos
        Video ::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'video_path' => $videoPath,
            'user_id' => auth()->user()->id, // Associez la vidéo à l'utilisateur connecté
        ]);
        return redirect()->route('confirmation')->with('success', 'La ressource a été ajoutée avec succès.');
    }
    
}
