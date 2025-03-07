@props(['color' => 'secondary'])

<ul {{ $attributes->merge(['class' => 'bg-'.$color]) }}>
    {{ $slot }}
</ul>
