<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matrix</title>
    <?php wp_head(); ?>
</head>
<body>

<header class="header">
    <div class="video-wrap">
        <video id="video" width="100%" height="auto" autoplay loop muted allowfullscreen>
            <source src="wp-content/themes/newmechanics/video/Kinetic Rain-Changi Airport-Singapore.mp4"></source>
        </video>
    </div>
    <div class="overlay"></div>
    <div class="header__wrap">
        <div class="header__logo"><img src="<?= carbon_get_theme_option("main_logo"); ?>" alt="Новая Механика"></div>
        <h1><span class="header__title">Кинематическая матрица</span> -
            <span id="typed"></span>
        </h1>
        <a href="#second-screen" class="more">Узнать подробнее</a>
        <a href="#second-screen" class="more--arrow"><img src="wp-content/themes/newmechanics/img/arrow.png" alt=""></a>
    </div>
</header>

<div class="page">