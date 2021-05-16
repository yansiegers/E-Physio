<!DOCTYPE html>
<html lang="nl">
<head>
    @include('includes.pages.head')
</head>
<body>
    @include('includes.pages.nav')

    <main>
        @yield('content')
    </main>

    @include('includes.pages.footer')
</body>
</html>
