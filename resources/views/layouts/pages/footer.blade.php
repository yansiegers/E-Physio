<div class="h-2 mt-8 bg-gradient-to-r from-eph-purple-light to-eph-purple"></div>
<footer class="px-64 pt-8 pb-16 grid grid-cols-4 text-base">
    <div class="flex flex-col justify-between">
        <a href="{{ route('home') }}">
            <x-logo class="block h-8 w-auto" />
        </a>
        <p class="text-eph-grey">© {{ Date('Y') }} {{ config('app.name') }} | KvK nr. 77973402</p>
    </div>
    <div>
        <h6 class="heading-h6 mb-6">Algemeen</h6>
        <ul class="space-y-3">
            <x-links.footer :href="route('contact')">Contact</x-links.footer>
            <x-links.footer :href="route('about')">Over {{ config('app.name') }}</x-links.footer>
            <x-links.footer :href="route('faq')">Veelgestelde vragen</x-links.footer>
            <x-links.footer :href="route('terms')">Algemene voorwaarden</x-links.footer>
            <x-links.footer :href="route('privacy')">Privacybeleid</x-links.footer>
            <x-links.footer href="#">Recente reviews</x-links.footer>
        </ul>
    </div>
    <div>
        <h6 class="heading-h6 mb-6">Winkel</h6>
        <ul class="space-y-3">
            <x-links.footer href="#">Producten</x-links.footer>
            <x-links.footer href="#">Veel bekeken</x-links.footer>
            <x-links.footer href="#">Bezorging</x-links.footer>
        </ul>
    </div>
    <div class="flex flex-col justify-between">
        <div>
            <h6 class="heading-h6 mb-6">Social media</h6>
            <p class="text-eph-grey">Vragen of verzoeken zijn altijd welkom.</p>
        </div>
        <div class="flex space-x-4">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                    <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                </svg>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</footer>
