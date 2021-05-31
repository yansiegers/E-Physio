@section('title', '1. Klachten')

    <x-onboarding-layout>
        <h1 class="heading-h1 text-center">1. Wat is je klacht?</h1>

        <form action="{{ route('portal.clients.onboarding.step2') }}" method="GET" class="space-y-6">
            <div>
                @php
                    $symptoms = [
                        'De nek',
                        'Tussen de schouderbladen',
                        'De onderrug',
                        'De schouder',
                        'De elleboog',
                        'De pols',
                        'Het bekken',
                        'De bil',
                        'De heup',
                        'Het bovenbeen',
                        'De knie',
                        'Het onderbeen',
                        'De enkel',
                        'Conditie',
                        'Longen',
                        'Overig',
                    ];
                @endphp
                {{-- <x-forms.label for="symptom" value="Wat is je klacht?*" /> --}}
                <x-forms.select id="symptom" name="symptom" value="" :list="$symptoms" required />
            </div>

            <x-forms.button class="btn-primary rounded-full" type="submit">Volgende</x-forms.button>

            <div>
                <x-links.button href="{{ route('portal.clients.onboarding.step4') }}" class="btn-outline-2 rounded-full">Stap 4</x-links.button>
                <x-links.button href="{{ route('portal.clients.onboarding.step2') }}" class="btn-outline-2 rounded-full">Stap 2</x-links.button>
            </div>
        </form>
    </x-onboarding-layout>
