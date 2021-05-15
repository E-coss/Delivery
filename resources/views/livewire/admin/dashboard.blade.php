<div>
<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
      <!-- Card -->
      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <div
          class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
            ></path>
          </svg>
        </div>
        <div>
          <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
          >
            Clientes
          </p>
          <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
          >
            {{$usersCount}}
          </p>
        </div>
      </div>
      <!-- Card -->
      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <div
          class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </div>
        <div>
          <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
          >
            Balance
          </p>
          <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
          >
            $ 46,760.89
          </p>
        </div>
      </div>
      <!-- Card -->
      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <div
          class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
            ></path>
          </svg>
        </div>
        <div>
          <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
          >
            Nuevas ventas
          </p>
          <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
          >
            376
          </p>
        </div>
      </div>
      <!-- Card -->
      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <div
          class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </div>
        <div>
          <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
          >
            Pedidos Pendientes
          </p>
          <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
          >
            35
          </p>
        </div>
      </div>
    </div>

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
                                          <option>Activo</option>
                                          <option>Inactivo</option>
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
                                          <th class="px-4 py-3">Status</th>
                                         
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
                                            {{$rol->rol}}</span>
                                             @endforeach
                                          </td>

                                          <td class="px-4 py-3 text-sm">
                                            @if($user->estado == "Activo")
                                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            {{$user->estado}}
                                             </span>
                                             @else
                                            <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                              {{$user->estado}}</span>
                                            @endif
                                          </td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                                 
                              </table>
                              
                              
                            
                             
                          </div>
                          {{ $users->links('components.pagination-tailwind') }}
                      </div>
</div>