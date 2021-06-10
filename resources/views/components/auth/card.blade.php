{{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"> --}}
<div {{ $attributes->merge(['class' => 'px-20 pt-8 pb-12 bg-eph-white rounded-xl shadow-md']) }}>
    <div class="flex justify-between mb-12">
        <x-links.auth :href="route('login')" :active="request()->routeIs('login')">Inloggen</x-links.auth>
        <x-links.auth :href="route('register')" :active="request()->routeIs('register')">Registeren</x-links.auth>
    </div>
    <div>
        {{ $slot }}
    </div>
</div>
