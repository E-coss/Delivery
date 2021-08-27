<div class="mb-4">
    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
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
                      <option value="Disponible">Disponible</option>
                      <option value="Agotado">Agotado</option>
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
          <button type="button" @click="openModalNew"  class="w-full px-5 py-3 lg:ml-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </button>
      </div>
      <table class="w-full whitespace-no-wrap">
          <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                  <th class="px-4 py-3">Nombre</th>
                  <th class="px-4 py-3">Descripcion</th>
                  <th class="px-4 py-3">Precio Compra</th>
                  <th class="px-4 py-3">Precio Venta</th>
                  <th class="px-4 py-3">Estado</th>
                  <th class="px-4 py-3">Acciones</th>
                 
              </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach($Productos as $producto)   
            <tr class="text-gray-700 dark:text-gray-400">
                  <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                          <div>
                              <p class="font-semibold">  {{$producto->nombre}}</p>
                          </div>
                      </div>
                  </td>

                  <td class="px-4 py-3 text-sm">
                    {{ $producto->descripcion }}
                  </td>

                  <td class="px-4 py-3 text-sm">
                    {{ $producto->precio_compra }}
                  </td>

                  <td class="px-4 py-3 text-sm">
                    {{ $producto->precio_venta }}
                  </td>
                  
                  <td class="px-4 py-3 text-sm">
                    @if($producto->estado == "Disponible")
                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                        Disponible
                     </span>
                     @else
                    <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                       Agotado</span> 
                       @endif
                  </td>

                  <td class="px-4 py-3 text-sm">
                      <div class="flex items-center space-x-4 text-sm">
                          <button type="button" @click="openModal" wire:click="MostrarProductos({{$producto->id}})" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"  aria-label="Edit" >
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" >
                              <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" ></path>
                            </svg>
                          </button>
                          <button type="button" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete" >
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" >
                              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" ></path>
                            </svg>
                          </button>
                        </div>
                    </td>
              </tr>
              @endforeach
          </tbody>
         
      </table>
          
      </div>
      {{ $Productos->links('components.pagination-tailwind') }}

      
  </div>

          <!-- Modal backdrop. This what you want to place close to the closing body tag -->
          <div wire:ignore.self
          x-show="isModalNewOpen"
          x-transition:enter="transition ease-out duration-150"
          x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100"
          x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0"
          class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
          >
          <!-- Modal -->
          <div
          x-show="isModalNewOpen"
          x-transition:enter="transition ease-out duration-150"
          x-transition:enter-start="opacity-0 transform translate-y-1/2"
          x-transition:enter-end="opacity-100"
          x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0  transform translate-y-1/2"
          @click.away="closeModalNew"
          @keydown.escape="closeModalNew"
          class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
          role="dialog"
          id="modalNew"
          > <form wire:submit.prevent="Save()">
          <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
          <header class="flex justify-between bg-gray-100 dark:bg-gray-700 px-6 pt-3 -mx-6 -mt-4">
          <p class="mb-2 text-lg font-semibold text-left text-gray-700 dark:text-gray-300" >
          Datos de la producto
          </p>
          <button type="reset" class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700" aria-label="closes" @click="closeModalNew" >
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true" >
          <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd" ></path>
          </svg>
          </button>
          </header>
          <!-- Modal body -->
          <div class="mt-4 mb-6">
  
          <!-- Modal title -->
          <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300" >
          Agregar producto 
          </p> 
          <!-- Modal description -->
  
          <p class="text-sm text-gray-700 dark:text-gray-400">
          <div class="flex flex-wrap -mx-3 mb-3">
              <div class="w-50 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-first-name">
                  {{ __('Nombre') }}
                  </label>
                  <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                      <input  wire:model.defer="nombre" class="@if($errors->has('nombre')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
              placeholder="Nombre de la producto" type="text" autofocus autocomplete="nombre"/>
                        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                          <i class="fas fa-align-right fa-lg"></i>
                        </div>
                        </div> 
                   @error('nombre')
                  <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                  @enderror
                  
                </div>
  
           
                <div class="w-50 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold my-2" for="grid-first-name">
                  {{ __('Descripción') }}
                  </label>
                  <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                      <input  wire:model.defer="descripcion" class="@if($errors->has('descripcion')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                      placeholder="Descripción del producto" type="text" autofocus autocomplete="descripcion"/>
                      
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
                    {{ __('Slug') }}
                    </label>
                    <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                        <input  wire:model.defer="slug" class="@if($errors->has('slug')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                        placeholder="Descripción de la etiqueta del producto" type="text" autofocus autocomplete="slug"/>
                        
                          <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                            <i class="fas fa-align-right fa-lg"></i>
                          </div>
                          </div> 
                     @error('slug')
                    <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                  </div>

                  <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold my-2" for="grid-first-name">
                    {{ __('Precio de Compra') }}
                    </label>
                    <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                        <input  wire:model.defer="precio_compra" class="@if($errors->has('precio_compra')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                        placeholder="Precio de compra del producto" type="text" autofocus autocomplete="precio_compra"/>
                        
                          <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                            <i class="fas fa-align-right fa-lg"></i>
                          </div>
                          </div> 
                     @error('precio_compra')
                    <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                  </div>

                  <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold my-2" for="grid-first-name">
                    {{ __('Precio de Venta') }}
                    </label>
                    <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                        <input  wire:model.defer="precio_venta" class="@if($errors->has('precio_venta')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                        placeholder="Precio de venta del producto" type="text" autofocus autocomplete="precio_venta"/>
                        
                          <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                            <i class="fas fa-align-right fa-lg"></i>
                          </div>
                          </div> 
                     @error('precio_venta')
                    <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                  </div>

                  <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold my-2" for="grid-first-name">
                    {{ __('Imagen') }}
                    </label>
                    <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                        <input  wire:model.defer="imagen" class="@if($errors->has('imagen')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                        placeholder="Imagen del producto" type="file" autofocus autocomplete="imagen"/>
                        
                          <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                            <i class="fas fa-align-right fa-lg"></i>
                          </div>
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
                    <option value="Disponible">Disponible</option>
                    <option value="Agotado" >Agotado</option>
                  </select>
                </label>
                @error('estado')
                  <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                  @enderror
                </div>
  
          </div>
          </p>
  
          </div>
          <footer class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-700" >
          <button type="reset" @click="closeModalNew" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray" >
          Cancelar
          </button>
          <button type="submit" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" >
          Aceptar
          </button>
        </footer>
          </form>
          
  
          </div>
          </div>


          
        <!-- Modal backdrop. This what you want to place close to the closing body tag -->
        <div wire:ignore.self
        x-show="isModalOpen"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
        >
        <!-- Modal -->
        <div
        x-show="isModalOpen"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform translate-y-1/2"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0  transform translate-y-1/2"
        @click.away="closeModal"
        @keydown.escape="closeModal"
        class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
        role="dialog"
        id="modal"
        > <form wire:submit.prevent="Update({{$Productosid}})">
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex justify-between bg-gray-100 dark:bg-gray-700 px-6 pt-3 -mx-6 -mt-4">
        <p class="mb-2 text-lg font-semibold text-left text-gray-700 dark:text-gray-300" >
        Datos de la producto
        </p>
        <button type="reset" class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700" aria-label="close" @click="closeModal" >
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true" >
        <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd" ></path>
        </svg>
        </button>
        </header>
        <!-- Modal body -->
        <div class="mt-4 mb-6">

        <!-- Modal title -->
        <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300" >
        Actualizar producto 
        </p> 
        <!-- Modal description -->

        <p class="text-sm text-gray-700 dark:text-gray-400">
        <div class="flex flex-wrap -mx-3 mb-3">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-first-name">
                {{ __('Nombre') }}
                </label>
                <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                    <input  wire:model.defer="SwProductos.nombre" class="@if($errors->has('SwProductos.nombre')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-500 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
            placeholder="Nombre de la producto" type="text" autofocus autocomplete="nombre"/>
                      <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                        <i class="fas fa-align-right fa-lg"></i>
                      </div>
                      </div> 
                 @error('SwProductos.nombre')
                <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>

         
              <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold my-2" for="grid-first-name">
                {{ __('Descripción') }}
                </label>
                <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                    <input  wire:model.defer="SwProductos.descripcion" class="@if($errors->has('SwProductos.descripcion')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-500 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                    placeholder="Descripción de la producto" type="text" autofocus autocomplete="descripcion"/>
                    </label>
                      <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                        <i class="fas fa-align-right fa-lg"></i>
                      </div>
                      </div> 
                 @error('SwProductos.descripcion')
                <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>

              <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold my-2" for="grid-first-name">
                {{ __('Slug') }}
                </label>
                <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                    <input  wire:model.defer="SwProductos.slug" class="@if($errors->has('SwProductos.slug')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                    placeholder="Descripción de la etiqueta del producto" type="text" autofocus autocomplete="slug"/>
                    
                      <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                        <i class="fas fa-align-right fa-lg"></i>
                      </div>
                      </div> 
                 @error('SwProductos.slug')
                <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>

              <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold my-2" for="grid-first-name">
                {{ __('Precio de Compra') }}
                </label>
                <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                    <input  wire:model.defer="SwProductos.precio_compra" class="@if($errors->has('SwProductos.precio_compra')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                    placeholder="Precio de compra del producto" type="text" autofocus autocomplete="precio_compra"/>
                    
                      <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                        <i class="fas fa-align-right fa-lg"></i>
                      </div>
                      </div> 
                 @error('SwProductos.precio_compra')
                <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>

              <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold my-2" for="grid-first-name">
                {{ __('Precio de Venta') }}
                </label>
                <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                    <input  wire:model.defer="SwProductos.precio_venta" class="@if($errors->has('SwProductos.precio_venta')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                    placeholder="Precio de venta del producto" type="text" autofocus autocomplete="SwProductos.precio_venta"/>
                    
                      <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                        <i class="fas fa-align-right fa-lg"></i>
                      </div>
                      </div> 
                 @error('SwProductos.precio_venta')
                <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>

              <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold my-2" for="grid-first-name">
                {{ __('Imagen') }}
                </label>
                <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                    <input  wire:model.defer="SwProductos.imagen" class="@if($errors->has('SwProductos.imagen')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                    placeholder="Imagen del producto" type="file" autofocus autocomplete="imagen"/>
                    
                      <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                        <i class="fas fa-align-right fa-lg"></i>
                      </div>
                      </div> 
                 @error('SwProductos.imagen')
                <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>

              <div class="w-full px-3 mb-6 md:mb-0">
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                 Estado
                </span>
                <select wire:model.defer="SwProductos.estado" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-500 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <option value="Disponible">Disponible</option>
                    <option value="Agotado" >Agotado</option>
                </select>
              </label>
              </div>

        </div>
        </p>

        </div>
        <footer type="reset" class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-700" >
        <button @click="closeModal" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray" >
        Cancelar
        </button>
        <button type="submit" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" >
        Aceptar
        </button>
    </footer>
        </form>
         
        </div>
        </div>

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
</div>


