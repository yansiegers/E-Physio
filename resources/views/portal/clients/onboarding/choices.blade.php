@section('title', '3. Fysiotherapeuten')

    <x-onboarding-layout>
        <h1 class="heading-h1 mb-16">3. Kies jouw fysiotherapeut</h1>

        {{-- <p>@if (!empty($_GET['symptom'])){{ $_GET['symptom'] }}@endif</p> --}}
        {{-- <p>@if (!empty($_GET['date'])){{ $_GET['date'] }}@endif</p> --}}
        {{-- <p>@if (!empty($_GET['hour'])){{ $_GET['hour'] }}@endif</p> --}}

        <form action="{{ route('portal.clients.onboarding.step4') }}" class="space-y-6">
            <x-forms.input type="hidden" name="date" :value="!empty($_GET['date']) ? $_GET['date']: null" />
            <x-forms.input type="hidden" name="hour" :value="!empty($_GET['hour']) ? $_GET['hour']: null" />

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
                <x-forms.label for="symptom" value="Specialiteit*" />
                <x-forms.select id="symptom" name="symptom" :value="!empty($_GET['symptom']) ? $_GET['symptom']: null" :list="$symptoms" required />
            </div>

            <div>
                @php
                    $physicians = [
                        1 => 'Harry Tipker',
                        2 => 'Jan Jansen',
                        3 => 'Hester Ragas',
                        4 => 'Sam Hoogland',
                        5 => 'Marlies van Veen',
                        6 => 'Peter de Vries',
                        7 => 'Marleen de Jong',
                        8 => 'Jeroen de Jong'
                    ];
                @endphp
                {{-- <x-forms.label value="Welke fysiotherapeut past bij jou?" /> --}}
                <x-forms.radio class="grid grid-cols-4 gap-6" name="physician_id" :list="$physicians" required />
            </div>

            <div class="flex justify-between space-x-4">
                <x-links.button href="{{ route('portal.clients.onboarding.step2') }}" class="btn-outline-2 rounded-full">
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
                <x-links.button href="{{ route('portal.clients.onboarding.step2') }}" class="btn-outline-1 rounded-full">Stap 2</x-links.button>
                <x-links.button href="{{ route('portal.clients.onboarding.step4') }}" class="btn-outline-2 rounded-full">Stap 4</x-links.button>
            </div>
        </form>
    </x-onboarding-layout>
