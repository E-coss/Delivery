@extends('layouts.auth')
@section('content')
<div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2"> 
          <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('img/forgot-password-office.jpeg') }}" alt="Office"  />
          <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"  src="{{ asset('img/forgot-password-office-dark.jpeg') }}" alt="Office" />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
            <h1 class="mb-5 text-2xl font-bold text-gray-700 dark:text-gray-200" >
              {{ __('Recuperar Contraseña') }}
              </h1>
            <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <h1 class="mb-4 text-base font-semibold text-gray-700 dark:text-gray-200" >
            {{ __('Lgeneral.Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
              </h1>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
             @endif

             <x-jet-validation-errors class="mb-1" />

              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('perfil.Email') }}</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Ejemplo: JaneDoe@gmail.com"
                  type="email" name="email" :value="old('email')" required autofocus />
              </label>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" >
              {{ __('Enviar Link de recuperación') }}
              </button>
            </form>
            </div>
            </div>
        </div>
@endsection