<!DOCTYPE HTML>
<html>
<head>
    <title>IntroLab | Video & Infographics</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Exo+2&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Marck+Script&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
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
                <h2>latest projects</h2>
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
                <h2>how can we help you?</h2>
            </div>
            <div class="grids_of_3">
                <div class="grid_1_of_3 images_1_of_3">
                    <h3 class="tools_icon">Web Design</h3>

                    <p>Our website design and development provides quality web solutions which are talored to your
                        needs. These can range from simple <span> CSS </span> and <span>HTML</span> sites to bespoke
                        CMS and E-Commerce Sites. </p>
                </div>
                <div class="grid_1_of_3 images_1_of_3">
                    <h3 class="wordpress_icon">Wordpress</h3>

                    <p>There are many variations of <span> passages </span> of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomised words
                        which don't look even slightly.</p>
                </div>
                <div class="grid_1_of_3 images_1_of_3">
                    <h3 class="facebook_icon">Social Media</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <span> eiusmod </span>
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laborisp.</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="grids_of_3">
                <div class="grid_1_of_3 images_1_of_3">
                    <h3 class="user_icon">Branding</h3>

                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered <span> alteration </span> in some form, by injected humour, or randomised words
                        which don't look even slightly.</p>
                </div>
                <div class="grid_1_of_3 images_1_of_3">
                    <h3 class="gallery_icon">Print Design</h3>

                    <p>Our website design and development provides quality web solutions which are talored to your
                        needs. These can range from simple <span> CSS </span> and <span>HTML</span> sites to bespoke
                        CMS and E-Commerce Sites. </p>
                </div>
                <div class="grid_1_of_3 images_1_of_3">
                    <h3 class="cog_icon">Search Engine Optimization</h3>

                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form, by injected humour, or <span>randomised </span> words
                        which don't look even slightly.</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.html";?>

</body>
</html>