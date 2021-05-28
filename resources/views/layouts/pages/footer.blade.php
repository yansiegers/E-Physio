<footer class="container mx-auto lg:px-48 py-5 flex justify-between items-center">
    <div class="flex items-center">
        <a href="{{ route('home') }}">
            <x-logo class="block h-10 w-auto" />
        </a>
    </div>

    <ul class="list-none">
        <x-links.footer :href="route('home')" :active="request()->routeIs('home')">
            © {{ Date('Y') }} {{ config('app.name') }}
        </x-links.footer>
        <x-links.footer :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Over') }} {{ config('app.name') }}
        </x-links.footer>
    </ul>

    <ul class="list-none">
        <x-links.footer :href="route('terms')" :active="request()->routeIs('terms')">
            {{ __('Algemene voorwaarden') }}
        </x-links.footer>
        <x-links.footer :href="route('privacy')" :active="request()->routeIs('privacy')">
            {{ __('Privacybeleid') }}
        </x-links.footer>
    </ul>
</footer>
