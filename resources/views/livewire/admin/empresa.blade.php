<div>
            <div class="w-full">
              @if ($errors->any()) 
                  <div class="font-medium text-red-600 mb-3" >{{ __('Lgeneral.Whoops! Something went wrong.') }}</div>
              @endif

        <form wire:submit.prevent="Empresa()">
            @csrf

            <div class="flex flex-wrap -mx-3 mb-3">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-first-name">
                {{ __('Nombre') }}
                </label>
                <input class="block w-full mt-1 text-sm @error('con.nombre') border-red-500 dark:border-red-500 @else dark:border-gray-500 @enderror dark:bg-gray-700 focus:border-purple-500 focus:outline-none focus:shadow-outline-purple dark:text-gray-300  dark:focus:shadow-outline-gray form-input" 
                placeholder="Jane" type="text" wire:model="con.nombre" autofocus autocomplete="nombre" />
                 
                 @error('con.nombre')
                <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>

              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-direccion">
                {{ __('Direccion') }}
                </label>
                <input class="block w-full mt-1 text-sm @if($errors->has('con.direccion')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                placeholder="Calle Duverge #13" type="text" wire:model="con.direccion"  autofocus autocomplete="direccion"/> 
                @error('con.direccion')
                <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-3">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-direccion">
                    {{ __('Eslogan') }}
                    </label>
                    <input class="block w-full mt-1 text-sm @if($errors->has('con.eslogan')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    placeholder="La vida es buena" type="text" wire:model="con.eslogan"  autofocus autocomplete="eslogan"/> 
                    @error('con.eslogan')
                    <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-apellido">
                {{ __('perfil.Email') }}
                </label>
                <input class="block w-full mt-1 text-sm @if($errors->has('con.email')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                placeholder="Miempresa@gmail.com" wire:model="con.email" autofocus autocomplete="email" type="email"/>  
                @error('con.email')
                    <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
              </div>
            </div>

            
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"> Redes Sociales  </h4> 
            <div class="flex flex-wrap -mx-3 mb-3">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                           <!-- Inputs with icons -->
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Facebook</span>
              <!-- focus-within sets the color for the icon when input is focused -->
              <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400" >
                <input class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="https://url.com" />
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >
                    <i class="fab fa-facebook-f fa-lg"></i>
                </div>
              </div>
            </label> 
            
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <!-- Inputs with icons --> 
                <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Instagram</span>
                <!-- focus-within sets the color for the icon when input is focused -->
                <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400" >
                    <input class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="https://url.com" />
                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >
                        <i class="fab fa-instagram fa-lg"></i>
                    </div>
                </div>
                </label> 3b5998 
                
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-3">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                             <!-- Inputs with icons -->
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Youtube</span>
                <!-- focus-within sets the color for the icon when input is focused -->
                <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400" >
                  <input class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="https://url.com" />
                  <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >
                    <i class="fab fa-youtube fa-lg"></i>
                  </div>
                </div>
              </label> 
              
              </div>
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <!-- Inputs with icons --> 
                  <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Twitter</span>
                  <!-- focus-within sets the color for the icon when input is focused -->
                  <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400" >
                      <input class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="https://url.com" />
                      <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >
                        <i class="fab fa-twitter fa-lg"></i>
                      </div>
                  </div>
                  </label> 
                  
                  </div>
              </div>
              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              {{ __('Guardar Cambios') }}
              </button>

        </form>
            </div>
</div>
