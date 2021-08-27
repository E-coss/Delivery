
<nav id="header" class="w-full z-30 fixed top-0 py-1 dark:bg-gray-800 bg-white">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block text-gray-700 dark:text-gray-200">
                <svg class="dark:text-gray-200 fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-800 dark:text-gray-300 pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-gray-500 hover:underline py-2 px-4" href="#">Tienda</a></li>
                        <li><a class="inline-block no-underline hover:text-gray-500 hover:underline py-2 px-4" href="#">Acerca de</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center ml-1 inline-block align-middle tracking-wide no-underline hover:no-underline font-bold text-gray-800 dark:text-gray-300 text-xl " href="{{ url('/') }}">
                  <img src="{{ asset('resources/'.$con->logo_frontend) }}" class="inline-block h-10 sm:h-14 align-middle w-auto" alt="FoodService"> 
                </a>
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">
            
            <ul class="flex items-center text-gray-800 hover:text-gray-500 dark:text-gray-300 flex-shrink-0 space-x-4">
              <!-- Theme toggler -->
              <li class="flex" >
                <button
                  class="rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleTheme"
                  aria-label="Toggle color mode"
                >
                  <template x-if="!dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                      ></path>
                    </svg>
                  </template>
                  <template x-if="dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </template>
                </button>
              </li>
            </ul>

                <a class="pl-3 inline-block no-underline text-gray-800 dark:text-gray-300 hover:text-gray-500" href="#">
                    <svg class="fill-current hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                        <circle cx="10.5" cy="18.5" r="1.5" />
                        <circle cx="17.5" cy="18.5" r="1.5" />
                    </svg>
                </a>
                
                @auth
                <div class="flex items-center text-gray-800 dark:text-gray-300">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                        <a class="inline-block  no-underline hover:text-gray-500" href="#">
                            <svg class="fill-current hover:text-gray-500 ml-5 mt-1.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <circle fill="none" cx="12" cy="7" r="3" />
                                <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                            </svg>
                        </a>
                <!-- <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button> -->
                        </x-slot>
    
                        <x-slot name="content" >
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs font-bold text-gray-400 dark:text-gray-300">
                                {{ __('Lgeneral.Manage Account') }}
                            </div>
    
                            <x-jet-dropdown-link href="{{ route('profile.show') }}" class="font-semibold dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                              <span><i class="fas fa-user-cog dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200 pr-2"></i></span>
                              {{ __('perfil.Profile') }}
                            </x-jet-dropdown-link>
    
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}" class="font-semibold dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                  <span><i class="fas fa-cog dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200 pr-2"></i></span> 
                                  {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif
    
                            <div class="border-t border-gray-100"></div>
    
                            <!-- Team Management -->
                            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                <div class="block px-4 py-2 text-xs font-bold text-gray-400 dark:text-gray-300">
                                    {{ __('Lgeneral.Manage Team') }}
                                </div>
    
                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" class="font-semibold dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                  <span><i class="fas fa-users-cog dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200 pr-2"></i></span>
                                  {{ __('Lgeneral.Team Settings') }}
                                </x-jet-dropdown-link>
    
                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <x-jet-dropdown-link href="{{ route('teams.create') }}" class="font-semibold dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                      <span><i class="fas fa-plus dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200  pr-3"></i></span>  
                                      {{ __('Lgeneral.Create New Team') }}
                                    </x-jet-dropdown-link>
                                @endcan
    
                                <div class="border-t border-gray-100"></div>
    
                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400 font-bold dark:text-gray-300" >
                                    {{ __('Lgeneral.Create New Team') }}
                                </div>
    
                                @foreach (Auth::user()->allTeams() as $team)
                                    <x-switchable-team :team="$team" />
                                @endforeach
    
                                <div class="border-t border-gray-100"></div>
                            @endif
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-jet-dropdown-link class="font-semibold dark:hover:bg-gray-800 dark:text-gray-300 dark:hover:text-gray-200" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                   <span><i class="fas fa-sign-out-alt pr-3"></i></span>
                                    {{ __('Lgeneral.Logout') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endauth
                @guest
                <a href="{{ route('login') }}" class="text-sm text-gray-800 dark:text-gray-300 hover:text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                  </svg>
                </a>
                  @endguest

                {{-- <a class="inline-block no-underline text-gray-800 dark:text-gray-300 hover:text-gray-500" href="#">
                    <svg class="fill-current hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3" />
                        <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                    </svg>
                </a> --}}


            </div>
        </div>
    </nav>