<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\Categorie;
use App\Models\Documents;
use App\Models\Ressource;
use App\Models\Section;
use App\Models\Element;
use Illuminate\Support\Facades\Auth;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
public function show($nom_du_fichier)
{
    // Assurez-vous que $nom_du_fichier est un nom de fichier valide
    $chemin_fichier = storage_path ("app/public/documents/$nom_du_fichier");

    // Vérifiez si le fichier existe
    if (file_exists($chemin_fichier)) {
        // Retournez le contenu du fichier en tant que réponse HTTP
        return response()->file($chemin_fichier);
    }

    // Si le fichier n'existe pas, vous pouvez renvoyer une réponse 404
    abort(404);
}}