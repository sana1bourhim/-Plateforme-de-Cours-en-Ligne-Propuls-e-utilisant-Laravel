@extends('layouts.logintemp')
@vite('resources/css/app.css')
@section('login_content')
<div class="flex bg-[#eaf4f9] justify-center items-center ">
    <div class="bg-white p-8 mt-2 mb-2 rounded-xl shadow-xl w-1/2">

    <h3 class="text-md flex justify-center ">Créer un Nouveau Chapitre</h3>

    <form action="{{ route('chapitres.store') }}" method="POST">
        @csrf

        <div class="form-group pt-7  ml-10">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>

        <div class="form-group pt-7  ml-10">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <div class="form-group pt-7  ml-10">
            <label for="ordre">Ordre</label>
            <input type="number" class="form-control" id="ordre" name="ordre" required>
        </div>

        
        <div class="form-group pt-7  ml-10">
            <label for="didacticiel_id">Didacticiel</label>
            <select name="didacticiel_id" id="didacticiel_id" class="form-control">
                <option value="" disabled selected style="color: rgb(12, 11, 11);">-- Sélectionnez un didacticiel --</option>
                @foreach($didacticiels as $didac)
                    <option value="{{ $didac->id }}">{{ $didac->titre }}</option>
                @endforeach
            </select>
        </div>
            
        <button type="submit" class="mt-2 btn btn-info  w-44 bg-[#eaf4f9] ml-[30%]">Create Chaptre</button>
        <button type="reset" onclick="window.history.back();" class="bg-[#eaf4f9]  mt-2  hover:bg-gray-100 text-gray-800 w-44 font-semibold py-2 px-4 border border-gray-400 rounded shadow-xl">
            Reset
          </button>    </form>
</div>
</div>
