<!DOCTYPE html>
<html lang="nl">
<head>
    @include('includes.portal.head')
</head>
<body>
    @include('includes.portal.nav')

    <main>
        @yield('content')
    </main>

    @include('includes.portal.footer')
</body>
</html>
