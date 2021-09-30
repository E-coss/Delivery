<x-guest-layout>
@section('title',"Inicio")

@livewire('front.slider-photo')

    <!--	 

Alternatively if you want to just have a single hero
 una sola imagen
 
<section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 32rem; background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

	<div class="container mx-auto">

		<div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
			<h1 class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>
			<a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">products</a>

		</div>

	  </div>

</section>

-->

@livewire('front.list-products')

    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="h-3/6 relative bg-white dark:bg-gray-800 overflow-hidden dark:bg-gray-800">
    <div class="dark:bg-gray-800 mx-auto">
      <div class="dark:bg-gray-800 relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
        <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
          <polygon class="dark:text-black" points="50,0 100,0 50,100 0,100" />
        </svg>
   
          <div class="dark:bg-gray-800 h-3/6 relative pt-6 px-4 sm:px-6 lg:px-8">
         
          </div>
  
          <!--
            Mobile menu, show/hide based on menu open state.
  
            Entering: "duration-150 ease-out"
              From: "opacity-0 scale-95"
              To: "opacity-100 scale-100"
            Leaving: "duration-100 ease-in"
              From: "opacity-100 scale-100"
              To: "opacity-0 scale-95"
          -->
          
        <main class="dark:bg-gray-800 mt-10 mx-auto w-full px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28 ">
          <div class="sm:text-center lg:text-left dark:bg-gray-800">
            <h1 class="text-4xl tracking-tight font-extrabold dark:bg-gray-800 text-gray-900 sm:text-5xl md:text-6xl">
              <span class="block xl:inline dark:text-gray-300">Hazlo</span>
              <span class="block text-purple-600 xl:inline">Simple</span>
            </h1>
            <p class="mt-3 dark:text-gray-200 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
              Inicia sesion y agrega todas las ubicaciones de envios que prefieras. 
            </p>
            <p class="mt-3 dark:text-gray-200 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                Guarda tus platos Favoritos y Mantente al tanto de tus pedidos.
              </p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow">
                <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 md:py-4 md:text-lg md:px-10">
                  Iniciar Sesión
                </a>
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-purple-700 bg-purple-100 hover:bg-purple-200 md:py-4 md:text-lg md:px-10">
                    {{ __('Registrarse') }}
                </a>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
      <img class="w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
    </div>
  </div>

  
  

  <div class="p-8 bg-white dark:bg-gray-800 ">
    <p class="text-center text-3xl font-bold text-gray-800 dark:text-white">
        Nuestro Equipo de Trabajo
    </p>
    <p class="text-center mb-12 text-xl font-normal text-gray-500 dark:text-gray-200">
        Orgullosos de ser parte de esta familia
    </p>
    <div class="flex items-center flex-col lg:flex-row justify evenly">
        @livewire('front.miembros-front') 
    </div>
</div>

    </x-guest-layout>