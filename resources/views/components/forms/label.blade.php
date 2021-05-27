@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm mb-3 color-eph-grey-light']) }}>
    {{ $value ?? $slot }}
</label>
