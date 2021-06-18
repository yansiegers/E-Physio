@props(['href' => '#', 'rel' => null, 'target' => null, 'active' => false])

@php
    if ($active) {
        $li_classes = 'p-1 border-b border-eph-blue';
        $a_classes = 'text-eph-blue';
    } else {
        $li_classes = 'p-1 hover:border-b hover:border-eph-grey';
        $a_classes = 'text-eph-grey';
    }
@endphp

<li {{ $attributes->merge(['class' => $li_classes]) }}>
    <a href="{{ $href }}" class="{{ $a_classes }}" rel="{{ $rel }}"" target="{{ $target }}">
        {{ $slot }}
    </a>
</li>
