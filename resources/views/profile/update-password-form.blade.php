<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('perfil.Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('perfil.Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('perfil.Current Password') }}" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full dark:border-gray-500 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('perfil.New Password') }}" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full dark:border-gray-500 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('perfil.Confirm Password') }}" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full dark:border-gray-500 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('perfil.Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('perfil.Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
