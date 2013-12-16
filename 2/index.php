<!DOCTYPE HTML>
<html>
<head>
    <title>IntroLab | Video & Infographics</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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

<div class="wrap">
    <div class="wrapper">
        <?php include "header.html";?>
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
                    <a href="#"><img src="images/pic1.jpg" title="Project1" alt=""/></a>

                    <h3><a href="#">PIX web design</a></h3>
                    <h4><a href="#">Graphics Design</a></h4>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="#"><img src="images/pic2.jpg" title="Project2" alt=""/></a>

                    <h3><a href="#">Plugin Planet-WordPress</a></h3>
                    <h4><a href="#">print Design</a></h4>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="#"><img src="images/pic3.jpg" title="Project3" alt=""/></a>

                    <h3><a href="#">Free Application</a></h3>
                    <h4><a href="#">WordPress Theme</a></h4>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="#"><img src="images/pic4.jpg" title="Project4" alt=""/></a>

                    <h3><a href="#">iPhone Mail App</a></h3>
                    <h4><a href="#">Branding</a></h4>
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