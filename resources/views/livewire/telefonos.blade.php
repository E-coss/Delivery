
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="telefono" value="{{ __('Telefono') }}" />
            <x-jet-input id="telefono" type="text" class="mt-1 block w-full" wire:model.defer="telefono" autocomplete="telefono" />
            <x-jet-input-error for="telefono" class="mt-2" />

            <x-jet-label for="" class="mt-5" value="{{ __('Seleccionar numero a editar') }}" />
        <div class="flex flex-col ">
            @foreach($telefonos as $numero)   
            <label class=" mt-3">
            <div class="cursor-pointer flex w-full hover:bg-teal-100 " style="">
                    <div class="flex w-full dark:bg-gray-700 dark:text-gray-200 dark:focus:bg-gray-500 dark:hover:bg-gray-800 dark:hover:text-gray-400  items-center p-2 pl-2 border-transparent bg-white  border-l-2 relative hover:bg-gray-200 border-teal-600">
                        <div class="w-full items-center flex">
                        <input wire:click="select({{$numero}})" type="radio" class="form-radio h-5 w-5 text-gray-600" checked>
                        <div class="mx-2 leading-6 object-right ">{{ $numero->tipo_telefono }} : {{ $numero->numero }} </div>
                        </div>
                    </div>
                    <a href="#" class="pt-2 pr-2 vertical-align: dark:bg-gray-700 dark:text-gray-200 dark:focus:bg-gray-500 middle bg-white relative"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 inline w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
                </a>
                </div>
            </label>
               
            @endforeach
            </div>

        </div>
