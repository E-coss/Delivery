<x-app-layout>
@section('title',"Dashboard")
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Dashboard
    </h2>

@livewire('admin.dashboard')

    <!-- Charts -->
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      Charts
    </h2>
    <div class="grid gap-6 mb-8 md:grid-cols-2">
      <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" >
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Usuarios
        </h4>
        <canvas id="pie"></canvas>
        <input type="hidden" id="G_User" pestana="{{route('dashboard')}}" ruta="{{route('dashboard.G.User')}}">
        <div
          class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
        >
          <!-- Chart legend -->
          <div class="flex cursor-pointer items-center">
            <a link="#">
              <span class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"></span>
            <span>Administrador</span>
          </a>
          
          </div>
          <!-- Chart legend -->
          <div class="flex items-center">
            <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
            <span>Supervisor</span>
          </div>
          <!-- Chart legend -->
          <div class="flex items-center">
            <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
            <span>Cliente</span>
          </div>

        </div>
      </div>
      <div
        class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Traffic
        </h4>
        <canvas id="line"></canvas>
        <div
          class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
        >
          <!-- Chart legend -->
          <div class="flex items-center">
            <span
              class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"
            ></span>
            <span>Organic</span>
          </div>
          <div class="flex items-center">
            <span
              class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
            ></span>
            <span >Paid</span>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
