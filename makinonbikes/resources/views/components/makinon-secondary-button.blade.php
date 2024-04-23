@props(['value'])

<button {{ $attributes->merge(['type' => 'button', 'class' => "text-gray-900 
                                                    hover:text-gray-900 
                                                    border border-gray-800 
                                                    hover: border-orange-900 
                                                    hover:bg-gray-100
                                                    focus:ring-4  
                                                    focus:outline-none 
                                                    focus:ring-orange-500 
                                                    font-medium rounded-lg text-sm px-5 py-2.5 text-center 
                                                    dark:border-gray-600 
                                                    dark:text-gray-400 
                                                    dark:hover:text-white 
                                                    dark:hover:bg-gray-300 
                                                    dark:focus:ring-gray-800"]) }}>
    {{ $value ?? $slot }}
</button>

