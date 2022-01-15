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
    @php

    //dd($flag);
    @endphp

    @include('blocks.menu')

<div>
    <img src="{{$article['photo']}}" class="img-fluid" alt="...">

    <h1 class="display-6 news-h1">{{$article['heading']}}</h1>

    <blockquote class="blockquote">
        <p>{{$article['text']}}</p>
    </blockquote>
    @if ($flag)
        <form action="{{route('add::news')}}" name="add" method="get">
            <input type="hidden" name="id" value="{{$article['id']}}">
            <button type="submit" class="btn btn-lg btn-primary">Добавить в избранное</button>
        </form>
    @endif

</div>
</div>
</div>
<div class="similar-news">
    <div class="similar-h3">
    <h3>
        <small class="text-muted news-similar">Похожие новости</small>
    </h3>
    </div>
<div class="similar_block">

    @include('blocks.similar')

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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>

<script type="text/javascript">

    var path = "{{ url('/search/autocomplete-search-query') }}";

    $('input.typeahead').typeahead({

        source:  function (query, process) {

            return $.get(path, { query: query }, function (data) {

                return process(data);

            });
        }
    });

</script>
</html>
