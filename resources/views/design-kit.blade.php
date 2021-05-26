@section('title', 'Design Kit')

<x-test-layout>
    <h1>Heading 1 - Design kit</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

    <h2>Heading 2</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

    <h3>Heading 3</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

    <h4>Heading 4</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

    <h5>Heading 5</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

    <h6>Heading 6</h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum eleifend tincidunt.</p>

    <ol>
        <li>Coffee</li>
        <li>Tea</li>
        <li>Milk</li>
    </ol>

    <ul>
        <li>Coffee</li>
        <li>Tea</li>
        <li>Milk</li>
    </ul>

    <hr>

    {{-- <form action="/">
        <fieldset class="border p-5">
            <legend>Test form</legend>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="John Doe">

            <label class="block" for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="example@email.com">

            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday">

            <label for="cars">Choose a car:</label>
            <select id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
            </select>

            <button class="btn btn-blue rounded-md" type="submit">Submit</button>
        </fieldset>
    </form> --}}

    <hr>

    <form action="/">
        <fieldset class="border p-5">
            <legend>Test form</legend>

            <div>
                <x-forms.label for="name" :value="__('Name')"/>
                <x-forms.input id="name" type="text" name="name" required/>
            </div>

            <div>
                <x-forms.label for="email" :value="__('Email')"/>
                <x-forms.input id="email" type="email" name="email" :value="old('email')" required/>
            </div>

            <div>
                <x-forms.label for="birthday" :value="__('Birthday')"/>
                <x-forms.input id="birthday" type="date" name="birthday" required/>
            </div>

            @php
                $fruits = ['Banana', 'Orange', 'Strawberry']
            @endphp

            <div>
                <x-forms.label for="fruits" :value="__('Fruits')"/>
                <x-forms.select id="fruits" name="fruits" value="Orange" :list="$fruits"/>
            </div>

            @php
                $ages = [
                    "30" => "0 - 30",
                    "60" => "31 - 60",
                    "100" => "61 - 100"
                ];
            @endphp
            <x-forms.radio name="age" :list="$ages" value="60"/>

            <div>
                <x-forms.label for="review" :value="__('Review')"/>
                <x-forms.textarea id="review" name="review">{{ old('review') }}</x-forms.textarea>
            </div>

            <x-forms.button type="submit">{{ __('Submit') }}</x-forms.button>
        </fieldset>
    </form>

    <hr>

    <x-forms.label for="text" value="text"/>            <x-forms.input id="text" type="text" placeholder="text"/>
    <x-forms.label for="checkbox" value="checkbox"/>    <x-forms.input id="checkbox" type="checkbox"/>
    <x-forms.label for="radio" value="radio"/>          <x-forms.input id="radio" type="radio"/>

    <x-forms.label for="date" value="date"/>            <x-forms.input id="date" type="date"/>
    <x-forms.label for="time" value="time"/>            <x-forms.input id="time" type="time"/>
    <x-forms.label for="week" value="week"/>            <x-forms.input id="week" type="week"/>
    <x-forms.label for="month" value="month"/>          <x-forms.input id="month" type="month"/>
    <x-forms.label for="datetime" value="datetime"/>    <x-forms.input id="datetime-local" type="datetime-local"/>

    <x-forms.label for="email" value="email"/>          <x-forms.input id="email" type="email" placeholder="email@example.com"/>
    <x-forms.label for="number" value="number"/>        <x-forms.input id="number" type="number" placeholder="1234"/>
    <x-forms.label for="password" value="password"/>    <x-forms.input id="password" type="password" placeholder="password"/>
    <x-forms.label for="search" value="search"/>        <x-forms.input id="search" type="search" placeholder="search"/>
    <x-forms.label for="tel" value="tel"/>              <x-forms.input id="tel" type="tel" placeholder="+31 0612345678"/>
    <x-forms.label for="url" value="url"/>              <x-forms.input id="url" type="url" placeholder="https://example.com/"/>

    <x-forms.label for="file" value="file"/>            <x-forms.input id="file" type="file"/>

    {{-- <label for="color">color</label><input id="color" type="color"> --}}
    {{-- <label for="range">range</label><input id="range" type="range"> --}}

    <x-forms.button type="submit">Submit</x-forms.button>
    <x-forms.button type="reset">Reset</x-forms.button>
    <x-forms.button type="button">Button</x-forms.button>

</x-test-layout>
