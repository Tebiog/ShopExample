<!DOCTYPE html>
<!-- TODO: 2) change texts in normal-->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- popper js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<!-- bootstrap js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>

<html lang="<?= /** @var $data */
$data['options']['lang'] ?>">
<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="shortcut icon" href="/images/favicon.png" type="">
    <title>Main | IDKSHOP</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css"/>
    <!-- font awesome style -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="/assets/css/responsive.css" rel="stylesheet"/>
</head>
<body>
<div class="">
    <!--    Preloader-->
    <div id="preloader" class="visible"></div>

    <!-- header section starts -->
    <div class="gradient-choose-container ml-5">
        <div class="d-flex">
            <button class="choose-gradient-button" id="black-pink">
            </button>
            <button class="choose-gradient-button" id="black-white">
            </button>
            <button class="choose-gradient-button" id="red-pink">
            </button>
            <button class="choose-gradient-button" id="pink-darkpink">
            </button>
        </div>
    </div>
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="/"><img width="250"
                                                      src="/<?php echo $data['options']['logo'] ?>"
                                                      alt="#"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <ul class="collapse navbar-collapse navbar-nav" id="navbarSupportedContent">

                    <?php
                    $navigate = $data["navigation"];
                    foreach ($navigate as $key => $navElem) {
                        if (count($navElem["childs"]) == 0) {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link <?= $navElem["title"] ?>"
                                   href="<?= $navElem["href"] ?>"><?= $navElem["title"] ?></a>
                            </li>
                            <?php
                        } else { ?>
                            <li class="nav-item dropdown"><a href="<?= $navElem['href'] ?>"
                                                             class="nav-link dropdown-toggle" data-toggle="dropdown"
                                                             role="button" aria-expanded="true">
                                        <span class="nav-label"><?= $navElem["title"] ?><span
                                                    class="caret"></span></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($navElem["childs"] as $childKey => $child) {
                                        ?>
                                        <li><a href="<?= $child['href'] ?>"><?= $child["title"] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <?php
                        }
                    } ?>
                    <?php require_once(COMPONENTS_PATH . "navbar.php") ?>
                </ul>
            </nav>
        </div>

    </header>
</div>


<!-- end header section -->
<!-- slider section -->
<section class="slider_section">
    <div class="slider_bg_box">
        <img src="/images/slider-bg.jpg" alt="">
    </div>
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                                <h1>
                                    <span>
                                    NVIDIA GeForce RTX 3090
                                    </span>
                                    <br>
                                    1st in speed!
                                </h1>
                                <p>
                                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem
                                    Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В
                                    то время некий безымянный печатник создал большую коллекцию размеров и форм
                                    шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только
                                    успешно пережил без заметных изменений пять веков, но и перешагнул в электронный
                                    дизайн. Его популяризации в новое время послужили публикация листов Letraset с
                                    образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы
                                    электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem
                                    Ipsum.
                                </p>
                                <div class="btn-box">
                                    <a href="" class="btn1">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                                <h1>
                                    <span>
                                    NVIDIA GeForce RTX 3080
                                    </span>
                                    <br>
                                    faster then fastest human!
                                </h1>
                                <p>
                                    Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает
                                    сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                    менее стандартное заполнение шаблона, а также реальное распределение букв и
                                    пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш
                                    текст.. Здесь ваш текст.. Здесь ваш текст.." </p>
                                <div class="btn-box">
                                    <a href="" class="btn1">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                                <h1>
                                    <span>
                                    NVIDIA GeForce RTX 3070
                                    </span>
                                    <br>
                                    one of the prettiest video cards ever
                                </h1>
                                <p>
                                    Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда
                                    приемлемые модификации, например, юмористические вставки или слова, которые даже
                                    отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного
                                    проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца.
                                    Также все другие известные генераторы Lorem Ipsum используют один и тот же
                                    текст, который они просто повторяют.
                                <div class="btn-box">
                                    <a href="" class="btn1">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <ol class="carousel-indicators">
                <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel1" data-slide-to="1"></li>
                <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</section>
<!-- end slider section -->

<main>
    <?php /** @var $contentView */
    require_once $contentView; ?>
</main>
<!-- footer start -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="full">
                    <div class="logo_footer">
                        <a href="#"><img width="210" src="/images/logo.png" alt="#"/></a>
                    </div>
                    <div class="information_f">
                        <p><strong>ADDRESS:</strong> <?php echo($data["options"]["address"]); ?></p>
                        <p><strong>TELEPHONE:</strong> <?php echo($data["options"]["tel"]); ?></p>
                        <p><strong>EMAIL:</strong> <?php echo($data["options"]["email"]); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="widget_menu">
                            <h3>Newsletter</h3>
                            <div class="information_f">
                                <p>Subscribe by our newsletter and get news.</p>
                            </div>
                            <div class="form_sub">
                                <form action="/Contact/addEmailingList" method="post">
                                    <fieldset>
                                        <div class="field">
                                            <input type="email" placeholder="Enter Your Mail" name="email"/>
                                            <!-- TODO: new database for same info-->
                                            <input type="submit" value="Subscribe"/>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
<div class="cpy_">
    <p>© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a></p>
</div>

<!-- custom js -->
<script src="/assets/js/custom.js"></script>
<!-- chane color of item on nav panel-->
<script src="/assets/js/nav-item-color.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>