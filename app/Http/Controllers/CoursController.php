<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\Categorie;
use App\Models\Documents;
use App\Models\Element;
use App\Models\Ressource;
use App\Models\Section;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class CoursController extends Controller
{
 // CoursController.php
public function create()
{
    $sections = Section::all();
    return view('homecourse',compact('sections'));
}

public function store(Request $request)
{
    // Validation des données soumises par le formulaire
    $validatedData = $request->validate([
        'titre' => 'required',
        'description' => 'required',
        'contenu' => 'required',
        'etat' => 'required',
        'datePublication'=> 'required',
        'id_section' => 'required|exists:sections,id',
        'type_ress' => 'required|in:document,video', // Assurez-vous que le champ 'type_ress' est présent dans le formulaire
    // Ajoutez d'autres règles de validation au besoin
    ]);
    // Création d'un nouvel objet Course avec les données validées
    $course = new Cours([
        'titre' => $validatedData['titre'],
        'description' => $validatedData['description'],
        'contenu' => $validatedData['contenu'],
        'etat' => $validatedData['etat'],
        'datePublication '=> $validatedData['datePublication'],
    // N'oubliez pas d'ajouter d'autres champs si nécessaire
    ]);
     // Enregistrez d'abord le cours
     $course = new Cours;
     $course->titre = $validatedData['titre'];
     $course->description = $validatedData['description'];
     $course->etat = $validatedData ['etat'];
     $course->contenu = $validatedData['contenu'];
     $course->datePublication = $validatedData['datePublication'];
     $course->save();
     // Enregistrez d'abord le cours
     
 /////////////////////////////////////
 if ($validatedData['type_ress'] === 'video') {
    // Traitement si c'est une vidéo
    if ($request->hasFile('contenu')) {
        $video = $request->file('contenu');
        $videoType = $video->getClientOriginalExtension(); // Obtenez l'extension du fichier
        
        // Générez un nom unique pour la vidéo
        $videoName = uniqid() . '.' . $videoType;
        
        
        // Enregistrez le fichier vidéo dans le stockage (par exemple, le dossier 'videos')
        $video->storeAs('public/videos', $videoName);
           // Créez d'abord une nouvelle ressource
        $ressource = new Ressource; // Assurez-vous que le modèle et la table correspondent
        $ressource->titre = $validatedData['titre'];
        $ressource->description = $validatedData['description'];
        $ressource->datePublication = $validatedData['datePublication'];
        $ressource->url = 'votre-valeur-de-url';
        $ressource->type_ress = $videoType;
        $ressource->ID_prof = auth()->user()->id; // Remplacez cela par l'ID du professeur approprié
        $ressource->ID_cours = $course->ID_cours; // Assurez-vous d'avoir l'ID du cours approprié
        $ressource->nbvues = 0;
        $ressource->save();
        
        // Créez une nouvelle entrée vidéo dans la table 'videos'
        $newVideo = new Video;
        $newVideo->titre = $validatedData['titre'];
        $newVideo->description = $validatedData['description'];
        // Assurez-vous que $validatedData['type_ress'] est correctement mappé aux valeurs de 'type'
        if ($validatedData['type_ress'] === 'video') {
            $newVideo->type = 'local'; // Mappez 'video' à 'local' ou à la valeur attendue
        } else {
            // Gérez les autres cas de correspondance si nécessaire
        }
        $newVideo->datePublication = $validatedData['datePublication'];
        $newVideo->url = 'URL_DE_VOTRE_VIDEO'; 
        $newVideo->id_ressource = $ressource->id; // ID du cours
        $newVideo->save();
    }
} elseif ($validatedData['type_ress'] === 'document') {
    $file = $request->file('contenu');
    $fileType = $file->getClientOriginalExtension(); // Obtenez l'extension du fichier
    // Générez un nom unique pour le fichier
    $fileName = uniqid() . '.' . $fileType;
    // Enregistrez le fichier dans le stockage de Laravel (par exemple, le dossier 'public')
    $file->storeAs('public', $fileName);
    // Créez d'abord une nouvelle ressource
    $ressource = new Ressource; // Assurez-vous que le modèle et la table correspondent
    $ressource->titre = $validatedData['titre'];
    $ressource->description = $validatedData['description'];
    $ressource->datePublication = $validatedData['datePublication'];
    $ressource->url = 'votre-valeur-de-url';
    $ressource->type_ress = $fileType;
    $ressource->ID_prof = auth()->user()->id; // Remplacez cela par l'ID du professeur approprié
    $ressource->ID_cours = $course->ID_cours; // Assurez-vous d'avoir l'ID du cours approprié
    $ressource->nbvues = 0;
    $ressource->save();
    // Ensuite, liez le document à cette ressource
    $document = new Documents;
    $document->titre = $validatedData['titre'];
    $document->description = $validatedData['description'];
    $document->type = $fileType;
    $document->datePublication = $validatedData['datePublication'];
    $document->ressource_id = $ressource->id; // Utilisez l'ID de la ressource
    // $fileName; // Stockez le nom du fichier
    $document->save();
}
$element = new Element([
    'id_section' => $validatedData['id_section'],
    'id_cours' => $course->ID_cours,
]);


$element->save();
// Redirection vers une page appropriée après la création du cours
return redirect()->route('home')->with('success', 'Cours créé avec succès.');
}}
/* /*
     if ($request->hasFile('contenu')) {
         $file = $request->file('contenu');
         $fileType = $file->getClientOriginalExtension(); // Obtenez l'extension du fichier
 
         // Générez un nom unique pour le fichier
         $fileName = uniqid() . '.' . $fileType;
 
         // Enregistrez le fichier dans le stockage de Laravel (par exemple, le dossier 'public')
         $file->storeAs('public', $fileName);
 
         // Créez d'abord une nouvelle ressource
         $ressource = new Ressource; // Assurez-vous que le modèle et la table correspondent
         $ressource->titre = $validatedData['titre'];
         $ressource->description = $validatedData['description'];
         $ressource->datePublication = $validatedData['datePublication'];
         $ressource->url = 'votre-valeur-de-url';
         $ressource->type_ress = $fileType;
         $ressource->ID_prof = auth()->user()->id; // Remplacez cela par l'ID du professeur approprié
         $ressource->ID_cours = $course->id; // Assurez-vous d'avoir l'ID du cours approprié
         $ressource->nbvues = 0;
         $ressource->save();
 
         // Ensuite, liez le document à cette ressource
         $document = new Documents;
         $document->titre = $validatedData['titre'];
         $document->description = $validatedData['description'];
         $document->type = $fileType;
         $document->datePublication = $validatedData['datePublication'];
         $document->ressource_id = $ressource->id; // Utilisez l'ID de la ressource
         // $fileName; // Stockez le nom du fichier
         $document->save();
     }
 
     // Redirection vers une page appropriée après la création du cours
     return redirect()->route('home')->with('success', 'Cours créé avec succès.');
 }} */
 
 
 
 
 
 