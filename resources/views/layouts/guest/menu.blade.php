<!--Nav-->
<nav id="header" class="w-full z-30 top-0 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#">Shop</a></li>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#">About</a></li>
                        @auth  
                        <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                     
                <button class="md:hidden flex py-2 px-4 text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                {{ Auth::user()->name }}
                            </button>
                        </x-slot>
    
                        <x-slot name="content" >
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs font-bold text-gray-400 dark:text-gray-300">
                                {{ __('Manage Account') }}
                            </div>
    
                            <x-jet-dropdown-link href="{{ route('profile.show') }}" class="font-semibold dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                              <span><i class="fas fa-user-cog dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200 pr-2"></i></span>
                              {{ __('Profile') }}
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
                                    {{ __('Manage Team') }}
                                </div>
    
                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" class="font-semibold dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                  <span><i class="fas fa-users-cog dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200 pr-2"></i></span>
                                  {{ __('Team Settings') }}
                                </x-jet-dropdown-link>
    
                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <x-jet-dropdown-link href="{{ route('teams.create') }}" class="font-semibold dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                      <span><i class="fas fa-plus dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200  pr-3"></i></span>  
                                      {{ __('Create New Team') }}
                                    </x-jet-dropdown-link>
                                @endcan
    
                                <div class="border-t border-gray-100"></div>
    
                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400 font-bold dark:text-gray-300" >
                                    {{ __('Switch Teams') }}
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
                                    {{ __('Logout') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                    @endauth  
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="{{ url('/') }}">
                    <svg class="fill-current text-gray-800 mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                    </svg>
                    NORDICS
                </a>
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">

                <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                        <circle cx="10.5" cy="18.5" r="1.5" />
                        <circle cx="17.5" cy="18.5" r="1.5" />
                    </svg>
                </a>
                
                @auth
                <div class="hidden sm:flex sm:items-center ">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                        <a class="inline-block  no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black ml-5 mt-1.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
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
                                {{ __('Manage Account') }}
                            </div>
    
                            <x-jet-dropdown-link href="{{ route('profile.show') }}" class="font-semibold dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                              <span><i class="fas fa-user-cog dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200 pr-2"></i></span>
                              {{ __('Profile') }}
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
                                    {{ __('Manage Team') }}
                                </div>
    
                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" class="font-semibold dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                  <span><i class="fas fa-users-cog dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200 pr-2"></i></span>
                                  {{ __('Team Settings') }}
                                </x-jet-dropdown-link>
    
                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <x-jet-dropdown-link href="{{ route('teams.create') }}" class="font-semibold dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                      <span><i class="fas fa-plus dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-gray-200  pr-3"></i></span>  
                                      {{ __('Create New Team') }}
                                    </x-jet-dropdown-link>
                                @endcan
    
                                <div class="border-t border-gray-100"></div>
    
                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400 font-bold dark:text-gray-300" >
                                    {{ __('Switch Teams') }}
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
                                    {{ __('Logout') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endauth
                @guest
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                  </svg>
                </a>
                  @endguest

                {{-- <a class="inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3" />
                        <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                    </svg>
                </a> --}}


            </div>
        </div>
    </nav>