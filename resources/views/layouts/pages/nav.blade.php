<nav class="container mx-auto p-5 flex justify-between items-center">
    <div class="flex items-center">
        <a href="{{ route('home') }}">
            <x-application-logo class="block h-10 w-auto" />
        </a>
    </div>

    <ul class="list-none flex items-center">
        {{-- <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
            {{ config('app.name') }}
        </x-nav-link> --}}
        <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
            {{ __('Over') }}
        </x-nav-link>
        <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
            {{ __('Contact') }}
        </x-nav-link>
        <x-nav-link :href="route('faq')" :active="request()->routeIs('faq')">
            {{ __('Veel gestelde vragen') }}
        </x-nav-link>
        <x-nav-link :href="route('blog')" :active="request()->routeIs('blog')">
            {{ __('Blog') }}
        </x-nav-link>
    </ul>
</nav>
