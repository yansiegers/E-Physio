@section('title', '1. Klachten')

    <x-onboarding-layout class="h-screen grid grid-cols-2">
        <div class="pl-32 pr-10 py-20 bg-eph-grey-light"></div>
        <div class="pl-10 pr-32 py-20">
            <h1 class="heading-h1 mb-16">1. Wat is je klacht?</h1>

            <form id="symptoms" action="{{ route('portal.clients.onboarding.step2') }}" method="GET" class="space-y-6">
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
                    <x-forms.label for="symptom" value="Wat is je klacht?*" />
                    <x-forms.select id="symptom" name="symptom" :list="$symptoms" required />
                </div>
            </form>
        </div>

        @include('layouts.portal.clients.onboarding.navigation', ['form' => 'symptoms'])
    </x-onboarding-layout>
