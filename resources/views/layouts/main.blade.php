<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')Investidor10 News</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">

    @yield("css")

    <link rel="stylesheet" href="/css/responsive.css">

</head>
<body class="body-container">
    <header>
        <h3><a href="{{route("home")}}">Investidor10<br><span>News</span></a></h3>
        <a href="/painel/news">Painel</a>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Desenvolvido por <a href="https://linkedin.com/in/gilsonreis"><strong>Gilson Reis</strong></a></p>
    </footer>

</body>
</html>
