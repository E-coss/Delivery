<div class="mb-4">
                          <!-- New Table -->
                          <div class="grid w-full overflow-hidden rounded-lg shadow-xs">
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
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="relative">
                                        <select wire:model="tipo"
                                            class="dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200  focus:bg-none  dark:focus:bg-gray-500 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input dark:bg-gray-800 dark:text-gray-200 appearance-none rounded-none border border-gray-500 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm  text-gray-700 focus:bg-none  focus:text-gray-400">
                                            <option>Usuarios</option>
                                            <option value="1">Administradores</option>
                                            <option value="2">Supervisores</option>
                                            <option value="3">Vendedores</option>
                                            <option value="4">Clientes</option>
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
                            </div>
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">Descripcion</th>
                                        <th class="px-4 py-3">Telefono</th>
                                        <th class="px-4 py-3">Sexo</th>
                                        <th class="px-4 py-3">Rol</th>
                                        <th class="px-4 py-3">Estado</th>
                                        <th class="px-4 py-3">Acciones</th>
                                       
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                  @foreach($users as $user)   
                                  <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
                                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">  {{$user->name}}</p>
                                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                                      {{$user->email}}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                          @foreach($user->telefono as $numero) 
                                          <p class="font-semibold">
                                          {{ $numero->tipo_telefono }} : {{ $numero->numero }}
                                          </p>
                                          @endforeach
                                        </td>
                                        <td class="px-4 py-3 text-xs">
                                           
                                              {{$user->sexo}}
                       
                                        </td>
                                        {{-- rol --}}
                                        <td class="px-4 py-3 text-sm">
                                          @foreach($user->roles as $rol)
                                          <span class="px-2 py-1 m-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                          {{$rol->name}}</span>
                                           @endforeach
                                        </td>

                                        <td class="px-4 py-3 text-sm">
                                          @if($user->estado == 1)
                                          <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                          Activo
                                           </span>
                                           @else
                                          <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                             Inactivo</span> 
                                             @endif
                                        </td>

                                        <td class="px-4 py-3 text-sm">
                                            <div class="flex items-center space-x-4 text-sm">
                                                <button @click="openModal" wire:click="MostrarUser({{$user->id}})" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"  aria-label="Edit" >
                                                  <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" >
                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" ></path>
                                                  </svg>
                                                </button>
                                                <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete" >
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
                            {{ $users->links('components.pagination-tailwind') }}

                            
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
      > <form wire:submit.prevent="AsignarRol({{$userid}})">
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex justify-between bg-gray-100 dark:bg-gray-700 px-6 pt-3 -mx-6 -mt-4">
          <p class="mb-2 text-lg font-semibold text-left text-gray-700 dark:text-gray-300" >
          Roles de Usuarios
            </p>
            <button class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700" aria-label="close" @click="closeModal" >
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true" >
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd" ></path>
            </svg>
          </button>
        </header>
        <!-- Modal body -->
        <div class="mt-4 mb-6">
       
          <!-- Modal title -->
           <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300" >
           Asignar / Eliminar Rol a 
           <b class="text-red-500">
            @if($modal==true)
                 {{$SwUser->name }} {{$SwUser->apellido}}
            @endif
            </b> 
          </p> 
          <!-- Modal description -->

          <p class="text-sm text-gray-700 dark:text-gray-400">
          <div class="flex flex-col">
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" wire:model="roles.{{1}}" class="form-checkbox h-5 w-5 text-blue-600" value="1"><span class="ml-2 text-gray-700">Administrador</span>
                </label>

                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" wire:model="roles.{{2}}" class="form-checkbox h-5 w-5 text-indigo-600" value="2"><span class="ml-2 text-gray-700">Supervisor</span>
                </label>

                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" wire:model="roles.{{3}}" class="form-checkbox h-5 w-5 text-purple-600" value="3"><span class="ml-2 text-gray-700">Vendedor</span>
                </label>

                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" wire:model="roles.{{4}}" class="form-checkbox h-5 w-5 text-pink-600" value="4"><span class="ml-2 text-gray-700">Cliente</span>
                </label>
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" wire:model="roles.{{5}}" class="form-checkbox h-5 w-5 text-green-600" value="5"><span class="ml-2 text-gray-700">Delivery</span>
                </label>
                </div>
          </p>
        
        </div>
        <footer class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-700" >
          <button @click="closeModal" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray" >
            Cancelar
          </button>
          <button type="submit" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" >
            Aceptar
          </button>
          </form>
        </footer>
        
      </div>
    </div>
</div>

