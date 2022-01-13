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
    <nav class="navbar navbar-expand-lg navbar-light bg-light news-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

<div>
    <img src="https://images.unsplash.com/photo-1543708819-a79b0bce3ea9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" class="img-fluid" alt="...">

    <h1 class="display-6 news-h1">Релиз S.T.A.L.K.E.R. 2 отложен до 8 декабря 2022 года</h1>

    <blockquote class="blockquote">
        <p>Причина сдвига срока выхода долгожданного тайтла — студии нужно еще время, чтобы «реализовать своё видение» и «довести игру до нужного состояния».
            В июне 2021 года студия GSC Game World раскрыла первую дату выхода игры S.T.A.L.K.E.R. 2 на ПК и консолях Xbox Series X и S. Разработчики собирались
            выпустит тайтл под названием S.T.A.L.K.E.R. 2: Heart of Chernobyl (Сердце Чернобыля) 28 апреля 2022 года.
            У игры также будет два сюжетных дополнения.
            Шутер пока что доступен для предзаказа (но пользователи не верят и в эту дату) с новой дата релиза 8 декабря 2022 года в Steam,
            Epic Games и Microsoft Store по цене от 2499 руб. У игры появился официальный сайт, где также поменяна дата выхода.
            Разработчики из GSC пообещали, что S.T.A.L.K.E.R. 2 выйдет на новом движке Unreal Engine 5.
            У игры будет бесшовный фотореалистичный открытый мир радиоактивной зоны площадью 64 кв. км с детализированными локациями,
            которые позволят взглянуть на пост-апокалиптическую атмосферу под разными углами.
            Виртуальных сталкеров ждет сложная и разветвленная история с несколькими концовками.
            В игре будет задействована система симуляции жизни «A-life 2.0», которая «сделает мир живым как никогда», а также иммерсивные
            механики выживания — голод, сон, кровотечение и облучение. GSC пояснила, что режим многопользовательской игры
            S.T.A.L.K.E.R. 2: Heart of Chernobyl будет доступен бесплатно через некоторое время после релиза.
            26 марта 2021 года разработчики S.T.A.L.K.E.R. 2 показали снаряжение персонажей, оружие и пообещали разные зубы у NPC.
            Видео было посвящено 14-летию игры S.T.A.L.K.E.R.: Shadow of Chernobyl.
            30 декабря 2020 года украинская студия GSC Game World и издание IGN представили первый тизер S.T.A.L.K.E.R. 2,
            в котором показан геймплей игры. Разработчики пояснили, что для записи ролика использовался настоящий движок игры.</p>
    </blockquote>

</div>
    <!--<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1622597467821-df79dcb4f94d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1639610834110-0de6043492f0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1641484565801-0a01629e63a3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>-->

</div>
</div>
<div class="similar-news">
    <h3>

        <small class="text-muted news-similar">Новости на похожую тему</small>
    </h3>
<div class="row justify-content-center small-news">
    <div class="content small-content">
        <div class="card" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1543708819-a79b0bce3ea9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center small-news">
        <div class="content small-content">
            <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1543708819-a79b0bce3ea9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="row justify-content-center small-news">
            <div class="content small-content">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1543708819-a79b0bce3ea9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>


        </div>

</div>

</div>
    <div class="footer">

            <a class="navbar-brand" href="#">Новости</a>

    </div>
</body>

</html>
