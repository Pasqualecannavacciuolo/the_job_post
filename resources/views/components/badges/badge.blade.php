@php
    // Imposta la classe base del badge e aggiungi classi personalizzate in base al testo dello slot
    $badgeClass = 'inline-flex items-center rounded-md px-2 py-1 text-xs font-medium ring-1 ring-inset';

    if (trim($slot) === 'Attivo') {
        $badgeClass .= ' bg-green-50 text-green-700 ring-green-600/20';
    } elseif (trim($slot) === 'In scadenza') {
        $badgeClass .= ' bg-amber-50 text-amber-700 ring-amber-600/20';
    }
@endphp

<span {{ $attributes->merge(['class' => $badgeClass]) }}>
    {{ $slot }}
</span>
