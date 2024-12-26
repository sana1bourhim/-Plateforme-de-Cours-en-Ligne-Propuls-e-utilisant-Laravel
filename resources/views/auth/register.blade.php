@extends('layouts.logintemp')
@vite('resources/css/app.css')
@section('login_content')
<div class="flex bg-[#eaf4f9] justify-center items-center ">
    <div class="bg-white p-8 mb-2 mt-3 rounded-xl shadow-xl w-[40%] h-[10%] ">
<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <span class="text-2xl font-bold leading-tight tracking-tight mb-2 flex justify-center text-gray-900 md:text-2xl">
        Register
        </span>
    <div class="grid grid-cols-2 gap-10 mt-3">
        <div class=" wrap-input100 validate-input" data-validate = "Enter your full-name">
            
            <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <span class="focus-input100" data-placeholder="Full-Name"></span>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
  
        <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
            
            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            <span class="focus-input100" data-placeholder="Email"></span>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        </div>
        <div class="grid grid-cols-2 gap-10">
        <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
                <i class="zmdi zmdi-eye"></i>
            </span>
            <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
           
            <span class="focus-input100" data-placeholder="Password"></span>
             @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="wrap-input100 validate-input" data-validate="Confirm password">
            <span class="btn-show-pass">
                <i class="zmdi zmdi-eye"></i>
            </span>
            <input id="password-confirm" type="password" class="input100 " name="password_confirmation" required autocomplete="new-password">
            <span class="focus-input100" data-placeholder="Confirm Password"></span>
        </div>

      

<!-- Champs spécifiques à un étudiant -->

<div class=" validate-input mb-0">
    <label for="photo" class="text-xs text-gray-400 font-medium ">Choose your picture's profile...</label>
    
    <input id="photo" type="file" class=" @error('photo') is-invalid @enderror w-[155px]" name="photo">
    <span class="" ></span>
    @error('photo')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="wrap-input100 validate-input mb-0" >
    
    <select id="pays" class="input100 @error('pays') is-invalid @enderror" name="pays" required>
        <option value="" class="focus-input100" selected disabled>{{ __('Sélectionnez le pays') }}</option>
        <option value="Maroc">Maroc</option>
        <option value="France">France</option>
        <option value="Canada">Canada</option>
        <option value="États-Unis">États-Unis</option>
        <option value="Autre">Autre</option>
    </select>
    @error('pays')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="wrap-input100 form-group mb-0">
   
    <select id="niveau_etudes" class="input100 @error('niveau_etudes') is-invalid @enderror" name="niveau_etudes" required>
        <option value="" class="input100" selected disabled>{{ __('Study Degree') }}</option>
        <option value="Collège">Collège</option>
        <option value="Lycée">Lycée</option>
        <option value="Bac+1">Bac+1</option>
        <option value="Bac+2">Bac+2</option>
        <option value="Bac+3">Bac+3</option>
        <option value="Bac+4">Bac+4</option>
        <option value="Bac+5">Bac+5</option>
        <option value="Autre">Autre</option>
    </select>
    @error('niveau_etudes')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="wrap-input100 validate-input mb-0" data-validate="School">
    
    <input id="ecole" type="text" class="input100 @error('ecole') is-invalid @enderror" name="ecole" value="{{ old('ecole') }}" required>
   
    <span class="focus-input100" data-placeholder="School or University"></span> @error('ecole')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

{{-- <button  class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
     {{ __('Create Account') }}</button> --}}
        <button class="bg-[#06bbcc] hover:bg-blue-400 ml-[60%] mb-2  w-full h-10 text-white font-bold  border-b-4 border-blue-700 hover:border-blue-500 rounded-2xl ">
            {{ __('Create Account') }}
        </button>
    
    </div>

    <div class=""> 
         <a class="no-underline hover:underline text-[#60a5fa] " href="{{ route('login') }}">
        {{ __("You  have already an account?") }}
    </a>
    </div>

</form>
</div>
    </div>
</div>

@endsection



