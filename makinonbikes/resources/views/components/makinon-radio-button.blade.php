<input {{ $attributes->merge(['type' => 'radio', 'class' => 'w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600']) }}>

{{ $slot }}

</input>