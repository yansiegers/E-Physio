@section('title', '4. Bevestiging')

    <x-onboarding-layout>
        <h1 class="heading-h1 text-center">4. Bevestiging van je afspraak</h1>

        <form action="/" class="grid grid-cols-2">
            <div>
                <h2 class="heading-h2">01 Persoonlijke gegevens</h2>
                <div class="space-y-6">
                    <div>
                        <x-forms.label for="first_name" value="Voornaam*" />
                        <x-forms.input id="first_name" type="text" name="first_name" required autofocus />
                    </div>
                    <div>
                        <x-forms.label for="last_name" value="Achternaam*" />
                        <x-forms.input id="last_name" type="text" name="last_name" required />
                    </div>
                    <div>
                        <x-forms.label for="email" value="E-mailadres*" />
                        <x-forms.input id="email" type="email" name="email" :value="old('email')"
                            placeholder="e-mail@voorbeeld.nl" required />
                    </div>
                    <div>
                        <x-forms.label for="tel" value="Telefoonnummer" />
                        <x-forms.input id="tel" type="tel" placeholder="0612345678" required />
                    </div>
                </div>

                <h2 class="heading-h2">02 Betalingsmethode</h2>
                <div>
                    @php
                        $paying_options = ['AfterPay', 'iDEAL'];
                    @endphp
                    {{-- <x-forms.label value="Hoe wil je betalen?" /> --}}
                    <x-forms.radio name="paying_option" :list="$paying_options" value="AfterPay" />
                </div>
            </div>

            <div>
                <h2 class="heading-h2">Bestelling</h2>
                <span>E-consult</span>
                <div>
                    <h3 class="heading-h3">Harry Tipker</h3>
                    <div>Rugspecialist</div>
                    <div>⭐⭐⭐⭐</div>
                    <div>
                        <span>32 jaar</span>
                        <span>Man</span>
                    </div>
                </div>
                <div>
                    <div>
                        <div>Datum en tijd</div>
                        <div>Vrijdag 2 juni, 15:00 - 16:00</div>
                    </div>
                    <div>
                        <div>Klacht</div>
                        <div>Rug</div>
                    </div>
                    <div>Totaal: €29,99</div>
                    <x-forms.button class="btn-primary rounded-full" type="submit">Afrekenen</x-forms.button>
                </div>
            </div>

            <div>
                <x-links.button href="{{ route('portal.clients.onboarding.choices') }}" class="btn-outline-1 rounded-full">Stap 3</x-links.button>
                <x-links.button href="{{ route('portal.clients.onboarding.symptoms') }}" class="btn-outline-2 rounded-full">Stap 1</x-links.button>
            </div>
        </form>
    </x-onboarding-layout>
