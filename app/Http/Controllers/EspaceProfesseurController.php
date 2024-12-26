<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Professor;

class EspaceProfesseurController extends Controller
{
    public function indexe()
    {
        return view('espace-professeur');
    }
}
