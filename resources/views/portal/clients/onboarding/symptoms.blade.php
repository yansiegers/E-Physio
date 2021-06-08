@section('title', '1. Klachten')

    <x-onboarding-layout>
        <h1 class="heading-h1 mb-16">1. Wat is je klacht?</h1>

        <form action="{{ route('portal.clients.onboarding.step2') }}" method="GET" class="space-y-6">
            <div>
                @php
                    $symptoms = [
                        'neck' => 'De nek',
                        'shoulder_blades' => 'Tussen de schouderbladen',
                        'lower_back' => 'De onderrug',
                        'shoulder' => 'De schouder',
                        'elbow' => 'De elleboog',
                        'wrist' => 'De pols',
                        'pelvis' => 'Het bekken',
                        'buttock' => 'De bil',
                        'hip' => 'De heup',
                        'upper_leg' => 'Het bovenbeen',
                        'knee' => 'De knie',
                        'lower_leg' => 'Het onderbeen',
                        'ankle' => 'De enkel',
                        'fitness' => 'Conditie',
                        'lungs' => 'Longen',
                        'other' => 'Overig',
                    ];
                @endphp
                {{-- <x-forms.label for="symptom" value="Wat is je klacht?*" /> --}}
                <x-forms.select id="symptom" name="symptom" value="" :list="$symptoms" required />
            </div>

            <div class="flex justify-between space-x-4">
                <x-links.button href="{{ route('home') }}" class="btn-outline-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block align-middle" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Terug
                </x-links.button>
                <x-forms.button class="btn-outline-1 rounded-full" type="submit">
                    Volgende
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block align-middle" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </x-forms.button>
            </div>

            <div class="hidden">
                <x-links.button href="{{ route('portal.clients.onboarding.step4') }}" class="btn-outline-2 rounded-full">Stap 4</x-links.button>
                <x-links.button href="{{ route('portal.clients.onboarding.step2') }}" class="btn-outline-2 rounded-full">Stap 2</x-links.button>
            </div>
        </form>
    </x-onboarding-layout>
