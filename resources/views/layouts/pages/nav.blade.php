<nav class="px-64 py-8 flex justify-between items-center">
    <div class="flex items-center">
        <a href="{{ route('home') }}">
            <x-logo class="block h-10 w-auto" />
        </a>
    </div>
    <ul class="flex items-center space-x-8">
        {{-- <x-links.nav :href="route('home')" :active="request()->routeIs('home')">Home</x-links.nav> --}}
        <x-links.nav :href="route('about')" :active="request()->routeIs('about')">Over ons</x-links.nav>
        <x-links.nav href="#" :active="false">Winkel</x-links.nav>
        <x-links.nav :href="route('blog')" :active="request()->routeIs('blog')">Blog</x-links.nav>
        <x-links.nav :href="route('contact')" :active="request()->routeIs('contact')">Contact</x-links.nav>
        <li class="text-eph-grey">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </a>
        </li>
        <li>
            @auth
                <x-links.button href="{{ route('dashboard') }}" class="btn-outline-2 rounded-full">Dashboard</x-links.button>
            @else
                <x-links.button href="{{ route('login') }}" class="btn-outline-2 rounded-full">Log in</x-links.button>
            @endauth
        </li>
    </ul>
</nav>
