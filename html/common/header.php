<?php 
header('Content-type: text/html; charset=utf-8');
header('Set-Cookie: same-site-cookie=foo; SameSite=Lax');
header('Set-Cookie: cross-site-cookie=bar; SameSite=None; Secure');
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo($title)?></title>
    <meta name="description" content="<?php echo($description)?>">
    <meta name="keywords" content="<?php echo($keywords)?>">
    <link rel="icon" type="image/png" href="/img/ico.png" />
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel='stylesheet' href="/css/style.css" />
    <link rel='stylesheet' href="/css/animate.min.css" />
    <link rel='stylesheet' href="/css/lightbox.css" />
</head>

<body class="home">
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
            <div class="container">
                <a class="navbar-brand" href="/" data-target="#">
                    <img src="/img/logo.png" alt="Curator" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
                    &#9776;
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="exCollapsingNavbar2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Главная<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?if (isset($active_menu) and $active_menu == 'Оборудование') echo ' active'; ?>" href="/device/">Оборудование</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://radiocity.kz/gps-navigaciya/" target="_blank">Магазин</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?if (isset($active_menu) and $active_menu == 'Контакты') echo ' active'; ?>" href="/contacts">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>