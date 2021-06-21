@section('title', '3. Fysiotherapeuten')

    <x-onboarding-layout>
        <div class="px-32 py-20">
            <div class="grid grid-cols-4">
                <h1 class="heading-h1 mb-16 col-span-3">3. Kies jouw fysiotherapeut</h1>
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
                    <x-forms.select id="symptom" name="symptom" :value="!empty($_GET['symptom']) ? $_GET['symptom']: null"
                        :list="$symptoms" required />
                </div>
            </div>

            <form id="choices" action="{{ route('portal.clients.onboarding.step4') }}" class="space-y-6">
                <x-forms.input type="hidden" name="date" :value="!empty($_GET['date']) ? $_GET['date']: null" />
                <x-forms.input type="hidden" name="hour" :value="!empty($_GET['hour']) ? $_GET['hour']: null" />

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
                            8 => 'Jeroen de Jong',
                        ];
                    @endphp
                    <x-forms.radio class="grid grid-cols-4 gap-6" name="physician_id" :list="$physicians" required />
                </div>

                <div class="hidden">
                    <x-links.button href="{{ route('portal.clients.onboarding.step2') }}"
                        class="btn-outline-1 rounded-full">Stap 2</x-links.button>
                    <x-links.button href="{{ route('portal.clients.onboarding.step4') }}"
                        class="btn-outline-2 rounded-full">Stap 4</x-links.button>
                </div>
            </form>
        </div>

        @include('layouts.portal.clients.onboarding.navigation', ['form' => 'choices'])
    </x-onboarding-layout>
