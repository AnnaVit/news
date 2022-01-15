<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title> Новости</title>
</head>
<body class="news-body">

<div class="header">
    @include('blocks.menu')
</div>
</div>
<div class="similar-news">

    <div class="similar-h3">
        <h3>
            <small class="text-muted news-similar">Все новости</small>
        </h3>
    </div>
    <div class="similar_block">
        @include('blocks.smallNews')
    </div>

</div>

</div>
<div class="footer">

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-text footer-text">Navbar text with an inline element</span>
        </div>
    </nav>

</div>
</body>

</html>
