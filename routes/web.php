<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChapitreController;
use App\Http\Controllers\SousCategoryController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DidacticielController;
use App\Http\Controllers\SectionController;
use App\Http\Middleware\CheckProfessor;
use App\Models\Didacticiel;
use App\Http\Controllers\EtudiantController;
Route::get('/', function () {
    return view('homemaster');
});
Route::get('/description',function(){
    return view('descriptioncourse');
})->name('description');

Route::get('/etudiant',function(){
    return view('etudiantprofil');
})->name('etudiant');

Route::get('/formateur',function(){
    return view('professeurprofil');
})->name('formateurprof');

Route::get('/viewdidac',function(){
    return view('viewdidac');
})->name('viewdidac');
Auth::routes();

Route::get('/homestudent', function () {
    return view('homeStudent');
})->name('homestudent');


Route::get('/home', [HomeController::class, 'index'])
    ->name('home')
    ->middleware('professeur');

// Nouvelles routes pour les catégories, sous-catégories et didacticiels
Route::get('/', [CategoryController::class, 'index']);
Route::get('/home', [CategoryController::class, 'home'])->name('home')
->middleware('professeur');
Route::get('/home/{nom_du_fichier}', [DocumentController::class,'show']);

//Route::resource('/sous-categories', SousCategorieController::class);
//Route::resource('/didacticiels', DidacticielController::class);
Route::get('/categories/create', [CategoryController::class, 'create'])->name('homecategory');
Route::post('/homecategory', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/courses/create', [CoursController::class, 'create'])->name('homecourse');
Route::post('/homecourse', [CoursController::class, 'store'])->name('courses.store');
Route::post('/update/{category}', [CategoryController::class, 'updatee'])->name('update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/{category}/cours', [CategoryController::class, 'showCours'])->name('categories.show-cours');
////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/didacticiels/create', [DidacticielController::class, 'create'])->name('homedidacticiel');
Route::post('/homedidacticiel', [DidacticielController::class, 'store'])->name('didacticiels.store');
///////////////////////////////////////////////////////////////////////////////////////////
Route::get('/souscategories/create', [SousCategoryController::class, 'create'])->name('homescategory');
Route::post('/homescategory', [SousCategoryController::class, 'store'])->name('scategories.store');
////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/chapitres/create', [ChapitreController::class, 'create'])->name('homechapitre');
Route::post('/homechapitre', [ChapitreController::class, 'store'])->name('chapitres.store');
/////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/sections/create', [SectionController::class, 'create'])->name('homesection');

Route::post('/homesection', [SectionController::class, 'store'])->name('sections.store');
Route::get('/homestudent', [DidacticielController::class, 'index'])->name('homeStudent');

Route::post ('/homesection', [SectionController::class, 'store'])->name ('sections.store');
/////////////////////////////////////
Route::get('/viewcours/{ID_cours}',[CategoryController::class,'view'])->name('viewcours');
Route::get('/viewdidac/{id}',[DidacticielController::class,'viewe'])->name('viewdidac');
Route::get('/description/{id}', [DidacticielController::class, 'DidacbyId'])->name('description.show');



Route::get('/etudiant/{id}', [EtudiantController::class,'profil'])->name('etudiantprofil')->middleware('auth');
Route::get('/professeur/{id}', 'ProfesseurController@profil')->name('professeur.profil');
