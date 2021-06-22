@section('title', 'Design Kit')

    <x-general-layout>
        <div class="prose">
            <h1 class="heading-h1">Design kit</h1>
            <p>Dit is de design kit van de E-Physio website en applicatie. Hier kun je alle componenten met hun eigen opmaak
                vinden. Veel componenten zijn aanpasbaar door ze eigenschappen mee te geven.</p>

            <ol>
                <li>
                    <a class="link" href="#headings">Koppen en tekst</a>
                    <ol>
                        <li><a class="link" href="#links">Links en knoppen</a></li>
                        <li><a class="link" href="#lists">Lijsten</a></li>
                    </ol>
                </li>
                <li><a class="link" href="#form">Testformulier</a></li>
                <li>
                    <a class="link" href="#inputs">invoervelden</a>
                    <ol>
                        <li><a class="link" href="#general">Algemeen</a></li>
                        <li><a class="link" href="#data">Gegevens</a></li>
                        <li><a class="link" href="#dates">Datums en tijd</a></li>
                        <li><a class="link" href="#files">Bestanden</a></li>
                        <li><a class="link" href="#other">Overig</a></li>
                        <li><a class="link" href="#buttons">Knoppen</a></li>
                    </ol>
                </li>
            </ol>

            <h2 class="heading-h2" id="headings">Koppen en tekst</h2>
            <p>Hieronder zijn alle koppen en soorten tekst te vinden.</p>

            <h1 class="heading-h1 text-center">Heading 1</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

            <h2 class="heading-h2 text-center">Heading 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

            <h3 class="heading-h3 text-center">Heading 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

            <h4 class="heading-h4 text-center">Heading 4</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

            <h5 class="heading-h5 text-center">Heading 5</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

            <h6 class="heading-h6 text-center">Heading 6</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

            <h3 class="heading-h3" id="links">Links en knoppen</h3>
            <p>Dit is een <a class="link" href="#">algemene link</a> die overal voor kan komen.</p>

            {{-- <x-links.button href="#" class="btn-blue rounded-full">CTA blauw</x-links.button>
            <x-links.button href="#" class="btn-purple rounded-full">CTA paars</x-links.button>
            <x-links.button href="#" class="btn-blue-light rounded-full">CTA lichtblauw</x-links.button>
            <x-links.button href="#" class="btn-purple-light rounded-full">CTA lichtpaars</x-links.button> --}}

            <x-links.button class="btn-primary rounded-full">Primary</x-links.button>
            <x-links.button class="btn-secondary rounded-full">Secondary</x-links.button>
            <x-links.button class="btn-outline-1 rounded-full">Outline 1</x-links.button>
            <x-links.button class="btn-outline-2 rounded-full">Outline 2</x-links.button>
            <x-links.button class="btn-outline-3 rounded-full">Outline 3</x-links.button>

            {{-- <ul class="list-none">
                <x-links.nav href="#" :active="false">Normale navigatielink</x-links.nav>
                <x-links.nav href="#" :active="true">Actieve navigatielink</x-links.nav>
            </ul>

            <ul class="list-none">
                <x-links.footer href="#" :active="false">Normale Footerlink</x-links.footer>
                <x-links.footer href="#" :active="true">Actieve footerlink</x-links.footer>
            </ul> --}}

            <h3 class="heading-h3" id="lists">Lijsten</h3>
            <ol>
                <li>Coffee</li>
                <li>Tea
                    <ol>
                        <li>Black tea</li>
                        <li>Green tea</li>
                    </ol>
                </li>
                <li>Milk</li>
            </ol>

            <ul>
                <li>Coffee</li>
                <li>Tea
                    <ul>
                        <li>Black tea</li>
                        <li>Green tea</li>
                    </ul>
                </li>
                <li>Milk</li>
            </ul>

            <h2 class="heading-h2" id="form">Testformulier</h2>
            <p>Dit is hoe een formulier er uit zou kunnen zien.</p>

            <form action="/" class="space-y-6">
                <div>
                    <x-forms.label for="name" :value="__('Naam')" />
                    <x-forms.input id="name" type="text" name="name" required />
                </div>

                <div>
                    <x-forms.label for="company" :value="__('Bedrijf')" />
                    <x-forms.input id="company" type="text" name="company" value="Geen bedrijf" disabled />
                </div>

                <div>
                    <x-forms.label for="email" :value="__('E-mailadres')" />
                    <x-forms.input id="email" type="email" name="email" :value="old('email')" placeholder="e-mail@voorbeeld.nl"
                        required />
                </div>

                <div>
                    <x-forms.label for="birthday" :value="__('Verjaardag')" />
                    <x-forms.input id="birthday" type="date" name="birthday" required />
                </div>

                <div>
                    @php
                        $fruits = ['Banaan', 'Sinaasappel', 'Aardbei'];
                    @endphp
                    <x-forms.label for="fruits" :value="__('Fruitsoorten')" />
                    <x-forms.select id="fruits" name="fruits" value="Sinaasappel" :list="$fruits" />
                </div>

                <div>
                    @php
                        $ages = [
                            '30' => '0 - 30 jaar',
                            '60' => '31 - 60 jaar',
                            '100' => '61 - 100 jaar',
                        ];
                    @endphp
                    <x-forms.label :value="__('Hoe oud ben je?')" />
                    <x-forms.radio name="age" :list="$ages" value="60" />
                </div>

                <div>
                    <x-forms.label :value="__('Welk vervoer heb je?')" />
                    <div>
                        <x-forms.input id="car" type="checkbox" />
                        <x-forms.label for="car" class="inline" :value="__('Auto')" />
                    </div>
                    <div>
                        <x-forms.input id="bicycle" type="checkbox" />
                        <x-forms.label for="bicycle" class="inline" :value="__('Fiets')" checked />
                    </div>
                    <div>
                        <x-forms.input id="scooter" type="checkbox" />
                        <x-forms.label for="scooter" class="inline" :value="__('Scooter')" />
                    </div>
                </div>

                <div>
                    <x-forms.label for="review" :value="__('Review')" />
                    <x-forms.textarea id="review" name="review" placeholder="Wat vond je er van?">{{ old('review') }}
                    </x-forms.textarea>
                </div>

                <x-forms.button class="btn-primary rounded-full" type="submit">{{ __('Indienen') }}</x-forms.button>
            </form>

            <h2 class="heading-h2" id="inputs">Andere invoervelden</h2>
            <p>Hieronder staan andere invoervelden die gebruikt kunnen worden.</p>

            <h3 class="heading-h3" id="general">Algemeen</h3>
            <div class="space-y-6">
                <div>
                    <x-forms.label for="text" value="Tekst (text)" />
                    <x-forms.input id="text" type="text" placeholder="Tekst" />
                </div>

                <div>
                    @php
                        $dropdown = ['Selectie 1', 'Selectie 2', 'Selectie 3'];
                    @endphp
                    <x-forms.label for="select" value="Dropdown (select)" />
                    <x-forms.select id="select" name="select" value="Selectie 2" :list="$dropdown" />
                </div>

                <div>
                    <x-forms.label value="Selectievakje (checkbox)" />
                    <div>
                        <x-forms.input id="option1" type="checkbox" />
                        <x-forms.label for="option1" class="inline" value="Optie 1" />
                    </div>
                    <div>
                        <x-forms.input id="option2" type="checkbox" checked />
                        <x-forms.label for="option2" class="inline" value="Optie 2" />
                    </div>
                    <div>
                        <x-forms.input id="option3" type="checkbox" />
                        <x-forms.label for="option3" class="inline" value="Optie 3" />
                    </div>
                </div>

                <div>
                    @php
                        $choices = [
                            '1' => 'Keuze 1',
                            '2' => 'Keuze 2',
                            '3' => 'Keuze 3',
                        ];
                    @endphp
                    <x-forms.label value="Selectie (radio)" />
                    <x-forms.radio name="radio" :list="$choices" value="2" />
                </div>
            </div>

            <h3 class="heading-h3" id="data">Gegevens</h3>
            <div class="space-y-6">
                <div>
                    <x-forms.label for="email" value="E-mailadres (email)" />
                    <x-forms.input id="email" type="email" placeholder="e-mail@voorbeeld.nl" />
                </div>
                <div>
                    <x-forms.label for="password" value="Wachtwoord (password)" />
                    <x-forms.input id="password" type="password" placeholder="Wachtwoord" />
                </div>
                <div>
                    <x-forms.label for="tel" value="Telefoonnummer (tel)" />
                    <x-forms.input id="tel" type="tel" placeholder="+31 0612345678" />
                </div>
            </div>

            <h3 class="heading-h3" id="dates">Datums en tijd</h3>
            <div class="space-y-6">
                <div>
                    <x-forms.label for="date" value="Datum (date)" />
                    <x-forms.input id="date" type="date" />
                </div>
                <div>
                    <x-forms.label for="time" value="Tijd (time)" />
                    <x-forms.input id="time" type="time" />
                </div>
                <div>
                    <x-forms.label for="week" value="Week (week)" />
                    <x-forms.input id="week" type="week" />
                </div>
                <div>
                    <x-forms.label for="month" value="Maand (month)" />
                    <x-forms.input id="month" type="month" />
                </div>
                <div>
                    <x-forms.label for="datetime" value="Datum en tijd (datetime)" />
                    <x-forms.input id="datetime" type="datetime" />
                </div>
                <div>
                    <x-forms.label for="datetime-local" value="Lokale datum en tijd (datetime-local)" />
                    <x-forms.input id="datetime-local" type="datetime-local" />
                </div>
            </div>

            <h3 class="heading-h3" id="files">Bestanden</h3>
            <div class="space-y-6">
                <div>
                    <x-forms.label for="file" value="Bestand (file)" />
                    <x-forms.input id="file" type="file" />
                </div>
            </div>

            <h3 class="heading-h3" id="other">Overig</h3>
            <div class="space-y-6">
                <div>
                    <x-forms.label for="search" value="Zoeken (search)" />
                    <x-forms.input id="search" type="search" placeholder="Zoeken..." />
                </div>
                <div>
                    <x-forms.label for="number" value="Nummer (number)" />
                    <x-forms.input id="number" type="number" placeholder="123" />
                </div>
                <div>
                    <x-forms.label for="url" value="URL (url)" />
                    <x-forms.input id="url" type="url" placeholder="https://example.com/" />
                </div>
                {{-- <label for="color">color</label><input id="color" type="color"> --}}
                {{-- <label for="range">range</label><input id="range" type="range"> --}}
            </div>

            <h3 class="heading-h3" id="buttons">Knoppen</h3>
            <p>Deze knoppen zijn alleen bedoeld voor formulieren.</p>
            <div class="space-y-6">
                <x-forms.button class="btn-primary rounded-full" type="submit">Indienen</x-forms.button>
                <x-forms.button class="btn-secondary rounded-full" type="reset">Resetten</x-forms.button>
                <x-forms.button class="btn-primary rounded-full" type="button">Knop</x-forms.button>
            </div>
        </div>
    </x-general-layout>
