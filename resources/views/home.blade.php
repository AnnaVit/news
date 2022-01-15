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
    @php

       // dd($news);
    @endphp
</div>
</div>
<div class="similar-news">

    <div class="similar-h3">
        <h3>
            <small class="text-muted news-similar">Интересные новости</small>
        </h3>
    </div>
    <div class="similar_block">
        @include('blocks.smallNews')

    </div>

    <!--<nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>-->

</div>

<!--<div class="general-news">
    <div class="similar-h3">
        <h3>
            <small class="text-muted news-general">Общие новости</small>
        </h3>
    </div>
    <div class="similar_block">
        <div class="news_block">
            <div class="row justify-content-center small-news">
                <div class="content small-content">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1543708819-a79b0bce3ea9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Прочитать</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="news_block">
            <div class="row justify-content-center small-news">
                <div class="content small-content">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1543708819-a79b0bce3ea9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Прочитать</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="news_block">
            <div class="row justify-content-center small-news">
                <div class="content small-content">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1543708819-a79b0bce3ea9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Прочитать</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>-->


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
