@props(['active'])

@php
    $classes = ($active ?? false)
        ? "px-5 underline"
        : "px-5 no-underline hover:underline"
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
