<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.partial.css')
    <style>
        body {
            /* Set background image */
            background-image: url('/home/assets/images/bg.jpg');
            /* Adjust background image properties */
            background-size: cover;
            background-position: center;
            /* Add any other styles you want for the body */
        }

    </style>
</head>

<x-guest-layout>

<body>
    @include('home.partial.header')
    <header class="header-bg" style="background-color: rgba(0, 0, 0, 0.4) !important; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.4) !important;">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <img src="home/assets/images/goated_logo.png" class="img-responsive">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">Our Services</a>
                        </li>
                        <li class="nav-item">
                <a class="nav-link" href="{{ route('user-faq') }}">FAQ</a>
              </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#top">Login</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="center-container">
        <div class="login">
        <x-slot name="logo">
           
           </x-slot>
   
           <x-validation-errors class="mb-4" />
           <h1 style="text-align: center;">REGISTER</h1>
           <form method="POST" action="{{ route('register') }}">
               @csrf
               <x-input type="hidden" id="usertype" name="usertype" value="1" required />
               <div>
                   <x-label for="name" value="{{ __('Name') }}" />
                   <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
               </div>
   
               <div class="mt-4">
                   <x-label for="email" value="{{ __('Email') }}" />
                   <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
               </div>
   
               <div class="mt-4">
                   <x-label for="phone" value="{{ __('phone') }}" />
                   <x-input id="phone" class="block mt-1 w-full" type="numbers" name="phone" :value="old('phone')" required />
               </div>
   
               <div class="mt-4">
                   <x-label for="password" value="{{ __('Password') }}" />
                   <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
               </div>
   
               <div class="mt-4">
                   <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                   <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
               </div>
   
               @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                   <div class="mt-4">
                       <x-label for="terms">
                           <div class="flex items-center">
                               <x-checkbox name="terms" id="terms" required />
   
                               <div class="ms-2">
                                   {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                           'terms_of_service' => '<a target="blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'._('Terms of Service').'</a>',
                                           'privacy_policy' => '<a target="blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'._('Privacy Policy').'</a>',
                                   ]) !!}
                               </div>
                           </div>
                       </x-label>
                   </div>
               @endif
   
               <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mr-4" href="{{ url()->previous() }}">
                        {{ __('Go back') }}
                    </a>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mr-4" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="mr-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
           </form>

        </div>
    </div>

    @include('home.partial.footer')

    @include('home.partial.script')

</body>
    </x-guest-layout>

</html>
