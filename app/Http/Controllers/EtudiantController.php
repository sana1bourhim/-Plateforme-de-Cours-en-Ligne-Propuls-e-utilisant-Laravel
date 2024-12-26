<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
class EtudiantController extends Controller
{
    //
    public function profil($id)
{
    // Récupérez les données de l'étudiant ou du professeur en fonction de l'id
    $etudiant = Etudiant::where('user_id',$id)->first();
    
    return view('etudiantprofil', compact('etudiant'));
}
}
