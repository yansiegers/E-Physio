@section('title', '1. Klachten')

    <x-onboarding-layout>
        <h1 class="heading-h1 text-center">1. Wat is je klacht?</h1>

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

            <x-forms.button class="btn-primary rounded-full" type="submit">Volgende</x-forms.button>

            <div>
                <x-links.button href="{{ route('portal.clients.onboarding.step4') }}" class="btn-outline-2 rounded-full">Stap 4</x-links.button>
                <x-links.button href="{{ route('portal.clients.onboarding.step2') }}" class="btn-outline-2 rounded-full">Stap 2</x-links.button>
            </div>
        </form>
    </x-onboarding-layout>
