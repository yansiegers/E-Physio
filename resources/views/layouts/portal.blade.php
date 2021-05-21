<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.default')

    <meta name="description" content="{{ isset($description) ? $description : '' }}">
    <meta name="keywords" content="{{ isset($keywords) ? $keywords : '' }}">
    <title>Mijn {{ config('app.name') }}{{ isset($title) ? Str::title(' – '.$title) : '' }}</title>

    @include('includes.styles')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <!-- Sidebar -->
    <div>
        @include('layouts.portal.nav')

        @include('layouts.portal.footer')
    </div>

    <hr>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</body>
</html>
