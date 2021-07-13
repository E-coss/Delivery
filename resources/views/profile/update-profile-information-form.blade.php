<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('perfil.Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('perfil.Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('perfil.Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20 dark:text-gray-400"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2 dark:border-gray-500" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('perfil.Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2 dark:border-gray-500 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" wire:click="deleteProfilePhoto">
                        {{ __('perfil.Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Nombre') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full dark:border-gray-500 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Apellido -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="apellido" value="{{ __('Apellido') }}" />
            <x-jet-input id="apellido" type="text" class="mt-1 block w-full dark:border-gray-500 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" wire:model.defer="state.apellido" autocomplete="apellido" />
            <x-jet-input-error for="apellido" class="mt-2" />
        </div>


        <div  class="col-span-6 sm:col-span-4">
            <x-jet-label value="{{ __('Sexo') }}" />
            <Select class="form-input rounded-md dark:text-gray-300 dark:bg-gray-800 shadow-sm mt-1 w-full dark:border-gray-500 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" id="sexo" name="sexo" required wire:model.defer="state.sexo">
                <Option value="M" selected >Masculino</Option>
                <Option value="F">Femenino</Option>
            </Select>
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('perfil.Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full dark:border-gray-500 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- direccion -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="direccion" value="{{ __('Direccion') }}" />
            <x-jet-input id="direccion" type="text" class="mt-1 block w-full dark:border-gray-500 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" wire:model.defer="state.direccion" />
            <x-jet-input-error for="direccion" class="mt-2" />
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
