@props(['href' => '#', 'rel' => null, 'target' => null, 'active' => false])

<li {{ $attributes->merge(['class' => 'text-eph-grey']) }}>
    <a href="{{ $href }}" class="hover:underline" rel="{{ $rel }}"" target="{{ $target }}">
        {{ $slot }}
    </a>
</li>
