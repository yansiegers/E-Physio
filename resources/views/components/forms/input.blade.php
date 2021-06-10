@props(['type'])

@php
switch ($type) {
    case 'checkbox':
        $classes = '';
        break;
    case 'radio':
        $classes = '';
        break;
    case 'file':
        $classes = 'px-4 py-3';
        break;
    default:
        $classes = 'block border border-eph-black rounded-lg text-base px-4 py-3';
}
@endphp

<input
    {{ $attributes->class([$classes, 'border-eph-grey-light text-eph-grey' => $attributes->has('disabled')])->merge(['type' => $type]) }}>
