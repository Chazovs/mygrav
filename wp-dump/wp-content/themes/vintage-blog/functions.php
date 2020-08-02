<?php 
/*This file is part of Vintage Blog child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

add_action( 'wp_enqueue_scripts', 'vintage_blog_enqueue_child_styles');
function vintage_blog_enqueue_child_styles() {
	wp_enqueue_style( 'vintage-blog-parent-style', get_template_directory_uri() . '/style.css', array('bootstrap','flexslider','bootstrapnav'), '', 'all');
   wp_enqueue_style( 'vintage-blog-vb',get_stylesheet_directory_uri() . '/css/vb.css');
   wp_enqueue_script('vintage-blog-imagesloaded',     get_stylesheet_directory_uri() .  '/js/imagesloaded.js', array(), '', true);
   wp_enqueue_script('vintage-blog-isotope',     get_stylesheet_directory_uri() .  '/js/isotope.js', array(), '', true);
  
}

