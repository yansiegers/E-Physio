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
    <!-- Sidebar -->
    {{-- <div>
        @include('layouts.portal.nav')

        @include('layouts.portal.footer')
    </div>

    <hr> --}}

    <!-- Page Content -->
    <main class="container mx-auto p-5 bg-eph-purple-light">
        {{ $slot }}
    </main>
</body>
</html>
