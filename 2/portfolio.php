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
<?php $activeMenu = '2'?>

<div class="wrapper">
	<!-- start header-->
    <?php include "header.php";?>
    <!-- start content -->
	 <div class="main1">
	 	 <div class="content">
	 	 	<h2>Наши проекты</h2>
	 	 </div>
	 	 <div class="grids_of_4">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="#"><img src="http://b.vimeocdn.com/ts/455/267/455267607_640.jpg" title="Startium" alt="Startium" /></a>
                    <!--<iframe src="//player.vimeo.com/video/79551585?title=0&amp;byline=0&amp;portrait=0&amp;color=fa7369"
                            width="350" height="197" frameborder="0" webkitallowfullscreen mozallowfullscreen
                            allowfullscreen></iframe>-->
					 <h3><a href="#">Startium</a></h3>
					 <p class="para">Промо-видео для русской компании-стартапа Startium</p>
					 <h4><a href="#">Graphics Design</h4></a>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="#"><img src="http://b.vimeocdn.com/ts/447/306/447306019_640.jpg" title="Pinit logo" alt="Pinit logo" /></a>
                    <!--<iframe src="//player.vimeo.com/video/73262156?title=0&amp;byline=0&amp;portrait=0&amp;color=edff24"
                            width="350" height="197" frameborder="0" webkitallowfullscreen mozallowfullscreen
                            allowfullscreen></iframe>-->
					 <h3><a href="#">Pinit</a></h3>
					 <p class="para">Анимированный логотип компании Pinit</p>
					 <h4><a href="#">print Design</a></h4>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="#"><img src="images/Rutuner.jpg" title="RuTuner" alt="RuTuner" /></a>
<!--                    <a href="#"><img src="http://b.vimeocdn.com/ts/448/867/448867404_640.jpg" title="RuTuner" alt="RuTuner" /></a>-->
					 <h3><a href="#">RuTuner</a></h3>
					 <p class="para">Промо-ролик компании RuTuner.fm</p>
					 <h4><a href="#">WordPress Theme</a></h4>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="#"><img src="http://b.vimeocdn.com/ts/435/156/435156599_640.jpg" title="Интро телешоу" alt="Интро телешоу" /></a>
					 <h3><a href="#">Интро телешоу</a></h3>
					 <p class="para">Интро-видео телевизионного шоу на "Первом канале"</p>
					 <h4><a href="#">Branding</a></h4>
				</div>
				<div class="clear"></div>
			</div>
         <div class="grids_of_4">
             <div class="grid_1_of_4 images_1_of_4">
                 <a href="#"><img src="images/oppo_finder.jpg" title="Oppo Finder" alt="Oppo Finder" /></a>
                 <h3><a href="#">Oppo Finder</a></h3>
                 <p class="para">Промо-ролик смартфона Oppo Finder</p>
                 <h4><a href="#">Graphics Design</h4></a>
             </div>
             <div class="grid_1_of_4 images_1_of_4">
                 <a href="#"><img src="images/ast_telecom.jpg" title="AST Telecom" alt="AST Telecom" /></a>
                 <h3><a href="#">AST Telecom</a></h3>
                 <p class="para">Рекламный ролик компании AST Telecom</p>
                 <h4><a href="#">Branding</a></h4>
             </div>
             <div class="grid_1_of_4 images_1_of_4">
                 <a href="#"><img src="images/bb_express.jpg" title="BB Express" alt="BB Express" /></a>
                 <h3><a href="#">BB Express</a></h3>
                 <p class="para">Рекламный ролик компании BB Express</p>
                 <h4><a href="#">WordPress Theme</a></h4>
             </div>
             <div class="grid_1_of_4 images_1_of_4">
                 <a href="#"><img src="images/predprinimatel46.jpg" title="Predprinimatel46.ru" alt="Predprinimatel46.ru" /></a>
                 <h3><a href="#">Predprinimatel46.ru</a></h3>
                 <p class="para">Рекламный ролик проекта для предпринимателей Predprinimatel46.ru</p>
                 <h4><a href="#">Branding</a></h4>
             </div>
             <div class="clear"></div>
         </div>
	 	 <div class="grids_of_4">
             <div class="grid_1_of_4 images_1_of_4">
                 <a href="#">
                         <img src="images/poster_small.jpg"
                                  title="Концертный постер"
                                  alt="Концертный постер"/>
                 </a>
                 <h3><a href="#">Концертный постер</a></h3>
                 <p class="para">Концертный постер для музыкальной группы "Yellow Help"</p>
                 <h4><a href="#">Branding</a></h4>
             </div>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="#"><img src="http://b.vimeocdn.com/ts/422/935/422935789_640.jpg" title="Графика для телепередачи" alt="Графика для телепередачи" /></a>
					 <h3><a href="#">Графика для телепередачи</a></h3>
					 <p class="para">Часть графики для телевизионной передачи</p>
					 <h4><a href="#">Graphics Design</h4></a>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="#"><img src="images/auto24_promo_video.jpg" title="Телеканал Авто24" alt="Телеканал Авто24" /></a>
					 <h3><a href="#">Телеканал Авто24</a></h3>
					 <p class="para">Промо-видео для телеканала Авто24</p>
					 <h4><a href="#">print Design</a></h4>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
                    <!--<object width="480" height="360">
                        <param name="movie"
                               value="//www.youtube.com/v/VoF2E43tAOM?version=3&amp;hl=en_US&amp;rel=0"></param>
                        <param name="allowFullScreen" value="true"></param>
                        <param name="allowscriptaccess" value="always"></param>
                        <embed src="//www.youtube.com/v/VoF2E43tAOM?version=3&amp;hl=en_US&amp;rel=0"
                               type="application/x-shockwave-flash" width="480" height="360" allowscriptaccess="always"
                               allowfullscreen="true"></embed>
                    </object>-->
					 <a href="#"><img src="images/buckler_hedge.jpg" title="Project7" alt="" /></a>
					 <h3><a href="#">Buckler Hedge</a></h3>
					 <p class="para">Рекламный ролик компании Buckler Hedge</p>
					 <h4><a href="#">WordPress Theme</a></h4>
				</div>
				<div class="clear"></div>
			</div>
         <div class="grids_of_4">
             <div class="grid_1_of_4 images_1_of_4">
                 <a href="#"><img src="images/stroilandiya_small.jpg" title="Stroilandiya" alt="Stroilandiya" /></a>
                 <h3><a href="#">Stroilandiya</a></h3>
                 <p class="para">Рекламный ролик компании Stroilandiya</p>
                 <h4><a href="#">Graphics Design</h4></a>
             </div>
             <div class="clear"></div>
         </div>
 	 </div>
</div>
</div>
  <!-- start foorter -->
<?php include "footer.html";?>
</body>
</html>