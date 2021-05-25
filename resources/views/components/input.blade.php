@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block border-eph-grey rounded-md px-4 py-3']) !!}>
