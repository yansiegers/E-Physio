<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.default')

    <meta name="description" content="{{ isset($description) ? $description : '' }}">
    <meta name="keywords" content="{{ isset($keywords) ? $keywords : '' }}">
    <title>{{ config('app.name') }}{{ isset($title) ? Str::title(' – '.$title) : '' }}</title>

    @include('includes.styles')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    @include('layouts.pages.nav')

    <hr>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <hr>

    @include('layouts.pages.footer')
</body>
</html>
