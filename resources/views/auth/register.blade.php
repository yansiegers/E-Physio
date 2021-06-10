@section('title', 'Registreren')

<x-general-layout class="mt-16 mb-32">
    <div class="ml-64 grid grid-cols-2">
        <div class="flex flex-col justify-center items-start">
            <x-auth.card class="w-4/6">
                <div class="space-y-12">
                    <p class="text-eph-grey">Registreren is momenteel alleen beschrikbaar voor fysiotherapeuten. Maak een afspraak met een fysiotherapeut om je te registreren.</p>
                    <x-links.button class="btn-primary rounded-full mt-4" href="/klachten">Afspraak maken</x-link-button>
                </div>
            </x-auth.card>
        </div>
        <div class="flex flex-col justify-center items-end">
            <img class="w-5/6" src="{{ asset('img/client-portal-login.png') }}" alt="">
        </div>
    </div>
</x-general-layout>
