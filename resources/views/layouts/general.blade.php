<!DOCTYPE html>
<html lang="nl">
<head>
    @include('includes.pages.head')
</head>
<body>
    @include('includes.pages.nav')

    <hr>

    <main>
        @yield('content')
    </main>

    <hr>

    @include('includes.pages.footer')
</body>
</html>
