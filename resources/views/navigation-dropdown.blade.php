<nav  class="dark:bg-gray-700 pl-2 dark:text-gray-200 bg-white sm:hidden">
    <!-- Primary Navigation Menu -->
    
    <div class="px-0">
        
        <div class="flex justify-between h-16">
            {{-- <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Lgeneral.Dashboard') }}
                    </x-jet-nav-link>
                </div>
            </div> --}}

            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

               
            </div>
            <!-- Settings Dropdown -->


            <!-- Hamburger -->
            <div class=" flex items-center sm:hidden dark:text-purple-300 text-purple-500">
                <!-- Theme -->
                <button
                  class="mx-2 rounded-md focus:outline-none focus:shadow-outline-purple"
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
              {{-- notificaciones --}}
                @livewire('notifications')
              {{-- notificaciones --}}
                <button @click="open = ! open" class=" inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{-- opciones --}}
            
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-1 pb-1 space-y-1 ">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Lgeneral.Dashboard') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-1 pb-1 space-y-1 ">
            <x-responsive-nav-link href="{{ route('users') }}" :active="request()->routeIs('users')">
                {{ __('Lgeneral.users') }}
            </x-responsive-nav-link>
        </div>

        
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>

                <div class="ml-3">
                    <div class="dark:text-gray-300 font-bold text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="dark:text-gray-400 font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link class="dark:text-gray-200 text-gray-600 hover:text-gray-800 dark:hover:text-gray-200" href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    <span><i class="fas fa-user-cog pr-2"></i></span>
                    {{ __('perfil.Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link class="dark:text-gray-200 text-gray-600 hover:text-gray-800 dark:hover:text-gray-200" href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        <span><i class="fas fa-cog  pr-2"></i></span> 
                         {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link class="dark:text-gray-200 text-gray-600 hover:text-gray-800 dark:hover:text-gray-200"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <span><i class="fas fa-sign-out-alt pr-3"></i></span>
                        {{ __('Lgeneral.Logout') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs font-bold text-gray-400">
                        {{ __('Lgeneral.Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link class="dark:text-gray-200 text-gray-600 hover:text-gray-800 dark:hover:text-gray-200" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        <span><i class="fas fa-users-cog pr-2"></i></span>
                        {{ __('Lgeneral.Team Settings') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link class="dark:text-gray-200 text-gray-600 hover:text-gray-800 dark:hover:text-gray-200" href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                        <span><i class="fas fa-plus pr-3"></i></span> 
                        {{ __('Lgeneral.Create New Team') }}
                    </x-responsive-nav-link>

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs font-bold text-gray-400">
                        {{ __('Lgeneral.Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-switchable-team :team="$team" component="responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
