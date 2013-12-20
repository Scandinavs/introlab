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
<?php $activeMenu = '4'?>

<div class="wrap">
<div class="wrapper">
    <!-- start header-->
    <?php include "header.php";?>

    <!-- start content -->
    <div class="main1">
        <div class="contact">
            <div class="contact-form">
                <div class="content">
                    <h2>Свяжитесь с нами</h2>
                </div>
                <form method="post" action="sendmessage.php">
                    <div>
                        <span><label>ИМЯ</label></span>
                        <span><input name="userName" type="text" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>ЭЛ. ПОЧТА</label></span>
                        <span><input name="userEmail" type="text" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>ТЕЛЕФОН</label></span>
                        <span><input name="userPhone" type="text" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>ТЕМА</label></span>
                        <span><textarea name="userMsg"> </textarea></span>
                    </div>
                    <div>
                        <span><input type="submit" class="" value="Отправить запрос"></span>
                    </div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</div>
<!-- start footer -->
<?php include "footer.html";?>

</body>

</html>