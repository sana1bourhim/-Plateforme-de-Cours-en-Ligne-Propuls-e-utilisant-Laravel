@extends('layouts.logintemp')
@vite('resources/css/app.css')
@section('login_content')



<div class="flex bg-[#eaf4f9] justify-center items-center h-screen ">
    <div class="bg-white p-8 mb-2 mt-2 rounded-xl shadow-xl w-80 h-[75%] ">
       
                    <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                        @csrf
                        <span class="text-2xl font-bold flex justify-center">
                            Login
                        </span>
                        
                        <span class="login100-form-title p-b-48">
                           
                        </span>
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                           

                            
                                <input id="email" type="email" class="input100 w-44 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="focus-input100" data-placeholder="Email"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">

                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span class="focus-input100" data-placeholder="Password"></span>
                                @error('password')
                                    <span class="invalid-feedback " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              
                            
                        </div>

                        <div class="d-flex mb-3 align-items-center">
                   
                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-sm" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                
                        </div>
                        <div class="">
                            <div class="">
                                <div class=""></div>
                                <button class="bg-[#06bbcc] hover:bg-blue-400 ml-8 h-8 mb-3 text-white font-bold  border-b-4 border-blue-700 hover:border-blue-500 rounded-2xl w-44">
                                   
                                    {{ __('Login') }}
                                </button>
                            </div>
                        <div>
                                @if (Route::has('password.request'))
                                <a class="no-underline hover:underline  text-[#60a5fa] text-sm" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif </div>
                            <div class="no-underline hover:underline text-[#60a5fa]  ">  <a class="text-[#60a5fa] text-sm" href="{{ route('register') }}">
                                {{ __("You don't have an account?") }}
                            </a>
                            </div>
                        </div>
                                
                            
                        
                    </form>
        </div>
    </div>
 
@endsection
