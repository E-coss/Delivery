<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white dark:text-gray-300 dark:bg-gray-800 border border-gray-300 border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 dark:hover:text-gray-400 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue  active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
