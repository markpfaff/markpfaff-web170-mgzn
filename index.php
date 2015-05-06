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


                <nav>        
                    <ul> 
                        <li class="logonav"><a href="index.php"><img class="logoimage" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="MGZN Logo"></a></li>
                        <li id="menu-a"><a href="#">About</a></li>
                        <li id="menu-p"><a href="#">Portfolio</a></li>
                        <li id="menu-s"><a href="#">Services</a></li>
                        <li id="menu-j"><a href="#">Journal</a></li>
                        <li id="menu-c"><a href="#">Contact</a></li>
                    </ul>

                </nav>
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
            <section class="about">
                
          
                <?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop  ?>    
                <h2><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content();?>
                <?php endwhile; endif;//end the loop?>

                <div class="boxcenter">
                    <h1>About MGZN</h1>
                    <div class="boxleft">
                        <img id="about-first" src="<?php bloginfo('template_directory'); ?>/images/aboutgroup1.jpg" alt="Photo MGZN Staff">

                   </div><!--end boxleft-->
                    <div class="boxright">
                        <p class="quote"> "Quisque eget sem sed 
                            purus tincidunt faucibus. Aliquam at aliquet augue, ut blandit 
                            lorem. Etiam ac placerat augue." -John Doe </p>
                        
                    </div><!--end boxright-->

                </div><!--end boxcenter--> 
                <div id="sidebar">
                    <p>hi</p>
                    <?php if(is_page()):?>
                    <?php echo get_the_title($post->post_parent); ?>
                    <ul>
                                                
                        <?php 

                        if ($post->post_parent) { // if the page has a parent...

                        wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // list the sub-pages with no title

                        } else { // if the page is a gateway page

                        wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // list the sub-pages with no title

                        } ?>
                    </ul>
                    <?php endif; ?>
                    <?php if(!(is_page())) : ?>
                    <ul>

                    <?php wp_list_categories()?>
                    <?php endif; ?>
                </ul>
                </div>
                <div class="boxcenter">
                    <h2>Over 30 Years of Experience</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Proin dui jus*to, molestie vel commodo ac, maximus quis augue. 
                    Nulla ut vulputate ex. Integer a consequat odio. Curabitur 
                    ultricies nibh at venenatis tempor. Fusce accumsan, magna 
                    ut mattis viverra, quam turpis rhoncus mi, ac tincidunt 
                    tellus lectus id ipsum.   </p>
                </div><!--end boxcenter-->
                <div class="boxcenter">
                    <div class="boxleft">                    
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/aboutgroup2.jpg" alt="Photo MGZN Staff"></a>   
                        <div  class="caption">   
                            <p>Curabitu ultricies nibh at venenatis tempor.</p>
                        </div>
                    </div><!--end boxleft-->

                    <div class="boxright">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/residential1.jpg" alt="Example Photo"></a>                      
                        <div  class="caption">   
                            <p>Curabitu ultricies nibh at venenatis tempor.</p>
                        </div>
                    </div><!--end boxright-->

                </div><!--end boxcenter--> 
                <div class="boxcenter">
                    <h2>History</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Proin dui jus*to, molestie vel commodo ac, maximus quis augue. 
                    Nulla ut vulputate ex. Integer a consequat odio. Curabitur 
                    ultricies nibh at venenatis tempor. Fusce accumsan, magna 
                    ut mattis viverra, quam turpis rhoncus mi, ac tincidunt 
                    tellus lectus id ipsum.   </p>
                </div><!--end boxcenter-->
                <div class="boxcenter">
                    <div class="boxleft">                    
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/s3thumb2.jpg" alt="Example Photo"></a>   
                        <div  class="caption">   
                            <p>Curabitu ultricies nibh at venenatis tempor.</p>
                        </div>
                    </div><!--end boxleft-->

                    <div class="boxright">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/aboutgroup3.jpg" alt="Photo MGZN Staff"></a>                      
                        <div  class="caption">   
                            <p>Curabitu ultricies nibh at venenatis tempor.</p>
                        </div>
                    </div><!--end boxright-->

                </div><!--end boxcenter--> 
                <div class="boxcenter">
                    <h2>Company Values</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Proin dui jus*to, molestie vel commodo ac, maximus quis augue. 
                    Nulla ut vulputate ex. Integer a consequat odio. Curabitur 
                    ultricies nibh at venenatis tempor. Fusce accumsan, magna 
                    ut mattis viverra, quam turpis rhoncus mi, ac tincidunt 
                    tellus lectus id ipsum.   </p>
                </div><!--end boxcenter--> 
                <div class="boxcenter">
                    <p>For more information visit our <a class="services-a" href="services.php">Services</a> or <a class="services-a" href="contact.php">Contact Page</a></p>
                </div><!--end boxcenter-->                    
                <div id="scroll-arrow" class="scroll-arrow"></div>

            </section>
                      <footer >
                <ul>
                    <li>&copy;Copyright</li>
                    <li><a href="#">MGZN Architects</a></li>
                    <li>All Rights Reserved</li>
                    <li class="big"><a href="#">Web Design By: Mark Pfaff</a></li>
                </ul>

            </footer>
            <div class="footersm ">
                <ul>
                    <li>&copy;Copyright</li>
                    <li><a href="#">MGZN Architects</a></li>
                    <li>All Rights Reserved</li>
                    <li class="big"><a href="#">Web Design By: Mark Pfaff</a></li>
                </ul>
            </div><!--end footersm div-->  
            <!--Start WP Footer-->
        <?php wp_footer();?>
            <!--End WP Footer-->

        </main>

        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script>

            

            //Hero image collapses on scroll:
            //Note: line height is set to match navigation_height and navigation_min_height respectively
            navigation_height = 600
            navigation_min_height = 100
            $(window).scroll(function(){
            if(($(document).scrollTop()>=-40) && ($(document).scrollTop()<=(navigation_height-navigation_min_height))){
                    //controls elements dimentions on scroll
                    var s = $(document).scrollTop();
                    console.log(s);
                    $("header").stop().animate({
                        height:navigation_height-s,
                },10);
            // removed following code:
            //	$("header li a").stop().animate({
            //			height:navigation_height-s,
            //			lineHeight:navigation_height-s,
            //    },10);
                    //Elements under navigation bar fix
                    //Laggy? Remove this code. The over flow is has a pretty cool effect anyway.
            //	$("#nextElementFix").stop().animate({
            //			paddingTop:navigation_height-s
            //    },10);
            } else if(($(document).scrollTop()>=-40) && ($(document).scrollTop()>=(navigation_height-navigation_min_height)) ){
                    //hold animation on fast scroll 
                    var s = $(document).scrollTop();
                    $("header").stop().animate({
                        height:navigation_min_height
                    },15);
            //	$("header li a").stop().animate({
            //			height:navigation_min_height,
            //			lineHeight:navigation_min_height,
            //        },15);
            //		$("#nextElementFix").stop().animate({
            //			paddingTop:navigation_min_height-s
            //    	},15);
            }
            });

            //Darkens hero image as  it collapses:
                $(window).scroll (function () {
                    var sT = $(this).scrollTop();
                        if (sT >= 100) {
                            $("#header-color").addClass("change")
                        }else {
                            $("#header-color").removeClass("change")
                        }
                });

            //scroll-arrow div appears when window height is less than 600px 
            //showing there is more content:

                $(document).ready(function(){
                    var wH = $(window).height();
                        if (wH >= 600) {
                            $("#scroll-arrow").addClass("no-display")
                        }else {
                            $("#scroll-arrow").removeClass("no-display")
                        }
                });   


            


            $(document).ready(function(){

                //on nav a hover show brackets
                $("li[id^=\"menu-\"]").hover(function() {
                    $menuID= this.id;
                    $("#" + $menuID + "-select").toggleClass("nav-hover-on");
                   });            

                //Open and close mobile navigation:

                $(".nav-button").click(function () {
                    $(".nav-button,.primary-nav").toggleClass("open");
                    });                       
                

                //portfolio page- on hover switch image  
                  $(".hover-image").hover(function() {
                    $(this).attr("src", $(this).attr("src").replace(/\-off.jpg/, "-on.jpg") );
                            }, function() {
                    $(this).attr("src",$(this).attr("src").replace(/\-on.jpg/, "-off.jpg") );
                    
                   });
                                     
            });

        </script>

    </body>
</html> 