<button
    {{ $attributes->merge([
        'class' => 'flex w-full justify-center rounded-md bg-sky-800 px-3 py-1.5 text-sm font-semibold leading-6
                    text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2
                    focus-visible:outline-offset-2 focus-visible:outline-sky-600',
        'type' => 'submit',
    ]) }}>
    {{ $slot }}
</button>
