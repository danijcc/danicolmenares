<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    <title>Iniciar Sesion</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10  col-lg-6 mx-auto">
            <x-guest-layout>
                <x-auth-card>
                    <x-slot name="logo">
                        <img src="/img/logo.png" class="rounded mx-auto d-block" alt="Logo" width="300" height="300">
                     </x-slot>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form class="shadow-lg p-3 mb-5 bg-white rounded" 
                          method="POST" 
                          action="{{ route('login') }}"
                          >
                        @csrf

                        <!-- Email Address -->
                        <div class="form-group">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full form-control bg-light shadow-sm " type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full form-control bg-light shadow-sm "
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center  ">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-button class="ml-3 btn btn-primary btn-lg btn-block ">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>
            </x-guest-layout>
        </div>
    </div>
</div>

</body>
</html>