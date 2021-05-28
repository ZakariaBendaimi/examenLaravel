<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>

<body>
    <header>
        <h1>@yield('header')</h1>
        <a href="/accueil">Home</a>
        <a href="/depots">Dépots</a>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>WEBG4 - WEBII - 54247 </p>
    </footer>
</body>

</html>