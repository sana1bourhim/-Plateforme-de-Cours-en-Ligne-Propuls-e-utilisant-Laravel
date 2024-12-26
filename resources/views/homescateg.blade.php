@extends('layouts.logintemp')
@vite('resources/css/app.css')
@section('login_content')
<div class="flex bg-[#eaf4f9] justify-center items-center h-screen  ">
    <div class="bg-white p-8 mb-2 mt-2 rounded-xl shadow-xl w-1/2">
                @if (auth()->user())
                
                    @if (auth()->user()->isProfessor())
                    <h3 class="text-md flex justify-center ">Create Sous Category</h3>
                    <form action="{{ route('scategories.store') }}" method="POST">
                        @csrf
                        <div class="mb-3  pt-7  ml-10 ">
                            <label for="libelle" class="form-label">Sous Category Name</label>
                            <input type="text" class="form-control" id="libelle" name="libelle" required>
                        </div>

                        <!-- Champ de sélection pour choisir la catégorie -->
                        <div class="form-group  pt-7  ml-10 ">
                            <label for="category_id">Course Category</label>
                            <select name="ID_cat" id="ID_cat" class="form-control">
                                <option value="" disabled selected style="color: rgb(12, 11, 11);">-- Select category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="flex justify-between">
                        <button type="submit" class="mt-2 btn btn-info  w-44 bg-[#eaf4f9] ml-[30%]">Create</button>
                        <button type="reset" onclick="window.history.back();" class="bg-[#eaf4f9] mt-2  hover:bg-gray-100 text-gray-800 w-44 font-semibold py-2 px-4 border border-gray-400 rounded shadow-xl">
                            Reset
                          </button>
                          </div>
                    </form>
                    @endif
                
                
                @endif
            </div>
        </div>

@endsection

