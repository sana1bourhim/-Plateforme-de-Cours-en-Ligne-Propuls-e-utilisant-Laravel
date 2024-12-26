@vite('resources/css/app.css')
@extends('layouts.logintemp')

@section('login_content')
<div class="flex bg-[#eaf4f9]  justify-center items-center h-screen  ">
    <div class="bg-white p-8 mb-3 mt-3 rounded-xl shadow-xl w-1/2">
   
        <h3 class=" text-md flex justify-center ">Create a new Tutoriel</h3>
        <form method="POST" action="{{ route('didacticiels.store') }}">
            @csrf
            <div class="form-group pt-7  ml-10  ">
                <label for="titre ">Title</label>
                <input type="text" name="titre" id="titre" class="form-control" required>
            </div>
            <div class="form-group ml-10">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
           
            <div class="form-group ml-10">
                <label for="etat">Status</label>
                <input type="text" name="etat" id="etat" class="form-control" required>
            </div>
            <div class="form-group ml-10 ">
                <label for="estgratuit">Free</label>
                <input type="checkbox" name="estgratuit" id="estgratuit" value="1">
            </div>
            <div class="form-group ml-10">
                <label for="sous_categorie_id">Sous Catégory associated</label>
                <select name="sous_categorie_id" id="sous_categorie_id" class="form-control">
                    <option value="" disabled selected style="color: rgb(12, 11, 11);">-- Sélectionnez une sous-catégorie --</option>
                    @foreach($sousCategories as $sousCategory)
                        <option value="{{ $sousCategory->id }}">{{ $sousCategory->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-between">
            <button type="submit"  class="mt-2 btn btn-info  w-44 bg-[#eaf4f9] ml-[30%] ">Create Tutoriel</button>
            <button type="reset" onclick="window.history.back();" class="bg-[#eaf4f9]  mt-2  hover:bg-gray-100 text-gray-800 w-44 font-semibold py-2 px-4 border border-gray-400 rounded shadow-xl">
                Reset
              </button>            </div>
        </form>
    </div>
</div>
@endsection
