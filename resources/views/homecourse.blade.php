@extends('layouts.logintemp')
@vite('resources/css/app.css')
@section('login_content')
<div class="flex bg-[#eaf4f9]  justify-center items-center  ">
    <div class="bg-white p-8 mb-3 mt-3 rounded-xl shadow-xl w-1/2">
        @if (auth()->user()->isProfessor())
        <h3 class="mb-5  text-bold">Create Course</h3>
        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="titre" class="form-label">Title</label>
                <input type="text" class="form-control" id="titre" name="titre" required>
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Description </label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="type_ress" class="form-label"> Ressource Type</label>
                <select class="form-control" id="type_ress" name="type_ress" required>
                    <option value="document">document</option>
                    <option value="video">video</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="contenu" class="form-label">Course Content </label>
                <input type="file" class="form-control" id="contenu" name="contenu" accept=".pdf, .doc, .docx, .jpg, .jpeg, .png, .mp4, .mpeg, .ogg" required>
            </div>

            <div class="mb-3">
                <label for="etat" class="form-label">Course Status</label>
                <select class="form-control" id="etat" name="etat" required>
                    <option value="actif">Actif</option>
                    <option value="inactif">Inactif</option>
                </select>
            </div>
             <div class="mb-3">
                <label for="datePublication" class="form-label">Date de Publication</label>
                <input type="date" class="form-control" id="datePublication" name="datePublication" required>
            </div> 
            <div class="form-group">
                <label for="id_section">Course Section</label>
                <select name="id_section" id="id_section" class="form-control">
                    <option value="" disabled selected style="color: rgb(12, 11, 11);">-- Select section --</option>
                    @foreach($sections as $section) <!-- Mettez à jour la variable $categories en $sections -->
                        <option value="{{ $section->id }}">{{ $section->titre }}</option> <!-- Assurez-vous que le nom des propriétés correspond à votre modèle Section -->
                    @endforeach
                </select>
            </div>
            <div class="flex justify-between">
            <button type="submit" class="mt-2 btn btn-info  w-44 bg-[#eaf4f9] ml-[30%]">Create</button>
            <button type="reset" onclick="window.history.back();" class="bg-[#eaf4f9]  mt-2  hover:bg-gray-100 text-gray-800 w-44 font-semibold py-2 px-4 border border-gray-400 rounded shadow-xl">
                Reset
              </button>            </div>
            </div>
        </form>

        @endif
    </div>
@endsection
                
