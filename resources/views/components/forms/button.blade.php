@props(['type'])

<button {{ $attributes->merge(['class' => 'block btn ' . $type]) }}>
    {{ $slot }}
</button>
