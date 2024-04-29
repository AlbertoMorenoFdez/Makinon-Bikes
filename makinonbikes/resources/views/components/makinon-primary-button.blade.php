@props(['value'])

<button
    {{ $attributes->merge([
        'type' => 'button',
        'class' => '
                    text-center
                    ml-5
                    mt-2
                    text-white 
                    bg-gray-900
                    hover: text-white
                    hover:bg-orange-500 
                    focus:outline-none 
                    focus:ring-2 focus:ring-orange-300 
                    font-medium rounded-lg 
                    text-sm px-5 py-2.5 me-2 mb-2 
                    dark:bg-gray-800 
                    dark:hover:bg-gray-700 
                    dark:focus:ring-gray-700 
                    dark:border-gray-700"
                    transition: 15sec',
    ]) }}>
    {{ $value ?? $slot }}
</button>
