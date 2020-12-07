<? include_once ROOT . '/models/User.php' ?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <!--  Meta  -->
    <meta charset="UTF-8" />
    <title>ТОН</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  Styles  -->
    <link rel="stylesheet" href="/template/styles/index.processed.css">
    <link rel="stylesheet" href="/template/bootstrap4.5.2/CSS/bootstrap-grid.css">
    <link rel="stylesheet" href="/template/bootstrap4.5.2/CSS/bootstrap-reboot.css">
    <link rel="stylesheet" href="/template/bootstrap4.5.2/CSS/bootstrap.min.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <a href="/" class="navbar-brand">Тон</a>
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <a href="/catalog/tarifs/" class="nav-link">Тарифы</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="/catalog/devices/" class="nav-link">Каталог</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="/shares/" class="nav-link">Акции</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="/support/" class="nav-link">Поддержка</a>
                        </li>
                    </ul>
                    <div>
                        <? if (User::isGuest()): ?>
                        <a href="/user/signin/" class="btn btn-dark mx-2">Личный кабинет</a>
                        <? else : ?>
                        <a href="/user/signout" class="btn btn-light mx-2">Выход</a>
                        <a href="/user/account" class="btn btn-dark mx-2">
                            Аккаунт
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </a>
                        <? endif ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>