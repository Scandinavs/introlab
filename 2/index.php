<!DOCTYPE HTML>
<html>
<head>
    <title>IntroLab | Video & Infographics</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="bciq8ChusHRz5ydfx7RHvMzNoXZdaUy9vW-TbmHI0vw" />
    <!-- google fonts -->
    <link rel="stylesheet" href="css/font-awesome-4.0.3/css/font-awesome.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Exo+2&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Marck+Script&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Electrolize&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <!-- end google fonts -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!--nav-->
    <script src="js/jquery.min.js"></script>
    <script>
        $(function () {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();

            $(pull).on('click', function (e) {
                e.preventDefault();
                menu.slideToggle();
            });

            $(window).resize(function () {
                var w = $(window).width();
                if (w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
</head>
<body>

<?php $mainPage = 'index.php'?>
<?php $activeMenu = '1'?>

<div class="wrap">
    <div class="wrapper">
        <?php include "header.php";?>
        <!-- start banner -->
        <div class="banner">
            <img src="images/banner.png" alt=""/>
            <h2>Ищите креативную студию дизайна?</h2>
            <h3>Больше не надо искать...мы здесь, чтобы помочь!</h3>
        </div>
        <!-- start content -->
        <div class="main">
            <div class="content">
                <h2>недавние проекты</h2>
            </div>
            <div class="grids_of_4">
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="item_details.php?item=bbexpress"><img src="images/bb_express.jpg" title="BB Express" alt="BB Express" /></a>
                    <h3><a href="item_details.php?item=bbexpress">BB Express</a></h3>
                    <p class="para">Рекламный ролик компании BB Express</p>
                    <h4><a href="portfolio.php">Рекламный ролик</a></h4>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="item_details.php?item=oppofinder"><img src="images/oppo_finder.jpg" title="Oppo Finder" alt="Oppo Finder" /></a>
                    <h3><a href="item_details.php?item=oppofinder">Oppo Finder</a></h3>
                    <p class="para">Промо-ролик смартфона Oppo Finder</p>
                    <h4><a href="portfolio.php">Промо-ролик</h4></a>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="item_details.php?item=asttelecom"><img src="images/ast_telecom.jpg" title="AST Telecom" alt="AST Telecom" /></a>
                    <h3><a href="item_details.php?item=asttelecom">AST Telecom</a></h3>
                    <p class="para">Рекламный ролик компании AST Telecom</p>
                    <h4><a href="portfolio.php">Рекламный ролик</a></h4>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="item_details.php?item=predprinimatel46"><img src="images/predprinimatel46.jpg" title="Predprinimatel46.ru" alt="Predprinimatel46.ru" /></a>
                    <h3><a href="item_details.php?item=predprinimatel46">Predprinimatel46.ru</a></h3>
                    <p class="para">Рекламный ролик проекта для предпринимателей Predprinimatel46.ru</p>
                    <h4><a href="portfolio.php">Рекламный ролик</a></h4>
                </div>
                <div class="clear"></div>
            </div>
            <div class="content">
                <h2>Почему выбирают нас?</h2>
            </div>
            <div class="grids_of_3">
                <div class="grid_1_of_3 images_1_of_3">
                    <i class="fa fa-usd icon"></i><h3>Низкие цены</h3>

                    <p>Наши сотрудники работают удалённо, поэтому издержки на содержание офиса не включаются в стоимость работы.
                       Это позволяет экономить Ваши деньги!
                    </p>
                </div>
                <div class="grid_1_of_3 images_1_of_3">
                    <i class="fa fa-clock-o icon"></i><h3><h3>Выполнение работ строго в сроки</h3>

                    <p>За счёт привлечения высококлассных специалистов по всему миру наша компания выполняет поставленные
                        задачи быстро и в сроки.
                    </p>
                </div>
                <div class="grid_1_of_3 images_1_of_3">
                    <i class="fa fa-flask icon"></i><h3>Современные технологии и приемы</h3>

                    <p>Наша компания использует новейшие дизайнерские и технические решения,
                        которые позволят сделать Вашу презентацию или рекламу зрелищной и запоминающейся.
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="grids_of_3">
                <div class="grid_1_of_3 images_1_of_3">
                    <h3 class="user_icon">Эксклюзивный дизайн</h3>

                    <p>Мы разрабатываем уникальные дизайнерские и видео решения на основе лучших мировых практик и
                        многолетнего опыта наших специалистов.
                    </p>
                </div>
                <div class="grid_1_of_3 images_1_of_3">
                    <h3 class="gallery_icon">Индивидуальный подход</h3>

                    <p>Для каждого клиента разрабатывается индивидуальный проект, учитывая пожелания клиента,
                        возможно предоставление прототипов дизайна.
                    </p>
                </div>
                <div class="grid_1_of_3 images_1_of_3">
                    <h3 class="cog_icon">Бесплатный расчёт стоимости</h3>

                    <p>Работая с нашей компанией Вы всегда можете абсолютно бесплатно получить консультацию по
                        интересующим вопросам и заказать расчет проекта абсолютно бесплатно.
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.html";?>

</body>
</html>