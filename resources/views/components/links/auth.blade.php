@props(['href' => '#', 'rel' => null, 'target' => null, 'active' => false])

@php
    if ($active) {
        $div_classes = 'border-b-2 border-eph-blue';
        $a_classes = '';
    } else {
        $div_classes = 'hover:border-b-2 hover:border-eph-grey text-eph-grey';
        $a_classes = '';
    }
@endphp

<div {{ $attributes->merge(['class' => 'font-mulish px-1 py-4 ' . $div_classes]) }}>
    <a href="{{ $href }}" class="{{ $a_classes }}" rel="{{ $rel }}"" target="{{ $target }}">
        {{ $slot }}
    </a>
</div>
