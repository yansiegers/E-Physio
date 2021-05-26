@props(['type'])

<button {{ $attributes->merge(['class' => 'block btn btn-blue rounded-md '.$type]) }}>
    {{ $slot }}
</button>
