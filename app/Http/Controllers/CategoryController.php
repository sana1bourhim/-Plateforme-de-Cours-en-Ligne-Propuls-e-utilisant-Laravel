<?php

namespace App\Http\Controllers;

use App\Models\Categorie; 
use App\Models\SousCategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cours;
use Illuminate\Support\Facades\Storage;
use App\Models\Documents;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
use App\Models\Ressource;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $courses= Cours::all(); 
        return view('homemaster', compact('categories','courses'));
    }
    public function view($ID_cours){
        $co= Cours::find($ID_cours);
        return view('viewcours',compact('co'));
    }
    public function home()
{
    $categories = Categorie::all();
    $Courses = Cours::all();
    $Documents = Documents::all();
    $Videos = Video::all();
    return view('home', compact('categories','Courses','Documents','Videos'));
}

    public function create()
    {
        $categories = Categorie::all();
        $courses= Cours::all();
        return view('homecateg',compact('categories','courses'));
    }
    public function updatee($id)
    {
        $categories = Categorie::all();
        $category = Categorie::find($id); 
        return view('update',compact('categories','category'));
    }
    public function redirectToHomeCategory(Request $request)
    {
        // Vous pouvez ajouter une logique spécifique ici si nécessaire
        return Redirect::route('homecategory');
    }
   

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'libelle' => 'required|max:255',
            
        ]);
    
        // Créer la nouvelle catégorie
        $categorie = new Categorie;
        $categorie->libelle = $validatedData['libelle'];
     
        $categorie->save();
    
        return redirect()->route('home')->with('success', 'Catégorie créée avec succès.');
    
    }
    public function destroy($id)
{
    $category = Categorie::find($id);

    if (!$category) {
        return redirect()->route('home')->with('Fail', 'La catégorie n\'existe pas');
    }

    

    

    // Supprimez toutes les occurrences dans les autres tables qui font référence à cette catégorie
    // Supposons que la colonne dans ces tables qui fait référence à la catégorie s'appelle 'categorie_id'
    DB::table('sous_categories')->where('ID_cat', $id)->delete();

    // Ensuite, supprimez la catégorie elle-même
    $category->delete();

    return redirect()->route('home')->with('Success', 'La catégorie a été supprimée avec succès.');
}


    public function update(Request $request, $id)
    {
        $category = Categorie::find($id);
    
        if (!$category) {
            // Gérer le cas où la catégorie n'est pas trouvée, par exemple, renvoyer une réponse d'erreur
            return redirect()->route('home')->with('Fail!', 'La catégorie n\'existe pas.');
        }
    
        
        $this->validate($request, [
            'libelle' => 'required|string|max:255', // Exemple de règle de validation pour le nom de la catégorie
            // Ajoutez d'autres règles de validation au besoin
        ]);
    
        // Mettez à jour les propriétés de la catégorie avec les données de la requête
        $category->libelle = $request->input ('libelle');
        $category->save();
    
        // Redirigez l'utilisateur vers la page d'accueil avec un message de succès
        return redirect()->route('home')->with('success', 'La catégorie a été mise à jour avec succès.');
    }
    
public function showCours($category)
{
    $category = Categorie::findOrFail($category);

    // Récupérez les cours associés à cette catégorie
    $cours = $category->cours ?? collect();
    

    return view('cours', compact('cours','category'));
}


    

    // Ajoutez les autres méthodes nécessaires

   
}