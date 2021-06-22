
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="telefono" value="{{ __('Telefono') }}" />
            <x-jet-input id="telefono" type="text" class="mt-1 block w-full" wire:model.defer="telefono" autocomplete="telefono" />
            <x-jet-input-error for="telefono" class="mt-2" />
        </div>
