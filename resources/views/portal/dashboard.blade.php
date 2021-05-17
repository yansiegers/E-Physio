@extends('layouts.portal', [
  'title' => 'Dashboard'
])

@section('content')
    <h1 class="text-center">Mijn E-Physio - Dashboard</h1>

    <ul>
        <li><a href="{{ route('calendar') }}">Kalender</a></li>
        <li><a href="{{ route('exercises') }}">Oefeningen</a></li>
    </ul>
@stop
