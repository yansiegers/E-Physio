<!DOCTYPE html>
<html lang="nl">
<head>
    @include('includes.portal.head')
</head>
<body>
    @include('includes.portal.nav')

    @include('includes.portal.footer')

    <hr>

    <main>
        @yield('content')
    </main>
</body>
</html>
