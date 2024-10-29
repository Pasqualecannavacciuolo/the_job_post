@props(['name'])

@error($name)
    <p class="px-1 text-red-500"><small>{{ $message }}</small></p>
@enderror
