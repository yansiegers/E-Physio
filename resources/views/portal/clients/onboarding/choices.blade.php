@section('title', '3. Fysiotherapeuten')

    <x-onboarding-layout>
        <h1 class="heading-h1 text-center">3. Kies jouw fysiotherapeut</h1>

        <p>@if (!empty($_GET['symptom'])){{ $_GET['symptom'] }}@endif</p>
        <p>@if (!empty($_GET['timeslot'])){{ $_GET['timeslot'] }}@endif</p>

        <form action="{{ route('portal.clients.onboarding.confirmation') }}" class="space-y-6">
            <x-forms.input type="hidden" name="symptom" :value="!empty($_GET['symptom']) ? $_GET['symptom'] : ''" />
            <x-forms.input type="hidden" name="timeslot" :value="!empty($_GET['timeslot']) ? $_GET['timeslot'] : ''" />

            <div>
                @php
                    $physicians = [
                        '0' => 'Harry Tipker',
                        '1' => 'Jan Jansen',
                        '2' => 'Hester Ragas',
                        '3' => 'Sam Hoogland',
                        '4' => 'Marlies van Veen',
                        '5' => 'Peter de Vries',
                        '6' => 'Marleen de Jong',
                        '7' => 'Jeroen de Jong'
                    ];
                @endphp
                {{-- <x-forms.label value="Welke fysiotherapeut past bij jou?" /> --}}
                <x-forms.radio name="physician" :list="$physicians" value="" />
            </div>

            <x-forms.button class="btn-primary rounded-full" type="submit">Volgende</x-forms.button>

            <div>
                <x-links.button href="{{ route('portal.clients.onboarding.planner') }}" class="btn-outline-1 rounded-full">Stap 2</x-links.button>
                <x-links.button href="{{ route('portal.clients.onboarding.confirmation') }}" class="btn-outline-2 rounded-full">Stap 4</x-links.button>
            </div>
        </form>
    </x-onboarding-layout>
