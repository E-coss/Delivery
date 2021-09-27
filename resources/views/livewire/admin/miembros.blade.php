<div class="mb-4">
    <!-- New Table -->
    <div class="grid w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto ">
        <div class="my-2 flex sm:flex-row flex-col">
          <div class="flex flex-row mb-1 sm:mb-0">
              <div class="relative">
                  <select wire:model="showcant"
                      class="dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200  focus:bg-none  dark:focus:bg-gray-500 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input dark:bg-gray-800 dark:text-gray-200 appearance-none rounded-none border border-gray-500 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm  text-gray-700 focus:bg-none  focus:text-gray-400">
                      <option>5</option>
                      <option>10</option>
                      <option>20</option>
                      <option>40</option>
                      <option>80</option>
                      <option>100</option>
                  </select>
                  <div
                      class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                      </svg>
                  </div>
              </div>
              <div class="relative">
                  <select wire:model="show"
                      class="dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200  focus:bg-none  dark:focus:bg-gray-500 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input dark:bg-gray-800 dark:text-gray-200 appearance-none rounded-none border border-gray-500 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm  text-gray-700 focus:bg-none  focus:text-gray-400">
                      <option>Todos</option>
                      <option value="Activo">Activo</option>
                      <option value="Inactivo">Inactivo</option>
                  </select>
                  <div
                      class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                      </svg>
                  </div>
              </div>
              
          </div> 

          

          <div class="block relative">
              <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2 ">
                  <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-purple-300  ">
                      <path
                          d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                      </path>
                  </svg>
              </span>
              <input wire:model="search" placeholder="Buscar por nombre"
                  class="dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200  focus:bg-none  dark:focus:bg-gray-500 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input dark:bg-gray-800 dark:text-gray-200 appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-500 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-none focus:placeholder-gray-600 focus:text-gray-700" />
          </div>
          <button type="button" wire:click="$toggle('mod')"   class="w-full px-5 py-3 lg:ml-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </button>
      </div>
      <table class="w-full overflow-x-auto whitespace-no-wrap">
          <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                  <th class="px-4 py-3">Imagen</th>
                  <th class="px-4 py-3">Nombre</th>
                  <th class="px-4 py-3">Puesto</th>
                  <th class="px-4 py-3">Descripcion</th>
                  <th class="px-4 py-3">Estado</th>
                  <th class="px-4 py-3">Acciones</th>
                 
              </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach($Miembros as $Miembro)   
            <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3 text-sm">
                  @if ($Miembro->imagen != "")
                   <img width="80" src="{{asset('resources/Miembros/'.$Miembro->imagen)}}">
                   @endif
                </td>
                  
                <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                          <div>
                              <p class="font-semibold">  {{$Miembro->nombre}}</p>
                          </div>
                      </div>
                  </td>

                  <td class="px-4 py-3 text-sm">
                    {{ $Miembro->puesto }}
                  </td>

                  <td class="px-4 py-3 text-sm">
                    {{ $Miembro->descripcion }}
                  </td>
                  
                  <td class="px-4 py-3 text-sm">
                    @if($Miembro->estado == "Activo")
                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                        Activo
                     </span>
                     @else
                    <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                       Inactivo</span> 
                       @endif
                  </td>

                  <td class="px-6 py-3 text-sm">
                      <div class="flex items-center space-x-4 text-sm">
                          <button type="button" wire:click="MostrarMiembros({{$Miembro->id}})" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"  aria-label="Edit" >
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" >
                              <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" ></path>
                            </svg>
                          </button>
                         <!-- <button type="button" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete" >
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" >
                              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" ></path>
                            </svg>
                          </button> -->
                        </div>
                    </td>
              </tr>
              @endforeach
          </tbody>
         
      </table>
          
      </div>
      {{ $Miembros->links('components.pagination-tailwind') }}

      
  </div>

  <x-jet-dialog-modal wire:model="mod">
    <x-slot name="title"> @if($title != "") {{ $title}} @else Agregar Miembro @endif</x-slot>
    <x-slot name="content">
      <p class="text-sm text-gray-700 dark:text-gray-400">
        <div class="flex flex-wrap -mx-3 mb-3">
          <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-first-name">
                {{ __('Nombre') }}
                </label>
                <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                    <input  wire:model.defer="nombre" class="@if($errors->has('nombre')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
            placeholder="Nombre del Miembro" type="text" autofocus autocomplete="nombre"/>
                      <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                        <i class="fas fa-align-right fa-lg"></i>
                      </div>
                      </div> 
                 @error('nombre')
                <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                
              </div>

                <div class="w-full px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold my-2" for="grid-puesto">
                  {{ __('Puesto') }}
                  </label>
                  <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                      <input  wire:model.defer="puesto" class="@if($errors->has('puesto')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                      placeholder="Puesto" type="text" autofocus autocomplete="Puesto"/>
                      
                        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                          <i class="fas fa-align-right fa-lg"></i>
                        </div>
                        </div> 
                   @error('puesto')
                  <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                  @enderror
                </div>

                <div class="w-full px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold my-2" for="grid-first-name">
                  {{ __('Descripcion') }}
                  </label>
                  <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                      <input  wire:model.defer="descripcion" class="@if($errors->has('descripcion')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                      placeholder="Descripcion" type="text" autofocus autocomplete="descripcion"/>
                      
                        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                          <i class="fas fa-align-right fa-lg"></i>
                        </div>
                        </div> 
                   @error('descripcion')
                  <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                  @enderror
                </div>

                <div class="w-full px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold my-2" for="grid-first-name">
                  {{ __('Imagen') }}
                  </label>
                  <div class="space-y-1 text-center">
                      @if ($imagen)
                        Vista Previa:
                        <img src="{{ $imagen->temporaryUrl() }}">
                    @endif
                    @if ($imagen == "" && $temporal != "")
                    Imagen del Miembro
                   <img class="block" src="{{asset('resources/Miembros/'.$temporal)}}">
                   @endif 
                   <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm justify-center text-gray-600">
                      <label for="imagen" class="text-justify @if($errors->has('imagen')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif relative dark:bg-gray-900 cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>{{ __('Subir Imagen') }}</span>
                        <input id="imagen" class="sr-only" type="file" wire:model="imagen">
                      </label>
                      <p class="pl-1 dark:text-gray-400">Dar click aquí</p>
                    </div>
                    <p class="text-xs text-gray-500 dark:text-gray-400">
                      PNG, JPG, JPEG, ICO
                    </p>
                  </div>
                   
                   @error('imagen')
                  <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                  @enderror
                </div>

              <div class="w-full px-3 mb-6 md:mb-0">
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                 Estado
                </span>
                <select wire:model.defer="estado" class="@if($errors->has('estado')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                  <option value="Activo">Activo</option>
                  <option value="Inactivo" >Inactivo</option>
                </select>
              </label>
              @error('estado')
                <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>

        </div>
        </p>
    </x-slot>
    <x-slot name="footer">
      <x-jet-secondary-button wire:click="$toggle('mod')" wire:loading.attr="disabled">
        Cancelar
    </x-jet-secondary-button>
    @if($title != "Actualizar Miembro")
    <x-jet-danger-button class="ml-2" wire:click="Save()" wire:loading.attr="disabled">
        Crear Miembro
    </x-jet-danger-button>
    @else
    <x-jet-danger-button class="ml-2" wire:click="Update({{$Miembroid}})" wire:loading.attr="disabled">
        Actualizar Miembro
    </x-jet-danger-button>
    @endif
    </x-slot>
</x-jet-dialog-modal>

 

         

        @if($mensaje == true)  
        <div class="alert-toast fixed bottom-0 right-0 m-8 w-5/6 md:w-full max-w-sm">
          <input type="checkbox" class="hidden" id="footertoast" wire:click="alert">
      
          <label class="close cursor-pointer flex items-start justify-between w-full p-2 @if(!$error)bg-green-500 @else bg-red-500 @endif h-10 rounded shadow-lg text-white" title="close" for="footertoast">
           <span class="font-semibold"> @if(!$error)Exito @else Error @endif !!! </span> {{$caption}}
            <svg class="fill-current text-white mt-1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </label>
        </div>
        @endif
 


