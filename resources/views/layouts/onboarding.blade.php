<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.default')

    <meta name="description" content="@if(View::hasSection('description'))@yield('description')@endif">
    <meta name="keywords" content="@if(View::hasSection('keywords'))@yield('keywords')@endif">
    <title>Mijn {{ config('app.name') }}@if(View::hasSection('title')) - @yield('title')@endif</title>

    @include('includes.styles')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <main {{ $attributes->merge(['class' => '']) }}>
        {{ $slot }}
    </main>
</body>
</html>
