@extends('layouts.general')

@section('content')
    <h1 class="text-center">E-Physio</h1>

    <x-link-button href="/" class="btn-blue rounded-full">
        {{ __('Blue') }}
    </x-link-button>

    <x-link-button href="/" class="btn-purple rounded-full">
        {{ __('Purple') }}
    </x-link-button>

    <x-link-button href="/" class="btn-blue-light rounded-full">
        {{ __('Blue Light') }}
    </x-link-button>

    <x-link-button href="/" class="btn-purple-light rounded-full">
        {{ __('Purple Light') }}
    </x-link-button>
@stop
