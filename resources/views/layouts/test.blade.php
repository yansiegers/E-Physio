<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.default')

    <title>{{ config('app.name') }}@if(View::hasSection('title')) - @yield('title')@endif</title>

    @include('includes.styles')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    <!-- Page Content -->
    <main class="container mx-auto p-5">
        {{ $slot }}
    </main>

</body>
</html>
