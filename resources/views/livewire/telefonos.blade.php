<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Números de contactos') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Agrega / Actualiza tus números de contactos.') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 sm:col-span-4 ">
            @if($hide != false)
              <x-jet-label for="telefono" value="{{ __('Telefono') }}" />
              <x-jet-input wire:model="telefono" id="telefono" type="text" class="mt-1 block w-full" autocomplete="telefono" required/>
              <x-jet-input-error for="telefono" class="mt-2" />
              
            <div  class="mt-4 flex">
               <div class="w-7/12">
                    <x-jet-label value="{{ __('Tipo de Telefono') }}" />
                <Select class="form-input rounded-md dark:text-gray-300 dark:bg-gray-800 shadow-sm mt-1 w-full" wire:model="tipo_telefono" id="tipo_telefono"  name="tipo_telefono" required>
                    <Option value="F" @if($tipo_telefono == "F") Selected @elseif($nuevo==true) Selected @endif>Fijo</Option>
                    <Option value="P" @if($tipo_telefono == "P") Selected @elseif($nuevo==true) Selected @endif>Personal</Option>
                    <Option value="C" @if($tipo_telefono == "C") Selected @elseif($nuevo==true) Selected @endif>Casa</Option>
                    <Option value="T" @if($tipo_telefono == "T") Selected @elseif($nuevo==true) Selected @endif>Trabajo</Option>
                </Select>
                <x-jet-input-error for="tipo_telefono" class="mt-2" />
               </div>
               <div class="w-5/12 ml-2">
                <x-jet-label value="{{ __('Entidad') }}" />
                <Select class="form-input rounded-md dark:text-gray-300 dark:bg-gray-800 shadow-sm mt-1 w-full" wire:model="entidad" id="entidad" name="entidad" disabled required>
                    <Option value="U" Selected >Usuario</Option>
                </Select>
                <x-jet-input-error for="entidad" class="mt-2" />
               </div>
            </div>
            
            @endif
            <x-jet-label for="" class="mt-5" value="{{ __('Seleccionar numero a editar') }}" />
        <div class="flex flex-col">
            @foreach($telefonos as $numero)   
            <label class=" mt-3">
            <div class="cursor-pointer flex w-full">
                    <div class="flex w-full dark:bg-gray-700 dark:text-gray-200 transition-colors dark:focus:bg-gray-500 dark:hover:text-gray-400  items-center p-2 pl-2 border-transparent bg-white  border-l-2 relative hover:border-purple-600 @if($telefono == $numero->numero) border-purple-600 @else border-purple-200 @endif">
                        <div class="w-full items-center flex  hover:border-teal-600">
                        <input wire:click="edit({{$numero}})" type="radio" class="form-radio h-5 w-5 text-gray-600" checked>
                        <div class="mx-2 leading-6 object-right ">{{ $numero->tipo_telefono }} : {{ $numero->numero }} </div>
                        </div>
                    </div>
                    <a href="#" wire:click="destroy({{$numero->id}})" class="pt-2 pr-2 vertical-align: dark:bg-gray-700 dark:text-gray-200 dark:focus:bg-gray-500 middle bg-white relative"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 inline w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
                </a>
                </div>
            </label>
               
            @endforeach
            

            </div>

        </div>
        </x-slot>

<x-slot name="actions">
@if($cerrar)
<div class="flex">
            <a  class="inline-flex text-left items-center mt-4 mr-2 px-2 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
            @if($errors->has('errorguardar'))
        <span class="text-red-500">{{ $errors->first('errorguardar') }}</span>
    @endif
    @if($errors->has('guardado'))
        <span class="text-green-600">{{ $errors->first('guardado') }}</span>
    @endif
                <span wire:click="close()">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </a>
</div>
@endif
@if($edit != false)
            <div class="flex">
            <a wire:click="update()" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Actualizar numero') }}
            </a>
            <a  wire:click="resetInputFields()" class="mt-4 inline-flex items-center ml-2 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Cancelar') }}
            </a>
            </div>
            @else
            {{-- modal --}}
            <div class="flex">
                <a wire:click="NewTel" class="mt-4  inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Agregar Telefono') }}
            </a>
            <a  wire:click="resetInputFields()" class="mt-4 inline-flex items-center ml-2 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Cancelar') }}
            </a>
            </div>
            {{-- fin modal --}}
            @endif
</x-slot>
</x-jet-form-section>