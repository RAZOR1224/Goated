<!DOCTYPE html>
<html lang="en">
<head>
    @include('users.layout.partial.css')
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
    @include('users.layout.partial.header')
    <div class="center-container">
        <div class="login">
            <x-slot name="logo">

            </x-slot>

            <x-validation-errors class="mb-4" />
            <h1 style="text-align: center;">Anda belum Login, Untuk Mendaftar sebagai Mitra kami,<br>diharuskan untuk login terlebih dahulu.</h1>
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
            <br>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mt-4">
                    <x-label for="foto_ktp" value="{{ __('Foto KTP') }}" />
                    <input id="foto_ktp" class="block mt-1 w-full" type="file" name="Foto KTP" accept="image/*" required />
                </div>
                <br>
                <div class="form-group">
                    <x-label for="pendapatan_bulanan" value="{{ __('Pendapatan Bulanan') }}" />
                    <x-input id="pendapatan_bulanan" class="form-input" type="numbers" name="Pendapatan Bulanan" :value="old('1')" required autofocus autocomplete="pendapatan_bulanan" />
                </div>
                <br>
                <div class="form-group">
                    <x-label for="sumber_penghasilan" value="{{ __('Sumber Penghasilan') }}" />
                    <x-input id="sumber_penghasilan" class="form-input" type="text" name="Sumber Penghasilan" :value="old('Sumber Penghasilan')" required autofocus autocomplete="sumber_penghasilan" />
                </div>
                <br>
               <div class="mt-4">
                   <x-label for="kontak_lain" value="{{ __('Kontak Kedua') }}" />
                   <x-input id="kontak_lain" class="block mt-1 w-full" type="numbers" name="Kontak Kedua" :value="old('kontak_lain')" required />
               </div>
                <br>
                <div class="form-group flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mr-4" href="{{ url()->previous() }}">
                        {{ __('Go back') }}
                    </a>


                    <x-button class="mr-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>

        </div>
    </div>

    @include('users.layout.partial.footer')

    @include('users.layout.partial.script')

</body>
    </x-guest-layout>

</html>
