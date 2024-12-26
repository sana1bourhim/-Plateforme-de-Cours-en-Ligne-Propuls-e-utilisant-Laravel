@extends('layouts.logintemp')
@vite('resources/css/app.css')
@section('login_content')
<div class="flex bg-[#eaf4f9] justify-center items-center h-screen  ">
    <div class="bg-white p-8 mb-2 mt-2 rounded-xl shadow-xl w-1/2">
    <h3 class="text-md flex justify-center ">Create new Section</h3>
    <form action="{{ route('sections.store') }}" method="POST">
        @csrf

        <div class="form-group pt-7  ml-10 ">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>

        <div class="form-group pt-7  ml-10 ">
            <label for="ordre">Ordre</label>
            <input type="number" class="form-control" id="ordre" name="ordre" required>
        </div>

        <div class="form-group pt-7  ml-10 ">
            <label for="chapitre_id">Chapitre</label>
            <select class="form-control" id="chapitre_id" name="chapitre_id" required>
                <option value="" disabled selected style="color: rgb(12, 11, 11);">-- Sélectionnez un chapitre --</option>
                @foreach($chapitres as $chapitre)
                    <option value="{{ $chapitre->ID_chap }}">{{ $chapitre->titre }}</option>
                @endforeach
            </select>
        </div>
       <div class="flex justify-between">
        <button type="submit" class="mt-2 btn btn-info  w-22 bg-[#eaf4f9] ml-[30%]  shadow-xl">Create Section</button>
        <button type="reset" onclick="window.history.back();" class="mt-2  bg-[#eaf4f9]  hover:bg-gray-100 text-gray-800 w-44 font-semibold py-2 px-4 border border-gray-400 rounded shadow-xl">
            Reset
          </button>
       </div>
    </div>
</div>
