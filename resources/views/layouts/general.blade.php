<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.default')

    <meta name="description" content="@if(View::hasSection('description'))@yield('description')@endif">
    <meta name="keywords" content="@if(View::hasSection('keywords'))@yield('keywords')@endif">
    <title>{{ config('app.name') }}@if(View::hasSection('title')) - @yield('title')@endif</title>

    @include('includes.styles')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    @include('layouts.pages.nav')

    <main>
        {{ $slot }}
    </main>

    <div class="bg-eph-blue-light mt-8">
        @include('layouts.pages.footer')
    </div>
</body>
</html>
