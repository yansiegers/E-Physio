@section('title', 'Design Kit')

    <x-general-layout>
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

        <x-links.button href="#" class="btn-blue rounded-full">CTA blauw</x-links.button><x-links.button href="#" class="btn-purple rounded-full">CTA paars</x-links.button>
        <x-links.button href="#" class="btn-blue-light rounded-full">CTA lichtblauw</x-links.button>
        <x-links.button href="#" class="btn-purple-light rounded-full">CTA lichtpaars</x-links.button>

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

        <form action="/">
            <div>
                <x-forms.label for="name" :value="__('Name')" />
                <x-forms.input id="name" type="text" name="name" required />
            </div>

            <div>
                <x-forms.label for="email" :value="__('Email')" />
                <x-forms.input id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-forms.label for="birthday" :value="__('Birthday')" />
                <x-forms.input id="birthday" type="date" name="birthday" required />
            </div>

            @php
                $fruits = ['Banana', 'Orange', 'Strawberry'];
            @endphp

            <div>
                <x-forms.label for="fruits" :value="__('Fruits')" />
                <x-forms.select id="fruits" name="fruits" value="Orange" :list="$fruits" />
            </div>

            @php
                $ages = [
                    '30' => '0 - 30',
                    '60' => '31 - 60',
                    '100' => '61 - 100',
                ];
            @endphp
            <x-forms.radio name="age" :list="$ages" value="60" />

            <div>
                <x-forms.label for="review" :value="__('Review')" />
                <x-forms.textarea id="review" name="review">{{ old('review') }}</x-forms.textarea>
            </div>

            <x-forms.button type="submit">{{ __('Submit') }}</x-forms.button>
        </form>

        <h2 class="heading-h2" id="inputs">Andere invoervelden</h2>
        <p>Hieronder staan andere invoervelden die gebruikt kunnen worden.</p>

        <h3 class="heading-h3" id="general">Algemeen</h3>
        <x-forms.label for="text" value="Tekst (text)" />
        <x-forms.input id="text" type="text" placeholder="Tekst" />
        <x-forms.label for="checkbox" value="Vinkje (checkbox)" />
        <x-forms.input id="checkbox" type="checkbox" />
        <x-forms.label for="radio" value="Selectie (radio)" />
        <x-forms.input id="radio" type="radio" />

        <h3 class="heading-h3" id="data">Gegevens</h3>
        <x-forms.label for="email" value="E-mailadres (email)" />
        <x-forms.input id="email" type="email" placeholder="email@example.com" />
        <x-forms.label for="password" value="Wachtwoord (password)" />
        <x-forms.input id="password" type="password" placeholder="Wachtwoord" />
        <x-forms.label for="tel" value="Telefoonnummer (tel)" />
        <x-forms.input id="tel" type="tel" placeholder="+31 0612345678" />

        <h3 class="heading-h3" id="dates">Datums en tijd</h3>
        <x-forms.label for="date" value="Datum (date)" />
        <x-forms.input id="date" type="date" />
        <x-forms.label for="time" value="Tijd (time)" />
        <x-forms.input id="time" type="time" />
        <x-forms.label for="week" value="Week (week)" />
        <x-forms.input id="week" type="week" />
        <x-forms.label for="month" value="Maand (month)" />
        <x-forms.input id="month" type="month" />
        <x-forms.label for="datetime" value="Datum en tijd (datetime)" />
        <x-forms.input id="datetime" type="datetime" />
        <x-forms.label for="datetime-local" value="Lokale datum en tijd (datetime-local)" />
        <x-forms.input id="datetime-local" type="datetime-local" />

        <h3 class="heading-h3" id="files">Bestanden</h3>
        <x-forms.label for="file" value="Bestand (file)" />
        <x-forms.input id="file" type="file" />

        <h3 class="heading-h3" id="other">Overig</h3>
        <x-forms.label for="search" value="Zoeken (search)" />
        <x-forms.input id="search" type="search" placeholder="Zoeken..." />
        <x-forms.label for="number" value="Nummer (number)" />
        <x-forms.input id="number" type="number" placeholder="123" />
        <x-forms.label for="url" value="URL (url)" />
        <x-forms.input id="url" type="url" placeholder="https://example.com/" />
        {{-- <label for="color">color</label><input id="color" type="color"> --}}
        {{-- <label for="range">range</label><input id="range" type="range"> --}}

        <h3 class="heading-h3" id="buttons">Knoppen</h3>
        <p>Deze knoppen zijn alleen bedoeld voor formulieren.</p>
        <x-forms.button type="submit">Indienen</x-forms.button>
        <x-forms.button type="reset">Resetten</x-forms.button>
        <x-forms.button type="button">Knop</x-forms.button>

    </x-general-layout>
