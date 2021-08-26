@extends('layouts.auth')
@section('title',"Registrarse")
@section('content')
<div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2"> 
          <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('img/registro-claro.jpg') }}" alt="Office"  />
          <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"  src="{{ asset('img/registro-oscuro.jpg') }}" alt="Office" />
        </div>
          <div class="flex items-center justify-center p-6 sm:p-6 md:w-2/4">
            <div class="w-full">
              <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200" >
              {{ __('Crear Cuenta') }}
              </h1>
               
              @if ($errors->any()) 
                  <div class="font-medium text-red-600 mb-3" >{{ __('Lgeneral.Whoops! Something went wrong.') }}</div>
              @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="flex flex-wrap -mx-3 mb-3">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-first-name">
                {{ __('Nombre') }}
                </label>
                <input class="block w-full mt-1 text-sm @if($errors->has('name')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif dark:bg-gray-700 focus:border-purple-500 focus:outline-none focus:shadow-outline-purple dark:text-gray-300  dark:focus:shadow-outline-gray form-input" 
                placeholder="Jane" type="text" name="name" value="{{old('name')}}"  autofocus autocomplete="name" />
                @if($errors->has('name'))
                <p class="mt-1 text-red-500 text-xs italic">{{ $errors->first('name') }}</p>
                @endif
              </div>

              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-apellido">
                {{ __('Apellido') }}
                </label>
                <input class="block w-full mt-1 text-sm @if($errors->has('apellido')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                placeholder="Doe" type="text" name="apellido" value="{{old('apellido')}}"  autofocus autocomplete="apellido"/> 
                @if($errors->has('apellido'))
                <p class="mt-1 text-red-500 text-xs italic">{{ $errors->first('apellido') }}</p>
                @endif 
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-3">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-first-name">
                {{ __('Sexo') }}
                </label>
                <div class="relative">
                  <select class="block appearance-none py-1.5 px-4 pr-8 w-full @if($errors->has('sexo')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                  id="sexo" name="sexo" >
                  <Option value="M" selected >Masculino</Option>
                  <Option value="F">Femenino</Option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
                @if($errors->has('sexo'))
                <p class="mt-1 text-red-500 text-xs italic">{{ $errors->first('sexo') }}</p>
                @endif
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-apellido">
                {{ __('perfil.Email') }}
                </label>
                <input class="block w-full mt-1 text-sm @if($errors->has('email')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                placeholder="ejemplo@gmail.com" type="email" name="email" value="{{old('email')}}" />  
                @if($errors->has('email'))
                <p class="mt-1 text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
                @endif
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-3">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-first-name">
                {{ __('Lgeneral.Password') }}
                </label>
                <input class="block w-full mt-1 text-sm @if($errors->has('password')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                placeholder="**************" type="password" name="password"  autocomplete="new-password" />
                @if($errors->has('password'))
                <p class="mt-1 text-red-500 text-xs italic">{{ $errors->first('password') }}</p>
                @endif
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-apellido">
                {{ __('perfil.Confirm Password') }}
                </label>
                <input class="block w-full mt-1 text-sm @if($errors->has('password')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                placeholder="**************" type="password" name="password_confirmation"  autocomplete="new-password"/>  
               
              </div>
             
            </div>

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Dirección') }}</span>
                <textarea
                  class="block w-full mt-1 tracking-wide @if($errors->has('direccion')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif text-sm dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe" name="direccion" autofocus autocomplete="direccion"
                >{{old('direccion')}}</textarea>
                @if($errors->has('direccion'))
                <p class="mt-1 text-red-500 text-xs italic">{{ $errors->first('direccion') }}</p>
                @endif
              </label>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              {{ __('Crear Cuenta') }}
              </button>
 
              <p class="mt-2">
                <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('login') }}" >
                {{ __('Lgeneral.Already registered?') }}
                </a>
              </p>
        </form>
            </div>
          </div>
        </div>
@endsection
   