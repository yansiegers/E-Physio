@section('title', '2. Planner')

    <x-onboarding-layout>
        <h1 class="heading-h1 mb-16">2. Afspraak inplannen</h1>

        {{-- <p>@if (!empty($_GET['symptom'])){{ $_GET['symptom'] }}@endif</p> --}}

        <form action="{{ route('portal.clients.onboarding.step3') }}" method="GET" class="space-y-6">
            <x-forms.input type="hidden" name="symptom" :value="!empty($_GET['symptom']) ? $_GET['symptom']: null" />
            <div class="grid grid-cols-2">
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
                    <x-forms.radio name="hour" :list="$timeslots" value="8" required />
                </div>
            </div>

            <div class="flex justify-between space-x-4">
                <x-links.button href="{{ route('portal.clients.onboarding.step1') }}" class="btn-outline-2 rounded-full">
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
                <x-links.button href="{{ route('portal.clients.onboarding.step1') }}"
                    class="btn-outline-1 rounded-full">Stap 1</x-links.button>
                <x-links.button href="{{ route('portal.clients.onboarding.step3') }}"
                    class="btn-outline-2 rounded-full">Stap 3</x-links.button>
            </div>
        </form>
    </x-onboarding-layout>
