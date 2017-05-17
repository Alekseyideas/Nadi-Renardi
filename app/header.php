<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Интернет-магазин женской одежды Nadi Renardi. Сделано в Украине</title>

    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#d26e2c">
    <meta name="theme-color" content="#ffffff">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <link rel="stylesheet" href="css/libs.min.css?<?php echo rand(0,100)?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.min.css">

    <link rel="stylesheet" href="css/main.min.css?<?php echo rand(0,100)?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<!--templates-->
<?php include 't-product.php'?>
<!--////templates-->
<body class="unregistered">
<header>

    <div class="wrapper-top-head">
        <div class="wrap">
            <div class="row v-center">
                <div class="mob-menu mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <a href="/" id="logo"></a>
                <a href="tel:+380986408690" class="tel desktop">+38 098 640 86 90</a>
                <div class="row lang_fav_cart_prof v-center">
                    <div class="language desktop">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <a href="#" class="ukr active">Урк</a>
                        <a href="#" class="rus">Рус</a>
                    </div>
                    <div class="enter desktop">
                        <a href="#">Вхiд <i class="fa fa-user-o" aria-hidden="true"></i></a>
                    </div>
                    <span class="delimiter desktop">|</span>
                    <div class="wish desktop">
                        <i class="fa fa-heart-o empty--wish" aria-hidden="true"></i>
                        <a href="#">
                            <i class="fa fa-heart" aria-hidden="true" ></i>
                            <span class="count"></span>
                        </a>
                        <div class="message-empty">
                            <h4>Список бажань порожній</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </div>
                    <span class="delimiter desktop">|</span>
                    <div class="main-cart cart"> <!--если корзина пустая, добавляется класс  empty-card через js-->
                        <a href="#">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <span class="count">1</span>
                        </a>
                        <div class="message-empty">
                            <h4>Ваша корзина порожня</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="site-menu-search desktop" >
    <div class="wrap">


        <div class="row space v-center">
            <div class="site-menu">
                <ul class="row ">
                    <li><a href="catalog.php" itemprop="url"><span itemprop="title">Новинки</span></a></li>
                    <li><a href="catalog.php" itemprop="url"><span itemprop="title">Сукн</span>і</a></li>
                    <li><a href="catalog.php" itemprop="url"><span itemprop="title">Спідниці та штани</span></a></li>
                    <li><a href="catalog.php" itemprop="url"><span itemprop="title">Пальто</span></a></li>
                    <li><a href="catalog.php" itemprop="url"><span itemprop="title">Аксесуари</span></a></li>
                    <li><a href="#">Знижки</a></li>
                </ul>
            </div>
            <div class="search">
                <form action="" class="row  v-center right">
                    <input type="search" class="field-search">
                    <button class="btn_search" type="submit"></button>
                </form>

            </div>
        </div>

    </div>
</div>


</header>


