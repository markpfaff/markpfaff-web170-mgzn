<!doctype html>
<html 
    class="index-background">
    <head>
        <meta charset="UTF-8">

        <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

        <!--Remy Sharp Shim -->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
        </script>
        <![endif]-->
        <script src="http://use.typekit.net/hby5wtu.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">        
        <link href="css/media.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?> </title>
        <!--Start WP Head-->
        <?php wp_head();?>
        <!--End WP Head-->
    </head>

    <body class="index-body" <?php body_class(); ?>>
        
        <!-- Background Slider from http://tympanus.net/codrops/2012/01/02/fullscreen-background-image-slideshow-with-css3/-->
        <ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span><div></li>
            <li><span>Image 04</span><div></li>
            <li><span>Image 05</span><div></li>
            <li><span>Image 06</span><div></li>
        </ul>        
        <main>
            <header class="background-hide">
                <div id="header-color">
<!--                <nav class="background-hide">        
                    <ul> 
                        <li class="logonav"><a href='index.php'><img class="logoimage" src="images/logo.png" alt="MGZN Logo"></a></li>
                        <li id="menu-a"><a href="about.php">About</a></li>
                        <li id="menu-p"><a href="portfolio.php">Portfolio</a></li>
                        <li id="menu-s"><a href="services.php">Services</a></li>
                        <li id="menu-j"><a href="journal.php">Journal</a></li>
                        <li id="menu-c"><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>-->
                    <!--Begin New Navigation-->
                    <?php wp_nav_menu(array('theme_location'=> 'main-menu', 'container' => 'nav', 'container_id'=>'navigation',));?>
                    <!--End New Navigation-->
                <div id="menu-selection" class="background-hide">
                    <ul> 
                        <li class="logonav">[]</li>
                        <li id="menu-a-select" class="nav">[]</li>
                        <li id="menu-p-select" class="nav">[]</li>
                        <li id="menu-s-select" class="nav">[]</li>
                        <li id="menu-j-select" class="nav" >[]</li>
                        <li id="menu-c-select" class="nav" >[]</li>
                    </ul>
                </div><!--end menu-selection div>    
                <!--Begin Mobile Navigation Menu from http://astuteo.com/mobilemenu/
                Very simple class toggle to show an open menu -->

                <button class="nav-button">Toggle Navigation</button>
                <a href="index.php"><img class="logosm" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="MGZN Logo"></a>

                        <ul class="primary-nav">
                            <li><a href='index.php'>Home</a></li>
                            <li><a href='about.php'>About</a></li>
                            <li class="parent"><a href='portfolio.php'>Portfolio</a>
                                <ul>
                                     <li><a href="singlepage1.php">Ballard Condo</a></li>
                                     <li><a href="singlepage2.php">Hotel Max</a></li>
                                     <li><a href="singlepage3.php">Sunview Home</a></li>

                                </ul>
                            </li>
                            <li ><a href='services.php'>Services</a></li>
                            <li ><a href='journal.php'>Journal</a></li>
                            <li ><a href='contact.php'>Contact</a></li>
                        </ul>
                <!-- End Mobile Navigation-->

                    <!--       To add the parent menu:

                                <li class="parent"><a href="#">About Wilson</a>
                                                    <ul>
                                                            <li><a href="#">Massage</a></li>
                    -->
                </div><!--end div header-color-->
            </header>
