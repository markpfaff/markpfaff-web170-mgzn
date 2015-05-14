<!doctype html>
<html 
    class="white-background">
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
        <link href="media.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?> </title>
        <!--Start WP Head-->
        <?php wp_head();?>
        <!--End WP Head-->
    
    </head>

    <body <?php body_class(); ?>>
          <main>
            <header class="a-hero">
                <div id="header-color">


<!--                <nav>        
                    <ul> 
                        <li class="logonav"><a href="index.php"><img class="logoimage" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="MGZN Logo"></a></li>
                        <li id="menu-a"><a href="#">About</a></li>
                        <li id="menu-p"><a href="#">Portfolio</a></li>
                        <li id="menu-s"><a href="#">Services</a></li>
                        <li id="menu-j"><a href="#">Journal</a></li>
                        <li id="menu-c"><a href="#">Contact</a></li>
                    </ul>

                </nav>-->
                    <!--Begin New Navigation-->
                    <?php wp_nav_menu(array('theme_location'=> 'main-menu', 'container' => 'nav', 'container_id'=>'navigation',));?>
                    <!--End New Navigation-->
                <div id="menu-selection" >
                    <ul> 
                        <li class="logonav">[]</li>
                        <li id="menu-a-select" class="nav-on">[]</li>
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
                            <li><a href='#'>About</a></li>
                            <li class="parent"><a href='#'>Portfolio</a>
                                <ul>
                                     <li><a href="#">Ballard Condo</a></li>
                                     <li><a href="#">Hotel Max</a></li>
                                     <li><a href="#">Sunview Home</a></li>

                                </ul>
                            </li>
                            <li ><a href='#'>Services</a></li>
                            <li ><a href='#'>Journal</a></li>
                            <li ><a href='#'>Contact</a></li>
                        </ul>
                <!-- End Mobile Navigation-->

                    <!--       To add the parent menu:

                                <li class="parent"><a href="#">About Wilson</a>
                                                    <ul>
                                                            <li><a href="#">Massage</a></li>
                    -->
                </div><!--end div header-color-->
            </header>
<!--            <div class="black-spacer"></div>-->
            <div id="middle">
