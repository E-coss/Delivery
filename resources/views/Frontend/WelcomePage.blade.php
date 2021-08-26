<x-guest-layout>
@section('title',"Inicio")

    <div class="carousel mt-20 relative mx-auto">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-auto md:h-full w-auto mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right">

                   <img src="{{asset('img/banner.jpg')}}" class="" alt="" >

                </div>
            </div>
            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://images.pexels.com/photos/1565982/pexels-photo-1565982.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4">Real Bamboo Wall Clock</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="background-image: url('https://images.pexels.com/photos/1099680/pexels-photo-1099680.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4">Brown and blue hardbound book</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
            </ol>

        </div>
    </div>

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

    <section class="py-8 dark:bg-gray-800">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <nav id="store" class="w-full relative  top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                    <a class="uppercase dark:text-gray-200 tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
				Tienda
			</a>

                    <div class="flex items-center" id="store-nav-content">

                        <a class="pl-3 dark:text-gray-200 inline-block no-underline" href="#">
                            <svg class="dark:hover:text-gray-400 fill-current hover:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                            </svg>
                        </a>

                        <a class="pl-3 dark:text-gray-200 inline-block no-underline" href="#">
                            <svg class="dark:hover:text-gray-400 hover:text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                            </svg>
                        </a>

                    </div>
              </div>
            </nav>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.pexels.com/photos/1055270/pexels-photo-1055270.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="dark:text-gray-300">Nombre del Producto</p>
                        <svg class="h-6 w-6 fill-current hover:text-red-500 dark:text-gray-300 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900 dark:text-gray-300">$9.99</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('img/comida3.jpg') }}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="dark:text-gray-300">Nombre del Producto</p>
                        <svg class="h-6 w-6 fill-current hover:text-red-500 dark:text-gray-300 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900 dark:text-gray-300">$9.99</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.pexels.com/photos/1055271/pexels-photo-1055271.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="dark:text-gray-300">Nombre del Producto</p>
                        <svg class="h-6 w-6 fill-current hover:text-red-500 dark:text-gray-300 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900 dark:text-gray-300">$9.99</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('img/comida4.jpg') }}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="dark:text-gray-300">Nombre del Producto</p>
                        <svg class="h-6 w-6 fill-current hover:text-red-500 dark:text-gray-300 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900 dark:text-gray-300">$9.99</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('img/comida5.jpg') }}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="dark:text-gray-300">Nombre del Producto</p>
                        <svg class="h-6 w-6 fill-current hover:text-red-500 dark:text-gray-300 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900 dark:text-gray-300">$9.99</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('img/comida2.jpg') }}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="dark:text-gray-300">Nombre del Producto</p>
                        <svg class="h-6 w-6 fill-current hover:text-red-500 dark:text-gray-300 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900 dark:text-gray-300">$9.99</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://images.pexels.com/photos/1055272/pexels-photo-1055272.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="dark:text-gray-300">Nombre del Producto</p>
                        <svg class="h-6 w-6 fill-current hover:text-red-500 dark:text-gray-300 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900 dark:text-gray-300">$9.99</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('img/comida.jpg') }}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="dark:text-gray-300">Nombre del Producto</p>
                        <svg class="h-6 w-6 fill-current hover:text-red-500 dark:text-gray-300 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900 dark:text-gray-300">$9.99</p>
                </a>
            </div>

            </div>

    </section>

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
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 md:py-4 md:text-lg md:px-10">
                  Iniciar Sesión
                </a>
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-purple-700 bg-purple-100 hover:bg-purple-200 md:py-4 md:text-lg md:px-10">
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
        <div class="p-4 m-auto">
            <div class="text-center mb-4 opacity-90">
                <a href="#" class="block relative">
                    <img alt="profil" src="https://www.tailwind-kit.com/images/person/1.jpg" class="mx-auto object-cover rounded-full h-40 w-40 "/>
                </a>
            </div>
            <div class="text-center">
                <p class="text-2xl text-gray-800 dark:text-white">
                    Patrick Sebastien
                </p>
                <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
                    Developpeur
                </p>
                <p class="text-md text-gray-500 dark:text-gray-400 max-w-xs py-4 font-light">
                    Patrick Sébastien, born November 14, 1953 in Brive-la-Gaillarde, is an imitator.
                </p>
            </div>
            <div class="pt-8 flex border-t border-gray-200 w-44 mx-auto text-gray-500 items-center justify-between">
                <a href="#">
                    <i class="fab fa-facebook-f text-xl hover:text-blue-600 transition-colors duration-200"></i> 
                  </a>
                  <a href="#">
                    <i class="fab fa-instagram text-xl hover:text-pink-600 transition-colors duration-200"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-youtube text-xl hover:text-red-600 transition-colors duration-200"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-twitter text-xl hover:text-blue-500 transition-colors duration-200"></i> 
                  </a>
            </div>
        </div>
        <div class="p-4 m-auto">
            <div class="text-center mb-4 opacity-90">
                <a href="#" class="block relative">
                    <img alt="profil" src="https://www.tailwind-kit.com/images/person/4.jpg" class="mx-auto object-cover rounded-full h-40 w-40 "/>
                </a>
            </div>
            <div class="text-center">
                <p class="text-2xl text-gray-800 dark:text-white">
                    Jean Castux
                </p>
                <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
                    Founder
                </p>
                <p class="text-md text-gray-500 dark:text-gray-400 max-w-xs py-4 font-light">
                    Jean Castux is an imitator, humorist, actor, born November 14, 1953 in Pontivy.
                </p>
            </div>
            <div class="pt-8 flex border-t border-gray-200 w-44 mx-auto text-gray-500 items-center justify-between">
                <a href="#">
                    <i class="fab fa-facebook-f text-xl hover:text-blue-600 transition-colors duration-200"></i> 
                  </a>
                  <a href="#">
                    <i class="fab fa-instagram text-xl hover:text-pink-600 transition-colors duration-200"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-youtube text-xl hover:text-red-600 transition-colors duration-200"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-twitter text-xl hover:text-blue-500 transition-colors duration-200"></i> 
                  </a>
            </div>
        </div>
        <div class="p-4 m-auto">
            <div class="text-center mb-4 opacity-90">
                <a href="#" class="block relative">
                    <img alt="profil" src="https://www.tailwind-kit.com/images/person/3.jpg" class="mx-auto object-cover rounded-full h-40 w-40 "/>
                </a>
            </div>
            <div class="text-center">
                <p class="text-2xl text-gray-800 dark:text-white">
                    Thierry Halliday
                </p>
                <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
                    CTO
                </p>
                <p class="text-md text-gray-500 dark:text-gray-400 max-w-xs py-4 font-light">
                    Thierry Halliday, born November 4, 1993 in Saint hilaire de riez, is css specialist.
                </p>
            </div>
            <div class="pt-8 flex border-t border-gray-200 w-44 mx-auto text-gray-500 items-center justify-between">
                <a href="#">
                    <i class="fab fa-facebook-f text-xl hover:text-blue-600 transition-colors duration-200"></i> 
                  </a>
                  <a href="#">
                    <i class="fab fa-instagram text-xl hover:text-pink-600 transition-colors duration-200"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-youtube text-xl hover:text-red-600 transition-colors duration-200"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-twitter text-xl hover:text-blue-500 transition-colors duration-200"></i> 
                  </a>
            </div>
        </div>
    </div>
</div>

    </x-guest-layout>