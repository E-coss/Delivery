
    <div class="w-full">
        @if ($errors->any()) 
            <div class="font-medium text-red-600 mb-3" >{{ __('Lgeneral.Whoops! Something went wrong.') }}</div>
        @endif

  <form wire:submit.prevent="Save()">
      @csrf

      <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-first-name">
          {{ __('Descripción') }}
          </label>
          <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
              <textarea rows="5" class="@if($errors->has('nos.descripcion')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
              placeholder="Descripción de la empresa" type="text" wire:model="nos.descripcion" autofocus autocomplete="descripcion"></textarea>     
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                <i class="far fa-building fa-lg"></i>
                </div>
                </div> 
                @error('nos.descripcion')
                <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
        </div>

        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-direccion">
          {{ __('Misión') }}
          </label>
          <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
              <textarea rows="5" class="@if($errors->has('nos.mision')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
              placeholder="Misión de la empresa" type="text" wire:model.debounce.1000ms="nos.mision"  autofocus autocomplete="mision">   </textarea>  
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >  
                  <i class="fas fa-chart-line fa-lg"></i>
                </div>
                </div>
          @error('nos.mision')
          <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-direccion">
              {{ __('Visión') }}
              </label>
              <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
              <textarea rows="5" class="@if($errors->has('nos.vision')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
              placeholder="Visión de la empresa" type="text" wire:model.debounce.1000ms="nos.vision"  autofocus autocomplete="vision"> </textarea>
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" > 
                  <i class="far fa-eye fa-lg"></i> 
                </div>
                </div>
              @error('nos.vision')
              <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
              @enderror
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="grid-apellido">
          {{ __('Valores') }}
          </label>
          <div class="relative text-gray-500 focus-within:text-purple-500 dark:focus-within:text-purple-500" >
                <textarea rows="5" class="@if($errors->has('nos.valores')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-purple form-input"
                placeholder="Valores de la empresa" wire:model.debounce.1000ms="nos.valores" autofocus autocomplete="valores" > </textarea>  
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >
                  <i class="far fa-heart fa-lg"></i> 
                </div>
            </div>
          @error('nos.valores')
              <p class="mt-1 text-red-500 text-xs italic">{{ $message }}</p>
              @enderror
        </div>
      </div>

      <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"> MAPA  </h4> 

      <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full px-3 mb-6 md:mb-0">
                     <!-- Inputs with icons -->
      <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Iframe</span>
        <!-- focus-within sets the color for the icon when input is focused -->
        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400" >
          <textarea rows="5" class="@if($errors->has('nos.iframe')) border-red-500 dark:border-red-500 @else dark:border-gray-500 @endif block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:bg-gray-700 focus:border-blue-500 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-blue form-input" 
          placeholder="iframe" wire:model.debounce.1000ms="nos.iframe" autofocus > </textarea>
         
          <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none" >
              <i class="fas fa-map-marker-alt fa-lg"></i> 
          </div> 
        </div>
          @error('nos.iframe')
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
        