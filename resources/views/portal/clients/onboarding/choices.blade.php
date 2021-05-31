@section('title', '3. Fysiotherapeuten')

    <x-onboarding-layout>
        <h1 class="heading-h1 text-center">3. Kies jouw fysiotherapeut</h1>

        <form action="/" class="space-y-6">
            <div>
                @php
                    $physicians = [
                        'Harry Tipker',
                        'Jan Jansen',
                        'Hester Ragas',
                        'Sam Hoogland',
                        'Marlies van Veen',
                        'Peter de Vries',
                        'Marleen de Jong',
                        'Jeroen de Jong'
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
