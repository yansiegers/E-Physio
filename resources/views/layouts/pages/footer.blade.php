<footer class="container mx-auto p-5 flex justify-between items-center">
    <ul class="list-none">
        <x-footer-link :href="route('home')" :active="request()->routeIs('home')">
            © {{ Date('Y') }} {{ config('app.name') }}
        </x-footer-link>
        <x-footer-link :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Over') }} {{ config('app.name') }}
        </x-footer-link>
    </ul>

    <ul class="list-none">
        <x-footer-link :href="route('terms')" :active="request()->routeIs('terms')">
            {{ __('Algemene voorwaarden') }}
        </x-footer-link>
        <x-footer-link :href="route('privacy')" :active="request()->routeIs('privacy')">
            {{ __('Privacybeleid') }}
        </x-footer-link>
    </ul>
</footer>
