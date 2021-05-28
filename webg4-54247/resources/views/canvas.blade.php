<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

</head>

<body>
    <header>
        <a href="/accueil">Home</a>
        <a href="/depots">Dépots</a>
        <h1>@yield('header')</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>WEBG4 - WEBII - 54247 </p>
    </footer>
</body>

</html>