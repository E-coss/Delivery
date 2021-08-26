<footer class="bg-white dark:bg-gray-800 mx-auto">
  <div class="mx-auto text-gray-400 dark:text-gray-300">
      <div class="relative bg-deep-purple-accent-400">
        <div class="text-center py-3 bg-purple-600 dark:bg-purple-600  font-light flex items-center justify-center">
          
           <form class="flex flex-col md:flex-row md:space-x-3 space-y-3 md:space-y-0 justify-center">
            <span class="md:mr-2 mt-2 text-xl font-bold tracking-wide text-gray-100 uppercase">Recibe información acerda de nuestras ofertas</span>
            <div class="relative"> 
                  <input type="text" id="&quot;form-subscribe-Subscribe" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Correo Electrónico"/>
                  </div>
                  <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-900 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
                      Subscribete
                  </button>
              </form>
          </div>
          <div class="pl-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl ">
            <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
              <div class="md:max-w-md lg:col-span-2">
                <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                  <img src="{{ asset('resources/'.$con->logo_frontend) }}" alt="FoodService" width="200" height="80">
                    </a>
                <div class="mt-4 lg:max-w-sm ">
                  <p class="text-sm text-gray-500 dark:text-gray-300">
                    {{ $con->eslogan }}
                  </p>
                  <p class="mt-4 text-sm text-gray-500 dark:text-gray-300">
                    {{ $no->descripcion }}
                  </p>
                </div>
              </div>
              <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                <div>
                  <p class="font-bold tracking-wide text-gray-500 text-teal-accent-400 dark:text-gray-200">
                    Secciones
                  </p>
                  <ul class="mt-2 space-y-2 text-gray-500 dark:text-gray-300">
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Menu</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Favoritos</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Carrito</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Platos</a>
                    </li>
                  </ul>
                </div>
                <div>
                  <p class="font-bold tracking-wide text-teal-accent-400 text-gray-500 dark:text-gray-200">Interes</p>
                  <ul class="mt-2 space-y-2 text-gray-500 dark:text-gray-300">
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Mapa</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Horario</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Ofertas</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Registrarse</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Iniciar sesión</a>
                    </li>
                  </ul>
                </div>
                <div>
                  <p class="font-bold tracking-wide text-teal-accent-400 text-gray-500 dark:text-gray-200">Socios</p>
                  <ul class="mt-2 space-y-2 text-gray-500 dark:text-gray-300">
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Induveca</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Jumbo</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Refrigerios</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Jugos</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">platanos</a>
                    </li>
                  </ul>
                </div>
                <div>
                  <p class="font-bold tracking-wide text-teal-accent-400 dark:text-gray-200 text-gray-500">
                    Business
                  </p>
                  <ul class="mt-2 space-y-2 text-gray-500 dark:text-gray-300">
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Infopreneur</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Personal</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Wiki</a>
                    </li>
                    <li>
                      <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Forum</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      <div class="pt-5 flex border-t border-gray-200 max-w-xs mx-auto items-center justify-between">
          <a href="{{ $con->facebook }}">
            <i class="fab fa-facebook-f text-xl hover:text-blue-600 transition-colors duration-200"></i> 
          </a>
          <a href="{{ $con->instagram }}">
            <i class="fab fa-instagram text-xl hover:text-pink-600 transition-colors duration-200"></i>
          </a>
          <a href="{{ $con->youtube }}">
            <i class="fab fa-youtube text-xl hover:text-red-600 transition-colors duration-200"></i>
          </a>
          <a href="{{ $con->twitter }}">
            <i class="fab fa-twitter text-xl hover:text-blue-500 transition-colors duration-200"></i> 
          </a>
           
      </div>
          
          <div class="text-center dark:bg-gray-900 mt-5 bg-gray-100 p-3 font-light flex items-center justify-center">
              © Copyright 2021 IamCreativo Inc. All rights reserved.
          </div>
      </div>
  </footer> 