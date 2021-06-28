<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  :class="{ 'theme-dark': dark }" x-data="data()">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Styles -->
    {{-- <script src="{{ asset('js/tailwind.config.js') }}" defer></script> --}}

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
   
    <link href="{{ asset('css/tailwind.output.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    <script src="{{ asset('js/init-alpine.js') }}" defer></script>
    {{-- <script src="{{ asset('js/focus-trap.js') }}" defer></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{ asset('js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('js/charts-pie.js') }}" defer></script>
    <script src="//code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen}"
    >
      <!-- Desktop sidebar -->
      @include('layouts.admin.menu')
      <!-- Mobile sidebar -->
      <!-- Backdrop -->

            <!-- Search input -->
            <div class="hidden sm:flex  justify-center flex-1 lg:mr-32">
              <div
                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
              >
                <div class="absolute inset-y-0 flex items-center pl-2">
                  <svg
                    class="w-4 h-4"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                
                <input
                  class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-none  dark:focus:bg-gray-500 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                  type="text"
                  placeholder="Search for projects"
                  aria-label="Search"
                />
              </div>
            </div>
            <ul class="flex items-center flex-shrink-0 space-x-4">
              <!-- Theme toggler -->
              <li class="hidden sm:flex " >
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
              <!-- Notifications menu -->
              <span class="hidden sm:inline-block">@livewire('notifications')</span>
              
              <div class="hidden sm:flex sm:items-center ">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
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

            </ul>
            
          </div>
          @livewire('navigation-dropdown')
          
         
        </header>
        <main class="h-full overflow-y-auto">
          <!-- Remove everything INSIDE this div to a really blank page -->
          <div class=" container px-6 mx-auto ">
                {{ $slot }}
          </div>
        </main>
      </div>
    </div>
    @stack('modals')
    @livewire('livewire-ui-modal')
    @livewireScripts
    
  </body>
</html>