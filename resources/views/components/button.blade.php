<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-blue rounded-md']) }}>
    {{ $slot }}
</button>
