@extends('layouts.logintemp')
@vite('resources/css/app.css')
@section('login_content')

                <div class="flex justify-center">{{ __('Verify Your Email Address') }}</div>

          
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <div class="flex bg-[#eaf4f9] justify-center items-center ">
                        <div class="bg-white p-8 mb-2 mt-2 rounded-xl shadow-xl ">
                    
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
               
            </div>
        </div>
    </div>

@endsection
