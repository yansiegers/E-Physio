<li>
    <a {{ $attributes->merge(['class' => 'no-underline hover:underline']) }}>
        {{ $slot }}
    </a>
</li>
