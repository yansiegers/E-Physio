<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>

                @php
                    $AuthData = Auth::user();
                    $last_meeting = $AuthData->meetings->last();
                    $meeting_date = new Carbon\Carbon($last_meeting->start_date_time);
                    $meeting_created_at = new Carbon\Carbon($last_meeting->created_at);
                @endphp


                <div class="p-6 space-y-5">
                    <table class="">
                        <tr>
                            <th>Cliënt (User)</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>{{ $last_meeting->id }}</td>
                        </tr>
                        <tr>
                            <td>Naam</td>
                            <td>
                                {{ $last_meeting->user->first_name }}
                                {{ $last_meeting->user->last_name }}
                            </td>
                        </tr>
                    </table>
                    <table class="">
                        <tr>
                            <th>Afspraak (Meeting)</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>{{ $last_meeting->id }}</td>
                        </tr>
                        <tr>
                            <td>Afspraakdatum</td>
                            <td>{{ $meeting_date }}</td>
                        </tr>
                        <tr>
                            <td>Aanmaakdatum</td>
                            <td>{{ $meeting_created_at->setTimeZone('Europe/Amsterdam') }}</td>
                        </tr>
                    </table>
                    <table class="">
                        <tr>
                            <th>Fysiotherapeut (Physician)</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>{{ $last_meeting->physician->id }}</td>
                        </tr>
                        <tr>
                            <td>Naam</td>
                            <td>
                                {{ $last_meeting->physician->user->first_name }}
                                {{ $last_meeting->physician->user->last_name }}
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
