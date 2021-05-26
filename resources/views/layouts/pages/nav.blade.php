<nav class="container mx-auto lg:px-48 py-5 flex justify-between items-center">
    <div class="flex items-center">
        <a href="{{ route('home') }}">
            <x-application-logo class="block h-10 w-auto" />
        </a>
    </div>

    <ul class="list-none flex items-center">
        {{-- <x-links.nav :href="route('home')" :active="request()->routeIs('home')">
            {{ config('app.name') }}
        </x-links.nav> --}}
        <x-links.nav :href="route('about')" :active="request()->routeIs('about')">
            {{ __('Over') }}
        </x-links.nav>
        <x-links.nav :href="route('contact')" :active="request()->routeIs('contact')">
            {{ __('Contact') }}
        </x-links.nav>
        <x-links.nav :href="route('faq')" :active="request()->routeIs('faq')">
            {{ __('Veel gestelde vragen') }}
        </x-links.nav>
        <x-links.nav :href="route('blog')" :active="request()->routeIs('blog')">
            {{ __('Blog') }}
        </x-links.nav>
    </ul>
</nav>
