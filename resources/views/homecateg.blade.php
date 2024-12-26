@extends('layouts.logintemp')
@vite('resources/css/app.css')
@section('login_content')
<div class="flex bg-[#eaf4f9] justify-center items-center h-screen ">
    <div class="bg-white p-8 mb-2 mt-2 rounded-xl shadow-xl w-1/2">
                    {{-- <h3 class="box-title mb-0">Recent sales</h3> --}}
                    @if (auth()->user())
                    
                        @if (auth()->user()->isProfessor())
                        <h4 class=" pt-7  ml-10">Create Category</h4>
                    
                        <form action="{{ route('categories.store') }} " method="POST">
                            @csrf
                            <div class=" pt-7  ml-10">
                                <label for="libelle" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="libelle" name="libelle" required>
                            </div>
                           <div class="flex justify-between"> 
                            <button type="submit" class="mt-2 btn btn-info  w-44 bg-[#eaf4f9] ml-[30%] ">Create</button>
                            <button type="reset" onclick="window.history.back();" class=" mt-2  bg-[#eaf4f9] hover:bg-gray-100 text-gray-800 w-44 font-semibold py-2 px-4 border border-gray-400 rounded shadow-xl">
                                Reset
                              </button>                           </div>
                        </form>
                        @endif
                    
                    @endif 
                    {{-- <div class="card-body">
                        <h1>Catégories Existantes</h1>
                        <ul>
                            @foreach($categories as $category)
                                <li>{{ $category->libelle }}</li>
                            @endforeach
                        </ul>
                    </div> --}}
    
                </div>
            </div>
        


@endsection