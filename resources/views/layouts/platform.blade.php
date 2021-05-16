<!DOCTYPE html>
<html lang="nl">
<head>
    @include('includes.platform.head')
</head>
<body>
@include('includes.platform.nav')

<hr>

<main>
    @yield('content')
</main>

<hr>

@include('includes.footer')
</body>
</html>
