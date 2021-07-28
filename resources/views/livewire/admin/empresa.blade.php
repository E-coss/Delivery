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
                <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                    <input class="@if($errors->has('con.direccion')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                    placeholder="Jane" type="text" wire:model="con.nombre" autofocus autocomplete="nombre"/>     
                      <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                      <i class="far fa-building fa-lg"></i>
                      </div>
                      </div> 
                 @error('con.nombre')
                <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>

              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-direccion">
                {{ __('Direccion') }}
                </label>
                <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                    <input class="@if($errors->has('con.direccion')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                    placeholder="Calle Duverge #13" type="text" wire:model="con.direccion"  autofocus autocomplete="direccion"/>     
                      <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                      <i class="fas fa-map-marker-alt fa-lg"></i>
                      </div>
                      </div>
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
                    <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                    <input class="@if($errors->has('con.eslogan')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                    placeholder="La vida es buena" type="text" wire:model="con.eslogan"  autofocus autocomplete="eslogan" />     
                      <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" > 
                      <i class="fas fa-quote-left fa-lg"></i>
                      </div>
                      </div>
                    @error('con.eslogan')
                    <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-apellido">
                {{ __('perfil.Email') }}
                </label>
                <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                      <input class="@if($errors->has('con.email')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                      placeholder="Miempresa@gmail.com" wire:model="con.email" autofocus autocomplete="email" type="email" />     
                      <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >
                      <i class="far fa-envelope fa-lg"></i>
                      </div>
                  </div>
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
              <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400" >
                <input class="@if($errors->has('con.facebook')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:bg-gray-700 focus:border-blue-500 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-blue form-input" placeholder="https://url.com" wire:model="con.facebook" autofocus type="url" />
               
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >
                    <i class="fab fa-facebook-f fa-lg text-blue-600"></i>
                </div> 
              </div>
                @error('con.facebook')
                <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </label> 
            
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <!-- Inputs with icons --> 
                <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Instagram</span>
                <!-- focus-within sets the color for the icon when input is focused -->
                <div class="relative text-gray-500 focus-within:text-pink-500 dark:focus-within:text-pink-500" >
                    <input class="@if($errors->has('con.instagram')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:bg-gray-700 focus:border-pink-400 focus:outline-none focus:shadow-outline-pink dark:focus:shadow-outline-pink form-input" placeholder="https://url.com" wire:model="con.instagram" autofocus type="url" />
                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >
                        <i class="fab fa-instagram fa-lg text-pink-500"></i>
                    </div>
                </div>
                @error('con.instagram')
                    <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </label>
                
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-3">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                             <!-- Inputs with icons -->
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Youtube</span>
                <!-- focus-within sets the color for the icon when input is focused -->
                <div class="relative text-gray-500 focus-within:text-red-600 dark:focus-within:text-red-400" >
                  <input class="@if($errors->has('con.youtube')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-red form-input" placeholder="https://url.com" wire:model="con.youtube" autofocus type="url" />     
                  <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >
                    <i class="fab fa-youtube fa-lg text-red-500"></i>
                  </div>
                </div>
                @error('con.youtube')
                  <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                  @enderror
              </label> 
              
              </div>
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <!-- Inputs with icons --> 
                  <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Twitter</span>
                  <!-- focus-within sets the color for the icon when input is focused -->
                  <div class="relative text-gray-500 focus-within:text-blue-500 dark:focus-within:text-blue-500" >
                      <input class="@if($errors->has('con.twitter')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:bg-gray-700 focus:border-sky-400 focus:outline-none focus:shadow-outline-sky dark:focus:shadow-outline-sky form-input" placeholder="https://url.com" wire:model="con.twitter" autofocus type="url" />     
                      <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >
                        <i class="fab fa-twitter fa-lg text-blue-400"></i>
                      </div>
                  </div>
                  @error('con.twitter')
                  <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                  @enderror
                </label> 
              </div>
                  </div>
                  <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                {{ __('Guardar Cambios') }}
                </button>
          </form>
              </div>
              

        <h3 class="mb-4 mt-6 text-2xl font-semibold text-gray-600 dark:text-gray-300"> Logos </h3> 

        <div class="flex flex-wrap -mx-3 mb-5">
        <div class="w-full sm:w-1/2 lg:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
            Favicon
          </label>
         
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-400 border-dashed rounded-md">
          
            <div class="space-y-1 text-center">
            <form wire:submit.prevent="favicon">
            <div class="space-y-1 text-center">
              @if ($favicon)
            <img class="block" src="{{ $favicon->temporaryUrl() }}">
             @else
             <img class="block" src="{{asset('resources/'.$con->favicon)}}">
             @endif 
             <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm justify-center text-gray-600">
                <label for="favicon" class="text-justify relative dark:bg-gray-900 cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <span>{{ __('Subir Imagen') }}</span>
                  <input id="favicon" class="sr-only" type="file" wire:model="favicon">
                </label>
                <p class="pl-1 dark:text-gray-400">Dar click aquí</p>
              </div>
              <p class="text-xs text-gray-500 dark:text-gray-400">
                PNG, JPG, JPEG, ICO
              </p>
            </div>
            <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              {{ __('Guardar Cambios') }}
              </button>
          </form>
          </div>
          </div>
          @error('favicon')
      <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
            Logo Administrativo
          </label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-400 border-dashed rounded-md">
            <div class="space-y-1 text-center">
              <form wire:submit.prevent="logo_admin">
                <div class="space-y-1 text-center">
                @if ($logo_admin)
                  <img class="block" src="{{ $logo_admin->temporaryUrl() }}">
                @else
                <img class="block" src="{{asset('resources/'.$con->logo_admin)}}">
                @endif 
              <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm justify-center text-gray-600">
                <label for="logo_admin" class="relative dark:bg-gray-900 cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <span>{{ __('Subir Imagen') }}</span>
                  <input id="logo_admin" type="file" wire:model="logo_admin" class="sr-only">
                </label>
                <p class="pl-1 dark:text-gray-400">Dar click aquí</p>
              </div>
              <p class="text-xs text-gray-500 dark:text-gray-400">
              PNG, JPG, JPEG, ICO
              </p>
            </div>
            <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              {{ __('Guardar Cambios') }}
              </button>
          </form>
            </div>
          </div>
          @error('logo_admin')
          <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/3 px-3 mb-6 md:mb-0 ">
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
            Logo Principal
          </label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-400 border-dashed rounded-md">
            <div class="space-y-1 text-center">
              <form wire:submit.prevent="logo_frontend">
                <div class="space-y-1 text-center">
                @if ($logo_frontend)
                  <img class="block" src="{{ $logo_frontend->temporaryUrl() }}">
                @else
                <img class="block" src="{{asset('resources/'.$con->logo_frontend)}}">
                @endif 
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm justify-center text-gray-600">
                <label for="logo_frontend" class="relative dark:bg-gray-900 cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <span>{{ __('Subir Imagen') }}</span>
                  <input id="logo_frontend" type="file" wire:model="logo_frontend" class="sr-only">
                </label>
                <p class="pl-1 dark:text-gray-400">Dar click aquí</p>
              </div>
              <p class="text-xs text-gray-500 dark:text-gray-400">
              PNG, JPG, JPEG, ICO
              </p>
            </div>
            <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              {{ __('Guardar Cambios') }}
              </button>
          </form>
          </div> 
        </div>
        @error('logo_frontend')
          <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
            @enderror

      </div> 
      
    </div>
    @if($mensaje == true)  
    <div class="alert-toast fixed bottom-0 right-0 m-8 w-5/6 md:w-full max-w-sm">
      <input type="checkbox" class="hidden" id="footertoast" wire:click="alert">
  
      <label class="close cursor-pointer flex items-start justify-between w-full p-2 bg-green-500 h-12 rounded shadow-lg text-white" title="close" for="footertoast">
       <span class="bold"> Aviso !!! </span> {{$caption}}
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
      </label>
    </div>
    @endif
    {{-- <div x-data="{ show: true }" x-show="show"
    class="flex justify-between items-center bg-green-200 relative text-yellow-600 py-1 px-3 mb-3 rounded-lg">
    <div>
        <span class="font-semibold text-yellow-700">Aviso !!!</span>
        Imagen Guardada Correctamente!
    </div>
    <div>
        <button type="button" @click="show = false" class=" text-yellow-700">
            <span class="text-2xl">&times;</span>
        </button>
    </div>
</div> --}}

</div>
