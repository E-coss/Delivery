@if ($paginator->hasPages())
<div role="navigation" aria-label="Pagination Navigation" class=" flex items-center justify-between px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
    <div class="flex justify-between flex-1 sm:hidden">
        @if ($paginator->onFirstPage())
            <span class="dark:bg-gray-700 dark:text-gray-200 dark:focus:bg-gray-600 dark:hover:text-gray-100 dark:hover:bg-gray-800 relative inline-flex dark:border-gray-600 dark:hover:border-gray-600 items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a wire:click="previousPage" class="dark:bg-gray-700 dark:text-gray-200 dark:focus:bg-gray-600 dark:hover:text-gray-100 dark:hover:bg-gray-800 dark:border-gray-600 dark:hover:border-gray-600 relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                {!! __('pagination.previous') !!}
            </a>
        @endif
    
        @if ($paginator->hasMorePages())
        <a wire:click="nextPage" class="dark:bg-gray-700 dark:text-gray-200 dark:focus:bg-gray-600 dark:hover:text-gray-100 dark:hover:bg-gray-800 dark:border-gray-600 dark:hover:border-gray-600 relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            {!! __('pagination.next') !!}
        </a>
        @else
            <span class="dark:bg-gray-700 dark:text-gray-300 dark:focus:bg-gray-600 dark:hover:text-gray-300 dark:hover:bg-gray-800 relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </div>
    
    <div class="hidden items-center col-span-3 lg:flex">
        <p class="text-sm d-inline-block text-gray-700 dark:text-gray-300 leading-5">
            {!! __('pagination.Showing') !!}
            <span class="font-medium text-gray-700 dark:text-gray-300">{{ $paginator->firstItem() }}</span>
            {!! __('pagination.to') !!}
            <span class="font-medium text-gray-700 dark:text-gray-300">{{ $paginator->lastItem() }}</span>
            {!! __('pagination.of') !!}
            <span class="font-medium text-gray-700 dark:text-gray-300">{{ $paginator->total() }}</span>
        </p>
    </div>
    <span class="col-span-2"></span>
    <!-- Pagination -->
    <span class="hidden sm:flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
<nav aria-label="Table navigation">
<ul class="inline-flex items-center">
    @if ($paginator->onFirstPage())
     <li>
        <button
          class="px-1 py-1 rounded-md rounded-l-lg hover:outline-none focus:shadow-outline-purple"
          aria-label="Previous"
        >
          <svg
            aria-hidden="true"
            class="w-4 h-4 fill-current"
            viewBox="0 0 20 20"
          >
            <path
              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
              clip-rule="evenodd"
              fill-rule="evenodd"
            >
        </path>
        
          </svg>
          <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
      
        </span>
        </button>
        </li>
    
    
@else
<li>
    <a wire:click="previousPage" rel="prev" class="" aria-label="{{ __('pagination.previous') }}">
      
    <button
      class="px-3 py-1 rounded-md rounded-l-lg focus:shadow-outline-purple hover:outline-none hover:shadow-outline-purple"
      aria-label="Previous"
    >
   
      <svg
        aria-hidden="true"
        class="w-4 h-4 fill-current"
        viewBox="0 0 20 20"
      >
        <path
          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
          clip-rule="evenodd"
          fill-rule="evenodd"
        ></path>
      </svg>
     
    
    </button>
</a>
    </li>
   
@endif

{{-- Pagination Elements --}}
@foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
    <li>
        <button  class=" px-3 py-1 rounded-md focus:shadow-outline-purple hover:outline-none hover:shadow-outline-purple" > 
            <span aria-disabled="true">
                <span >{{ $element }}</span>
            </span>
         </button> 
    </li>
         
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <li>
                <button  class="px-3 py-1 rounded-md focus:shadow-outline-purple bg-purple-600 text-gray-50 hover:outline-none hover:shadow-outline-purple" > 
                    <span aria-current="page">
                        <span >{{ $page }}</span>
                    </span>
                 </button> 
            </li>
            @else
            <li>
                <a wire:click="gotoPage({{$page}})"  aria-label="{{ __('pagination.Go to page :page', ['page' => $page]) }}">
                <button  class="px-3 py-1 rounded-md focus:shadow-outline-purple hover:outline-none hover:shadow-outline-purple" > 
                    
                        {{ $page }}
                   
                 </button> 
                </a>
            </li>
                
            @endif
        @endforeach
    @endif
@endforeach

{{-- Next Page Link --}}
@if ($paginator->hasMorePages())
<li>
    <a wire:click="nextPage" rel="next"  aria-label="{{ __('pagination.next') }}">
    <button class="px-3 py-1 rounded-md rounded-r-lg focus:shadow-outline-purple hover:outline-none hover:shadow-outline-purple " aria-label="Next">
        
            <svg
class="w-4 h-4 fill-current"
aria-hidden="true"
viewBox="0 0 20 20"
>
<path
  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
  clip-rule="evenodd"
  fill-rule="evenodd"
></path>
</svg>


</button>
</a>
</li>

@else
    <span class="px-3 py-1 rounded-md rounded-r-lg focus:shadow-outline-purple hover:outline-none" aria-disabled="true" aria-label="{{ __('pagination.next') }}">
        <span  aria-hidden="true">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" >
                </path>
            </svg>
        </span>
    </span>
@endif
    </ul>
    </nav>
    </span>
</div>
@endif
