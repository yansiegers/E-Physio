@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm mb-3 text-eph-grey']) }}>
    {{ $value ?? $slot }}
</label>
