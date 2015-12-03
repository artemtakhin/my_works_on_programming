<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); wp_title(); ?></title>
        <!--<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />-->
        <link href='https://fonts.googleapis.com/css?family=Poiret+One|Lobster|Comfortaa&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <?php wp_head();?>
    </head>
    <body>
        <a href="<?php echo home_url(); ?>"><div id="logos-head-site"></div></a>
        <div id="wapper">
            <header id="head-site">
                <nav id="main-menu">
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 
                'container' => false,
                
                 )); ?>
                 </nav>
                <!--<nav id="main-menu">
                    <ul>
                        <a href="<?php echo home_url(); ?>"><li>Главная страница</li></a>
                        <a href="#"><li>Об Авторе</li></a>
                        <a href="#"><li>О проекте</li></a>
                        <a href="#"><li>Контакты</li></a>
                    </ul>
                </nav>-->
            </header>