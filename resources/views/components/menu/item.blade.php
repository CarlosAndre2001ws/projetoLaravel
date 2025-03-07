@aware(['color' => 'secondary'])

<li {{ $attributes->merge(['class' => 'text-'.$color]) }}>
    {{ $slot }}
</li>
