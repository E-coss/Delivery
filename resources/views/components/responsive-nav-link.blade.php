@props(['active'])

@php
$classes = ($active ?? false) 
            ? 'dark:bg-gray-800 dark:text-purple-400 block pl-3 pr-4 py-2 border-l-4 border-purple-500 text-base font-bold text-purple-600 bg-purple-100 hover:bg-purple-200 dark:hover:bg-gray-800 focus:outline-none focus:text-purple-400 focus:border-purple-600 transition duration-150 ease-in-out'
            : 'dark:bg-gray-700 dark:text-gray-300 dark:focus:bg-gray-600 dark:hover:text-gray-300 dark:hover:bg-gray-800 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-semibold text-gray-300 hover:text-gray-300 hover:bg-gray-100 hover:border-gray-400 focus:outline-none focus:text-gray-500  focus:border-gray-400 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
