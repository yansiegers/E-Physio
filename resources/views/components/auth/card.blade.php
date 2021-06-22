<div {{ $attributes->merge(['class' => 'px-20 pt-8 pb-12 bg-eph-white rounded-xl shadow-md']) }}>
    <div class="flex justify-between mb-12">
        <x-links.auth :href="route('login')" :active="request()->routeIs('login')">Inloggen</x-links.auth>
        <x-links.auth :href="route('register')" :active="request()->routeIs('register')">Registreren</x-links.auth>
    </div>
    <div>
        {{ $slot }}
    </div>
</div>
