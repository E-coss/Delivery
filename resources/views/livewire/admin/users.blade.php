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
