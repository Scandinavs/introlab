<script type="text/javascript">
    $(function () {
        $(".cssmenu ul li").removeClass("active");
        $(".cssmenu ul li").eq(<?php echo $activeMenu - 1;?>).addClass("active");
    })
</script>
<div class="header">
    <div class="logo">
        <a href="<?php echo $mainPage; ?>" style="font-family: 'Electrolize'; font-size: 3.5em; color: #555555"><p>INTROLAB</p></a>
        <div class="clear"></div>
        <a href="<?php echo $mainPage; ?>" style="font-family: 'Electrolize'; font-size: 1em; color: #555555"><p>VIDEO & INFOGRAPHICS</p></a>
    </div>
    <div class="cssmenu">
        <ul>
            <li class="active" id="mainMenu"><a href="<?php echo $mainPage; ?>">Главная</a></li>
            <li id="portfolioMenu"><a href="portfolio.php">Портфолио</a></li>
            <li id="aboutMenu"><a href="about.php">О нас</a></li>
            <li id="contactMenu"><a href="contact.php">Контакты</a></li>
            <div class="clear"></div>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="top-nav">
        <nav class="clearfix">
            <ul>
                <li><a href="<?php echo $mainPage; ?>">Главная</a></li>
                <li><a href="portfolio.html">Портфолио</a></li>
                <li><a href="about.html">О нас</a></li>
                <li><a href="contact.html">Контакты</a></li>
            </ul>
            <a href="#" id="pull">Меню</a>
        </nav>
    </div>
</div>