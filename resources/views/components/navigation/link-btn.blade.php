<a
    {{ $attributes->merge([
        'class' => 'rounded-md py-2 px-4 text-center text-sm transition-all shadow-sm
                    bg-sky-800 text-white hover:shadow-lg hover:bg-sky-500
                    focus-visible:outline focus-visible:outline-2
                    focus-visible:outline-orange-600
                    focus-visible:outline-offset-2',
    ]) }}>
    {{ $slot }}
</a>
