
@extends('layouts.logintemp')
@vite('resources/css/app.css')
@section('login_content')
<div class="flex bg-[#eaf4f9] justify-center items-center h-screen  ">
    <div class="bg-white p-8 rounded-xl shadow-xl w-1/2">
   
<form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
    @csrf
                                        @method('PUT') <!-- Utilisez 'PUT' au lieu de 'save' pour la méthode -->
                                        <div class="form-group">
                                            <label class="text-md flex  font-semibold" for="name">Nouveau nom de catégorie :</label>
                                            <input type="text" class="form-control" id="name" name="libelle" value="{{ $category->libelle }}">
                                            <!-- Assurez-vous que le champ 'name' correspond au nom de la colonne dans votre modèle -->
                                        </div>
                                        <!-- Ajoutez d'autres champs de formulaire au besoin -->
                                        <div class="flex justify">
                                        <button type="submit"  class="mt-2 btn btn-info  w-22 bg-[#eaf4f9] ml-[30%]">update</button>
                                        <!-- Bouton pour la mise à jour -->
                                        <button type="reset" onclick="window.history.back();" class="bg-[#eaf4f9] mt-2 ml-3 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-800 rounded shadow">
                                            Reset
                                          </button>
                                        </div>
                                        {{-- <button type="reset" onclick="window.history.back();" class="mt-2 btn btn-secondary w-44">
                                            Reset</button> --}}
                                    </form>
    </div>
</div>
@endsection