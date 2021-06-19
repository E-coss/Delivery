<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Nombre') }}" />
                <x-jet-input class="block mt-1 w-full dark:bg-gray-800" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Apellido') }}" class="mt"/>
                <x-jet-input class="block mt-1 w-full dark:bg-gray-800 " type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido" />
            </div>

            <div  class="mt-4">
                <x-jet-label value="{{ __('Sexo') }}" />
                <Select class="form-input rounded-md dark:text-gray-300 dark:bg-gray-800 shadow-sm mt-1 w-full" id="sexo" name="sexo" required>
                    <Option value="M" selected >Masculino</Option>
                    <Option value="F">Femenino</Option>
                </Select>
            </div>
            
            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full dark:bg-gray-800" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Direccion') }}" />
                <x-jet-input class="block mt-1 w-full dark:bg-gray-800" type="text" name="direccion" :value="old('direccion')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full dark:bg-gray-800" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full dark:bg-gray-800" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
