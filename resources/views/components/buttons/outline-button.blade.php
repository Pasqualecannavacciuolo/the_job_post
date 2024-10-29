<button
    {{ $attributes->merge([
        'class' => 'rounded-md border border-sky-800 py-2 px-4 text-center text-sm transition-all shadow-sm hover:shadow-lg
                    text-black hover:text-white hover:bg-sky-800 hover:border-sky-800 focus:text-white focus:bg-sky-800
                    focus:border-sky-800 active:border-sky-800 active:text-white active:bg-sky-800
                    disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none',
        'type' => 'submit',
    ]) }}>
    {{ $slot }}
</button>
