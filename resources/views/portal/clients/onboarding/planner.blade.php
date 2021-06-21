@section('title', '2. Planner')

    <x-onboarding-layout>
        <div class="px-32 py-20">
            <h1 class="heading-h1 mb-16">2. Afspraak inplannen</h1>
            {{-- <p>@if (!empty($_GET['symptom'])){{ $_GET['symptom'] }}@endif</p> --}}
            <form id="planner" action="{{ route('portal.clients.onboarding.step3') }}" method="GET" class="grid grid-cols-2">
                <x-forms.input type="hidden" name="symptom" :value="!empty($_GET['symptom']) ? $_GET['symptom']: null" />
                <div>
                    <x-forms.label for="date" value="Wanneer ben je beschikbaar?" />
                    <x-forms.input id="date" type="date" name="date" required />
                </div>

                <div>
                    @php
                        $timeslots = [
                            '8' => '08:00 t/m 09:00',
                            '9' => '09:00 t/m 10:00',
                            '10' => '10:00 t/m 11:00',
                            '11' => '11:00 t/m 12:00',
                            // '12' => '12:00 t/m 13:00',
                            '13' => '13:00 t/m 14:00',
                            '14' => '14:00 t/m 15:00',
                            '15' => '15:00 t/m 16:00',
                            '16' => '16:00 t/m 17:00',
                        ];
                    @endphp
                    {{-- <x-forms.label value="Wanneer ben je beschikbaar?" /> --}}
                    <x-forms.radio name="hour" :list="$timeslots" required />
                </div>

                <div class="hidden">
                    <x-links.button href="{{ route('portal.clients.onboarding.step1') }}" class="btn-outline-1 rounded-full">
                        Stap 1</x-links.button>
                    <x-links.button href="{{ route('portal.clients.onboarding.step3') }}" class="btn-outline-2 rounded-full">
                        Stap 3</x-links.button>
                </div>
            </form>
        </div>

        @include('layouts.portal.clients.onboarding.navigation', ['form' => 'planner'])
    </x-onboarding-layout>
