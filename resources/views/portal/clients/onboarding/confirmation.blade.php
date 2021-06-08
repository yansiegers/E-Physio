@section('title', '4. Bevestiging')

    <x-onboarding-layout>
        <h1 class="heading-h1 mb-16">4. Bevestiging van je afspraak</h1>

        {{-- resources\views\components\auth-validation-errors.blade.php --}}
        @if ($errors->any())
            <div>
                <div class="font-medium text-red-600">
                    {{ __('Whoops! Something went wrong.') }}
                </div>

                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('portal.clients.onboarding.submit') }}" method="POST" class="grid grid-cols-2">
            {{ csrf_field() }}

            <x-forms.input type="hidden" name="date" :value="!empty($_GET['date']) ? $_GET['date'] : null" />
            <x-forms.input type="hidden" name="hour" :value="!empty($_GET['hour']) ? $_GET['hour'] : null" />
            <x-forms.input type="hidden" name="physician_id"
                :value="!empty($_GET['physician_id']) ? $_GET['physician_id'] : null" />

            <div class="space-y-6">
                <div>
                    <h2 class="heading-h2 mb-8">01 Persoonlijke gegevens</h2>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <x-forms.label for="first_name" value="Voornaam*" />
                            <x-forms.input id="first_name" type="text" name="first_name" :value="old('first_name')" required
                                autofocus />
                        </div>
                        <div>
                            <x-forms.label for="last_name" value="Achternaam*" />
                            <x-forms.input id="last_name" type="text" name="last_name" :value="old('last_name')" required />
                        </div>
                        <div>
                            <x-forms.label for="email" value="E-mailadres*" />
                            <x-forms.input id="email" type="email" name="email" :value="old('email')"
                                placeholder="e-mail@voorbeeld.nl" required />
                        </div>
                        <div>
                            <x-forms.label for="phone_number" value="Telefoonnummer" />
                            <x-forms.input id="phone_number" type="tel" name="phone_number" :value="old('phone_number')" placeholder="0612345678" />
                        </div>
                        <div>
                            <x-forms.label for="password" value="Wachtwoord*" />
                            <x-forms.input id="password" type="password" name="password" placeholder="Verzin een wachtwoord"
                                required autocomplete="new-password" />
                        </div>
                        <div>
                            <x-forms.label for="password_confirmation" value="Wachtwoord (opnieuw)*" />
                            <x-forms.input id="password_confirmation" type="password" name="password_confirmation"
                                placeholder="Typ nog eens" required />
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="heading-h2 mb-8">02 Betalingsmethode</h2>
                    <div>
                        @php
                            $paying_options = ['AfterPay', 'iDEAL'];
                        @endphp
                        {{-- <x-forms.label value="Hoe wil je betalen?" /> --}}
                        <x-forms.radio class="grid grid-cols-2 gap-6" name="paying_option" :list="$paying_options" value="AfterPay" />
                    </div>
                </div>
            </div>

            <div class="shadow-lg bg-eph-white p-8 space-y-2 rounded-md">
                <h2 class="heading-h2">Bestelling</h2>
                <span>E-consult</span>
                <div class="p-4 border rounded-md border-eph-purple bg-eph-purple-light flex space-x-4">
                    <img class="h-32 rounded-md" src="https://placekitten.com/200/200" alt="Avatar">
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
                                '7' => 'Jeroen de Jong',
                            ];
                            if (isset($_GET['physician_id'])) {
                                $physician_name = $physicians[$_GET['physician_id']];
                            } else {
                                $physician_name = 'Geen fysiotherapeut geselecteerd';
                            }
                        @endphp
                        <h3 class="heading-h3">{{ $physician_name }}</h3>
                        <div>Rugspecialist</div>
                        <div>⭐⭐⭐⭐</div>
                        <div class="flex justify-between">
                            <span>32 jaar</span>
                            <span>Man</span>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div>
                        @php
                            if (isset($_GET['date']) && isset($_GET['hour'])) {
                                $date = $_GET['date'];
                                $hour = $_GET['hour'];

                                $date_time = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date . ' 00:00:00');
                                $start_date_time = $date_time->setHour($hour);

                                $human_date_time = ucfirst($start_date_time->locale('nl')->translatedFormat('l j F \o\m H:i'));
                            } else {
                                $human_date_time = "Geen tijd geselecteerd";
                            }
                        @endphp
                        <div class="text-sm">Datum en tijd</div>
                        <div>{{ $human_date_time }}</div>
                    </div>
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
                            if (isset($_GET['symptom'])) {
                                $human_symptom = $symptoms[$_GET['symptom']];
                            } else {
                                $human_symptom = "Klacht niet bekend";
                            }
                        @endphp
                        <div class="text-sm">Klacht</div>
                        <div>{{ $human_symptom }}</div>
                    </div>
                    <div class="flex justify-between">
                        <span>Totaal</span>
                        <span>€29,99</span>
                    </div>
                    <x-forms.button class="btn-primary rounded-md w-full" type="submit">Afrekenen</x-forms.button>
                </div>
            </div>

            <div class="flex justify-between space-x-4">
                <x-links.button href="{{ route('portal.clients.onboarding.step3') }}" class="btn-outline-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block align-middle" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Terug
                </x-links.button>
            </div>

            <div class="hidden">
                <x-links.button href="{{ route('portal.clients.onboarding.step3') }}" class="btn-outline-1 rounded-full">
                    Stap 3</x-links.button>
                <x-links.button href="{{ route('portal.clients.onboarding.step1') }}" class="btn-outline-2 rounded-full">
                    Stap 1</x-links.button>
            </div>
        </form>
    </x-onboarding-layout>
