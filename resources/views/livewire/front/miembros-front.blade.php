
    @foreach($Miembros as $Miembro) 
    <div class="p-4 m-auto">
    <div class="text-center mb-4 opacity-90">
        <a href="#" class="block relative">
            <img alt="profil" src="{{asset('resources/Miembros/'.$Miembro->imagen)}}" class="mx-auto object-cover rounded-full h-40 w-40 "/>
        </a>
    </div>
    <div class="text-center">
        <p class="text-2xl text-gray-800 dark:text-white">
            {{$Miembro->nombre}}
        </p>
        <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
            {{$Miembro->puesto}}
        </p>
        <p class="text-md text-gray-500 dark:text-gray-400 max-w-xs py-4 font-light">
            {{$Miembro->descripcion}}
        </p>
    </div>
    <div class="pt-8 flex border-t border-gray-200 w-44 mx-auto text-gray-500 items-center justify-between">
        <a href="{{$Miembro->facebook}}">
            <i class="fab fa-facebook-f text-xl hover:text-blue-600 transition-colors duration-200"></i> 
          </a>
          <a href="{{$Miembro->instagram}}">
            <i class="fab fa-instagram text-xl hover:text-pink-600 transition-colors duration-200"></i>
          </a>
          <a href="{{$Miembro->youtube}}">
            <i class="fab fa-youtube text-xl hover:text-red-600 transition-colors duration-200"></i>
          </a>
          <a href="{{$Miembro->twitter}}">
            <i class="fab fa-twitter text-xl hover:text-blue-500 transition-colors duration-200"></i> 
          </a>
    </div>
</div>
    @endforeach
