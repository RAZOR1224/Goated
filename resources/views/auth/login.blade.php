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
                        <li class="nav-item active">
                            <a class="nav-link" href="#top">Login</a>
                        </li>
                        <li class="nav-item">
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
            <h1 style="text-align: center;">LOGIN</h1>
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>
                <br>
                <div class="form-group mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" />
                </div>
                <br>

                <div class="form-group">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <br>

                <div class="form-group flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mr-4" href="{{ url()->previous() }}">
                        {{ __('Go back') }}
                    </a>

                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mr-4" href="{{ route('register') }}">
                        {{ __('Dont have an Account yet?') }}
                    </a>

                    <x-button class="mr-4">
                        {{ __('Log in') }}
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
