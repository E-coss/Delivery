@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-input rounded-md dark:text-gray-300 dark:bg-gray-800 shadow-sm']) !!}>
