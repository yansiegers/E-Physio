@section('title', 'Log in')

<x-general-layout class="mt-16 mb-32">
    <div class="ml-64 grid grid-cols-2">
        <div class="flex flex-col justify-center items-start">
            <x-auth.card class="w-4/6">
                <x-auth.validation-errors class="" :errors="$errors" />
                <form class="space-y-12" action="{{ route('login') }}" method="post">
                    @csrf
                    <div>
                        <x-forms.label for="email" value="E-mailadres" />
                        <x-forms.input class="w-full" id="email" type="email" name="email" :value="old('email')"
                            placeholder="e-mail@voorbeeld.nl" required />
                    </div>
                    <div class="space-y-6">
                        <div>
                            <x-forms.label for="password" value="Wachtwoord" />
                            <x-forms.input class="w-full" id="password" type="password" name="password" placeholder="Wachtwoord"
                                required autocomplete="current-password" />
                        </div>
                        <div>
                            <x-forms.input id="remember_me" type="checkbox" />
                            <x-forms.label for="remember_me" class="inline" value="Onthoud wachtwoord" />
                        </div>
                    </div>
                    {{-- Forgot password --}}
                    <x-forms.button class="btn-primary rounded-full mt-4" type="submit">Inloggen</x-forms.button>
                </form>
            </x-auth.card>
        </div>
        <div class="flex flex-col justify-center items-end">
            <img class="w-5/6" src="{{ asset('img/client-portal-login.png') }}" alt="">
        </div>
    </div>
</x-general-layout>
