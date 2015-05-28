<?php

/*
Theme Name: Mark Pfaff's WEB170 Theme
Theme URI: http://markpfaff.com
Author: Mark Pfaff
Author URI: http://markpfaff.com
Description: This theme was created for WEB170 at Seattle Central College
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: 

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/

//Register My Sidebar
register_sidebar(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s"',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

//Register Menus
register_nav_menus(array(
    'main-menu'=> __('Main'),
));

//Enable Featured Images & Post Thumbnails
add_theme_support('post-thumbnails');


?>