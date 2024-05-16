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
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <x-label for="alamat" value="{{ __('Nama Peternakan') }}" />
                    <x-input id="alamat" class="form-input" type="text" name="Nama Peternakan" :value="old('Nama Peternakan')" required autofocus autocomplete="namapeternakan" />
                </div>

                <br>
                <div class="form-group">
                    <x-label for="alamat" value="{{ __('Alamat Peternakan') }}" />
                    <x-input id="alamat" class="form-input" type="text" name="Alamat Peternakan" :value="old('Alamat Peternakan')" required autofocus autocomplete="alamatpeternakan" />
                </div>
                <br>
                <div class="mt-4">
                   <x-label for="phone" value="{{ __('phone') }}" />
                   <x-input id="phone" class="block mt-1 w-full" type="numbers" name="phone" :value="old('phone')" required />
               </div>
                <br>
                <div class="mt-4">
                    <x-label for="ktpphoto" value="{{ __('Foto KTP') }}" />
                    <input id="ktpphoto" class="block mt-1 w-full" type="file" name="Foto KTP" accept="image/*" required />
                </div>
                <br>
                <div class="mt-4">
                    <x-label for="farmphoto" value="{{ __('Foto Peternakan') }}" />
                    <input id="farmphoto" class="block mt-1 w-full" type="file" name="Foto Peternakan" accept="image/*" required />
                </div>
                <br>
                <div class="form-group">
                    <x-label for="kapasitaskandang" value="{{ __('Kapasitas Kandang Saat Ini') }}" />
                    <x-input id="kapasitaskandang" class="form-input" type="numbers" name="Kapasitas Kandang" :value="old('1')" required autofocus autocomplete="kapasitaskandang" />
                </div>
                <br>
                <div class="form-group">
                    <x-label for="jeniskambing" value="{{ __('Jenis Kambing') }}" />
                    <x-input id="jeniskambing" class="form-input" type="text" name="Jenis Kambing" :value="old('Jenis Kambing')" required autofocus autocomplete="jeniskambing" />
                </div>
                <br>
                <x-label for="waktubeternak" value="{{ __('Berapa tahun anda mengelola peternakan') }}" />
                <div class="form-group">
                    <x-input id="waktubeternak" class="form-input" type="numbers" name="Waktu Beternak" :value="old('Waktu Beternak')" required autofocus autocomplete="waktuternak" />
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
