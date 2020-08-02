<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function mintwp_widgets_init() {

register_sidebar(array(
    'id' => 'mintwp-header-banner',
    'name' => esc_html__( 'Header Banner', 'mintwp' ),
    'description' => esc_html__( 'This sidebar is located on the header of the web page.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-header-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="mintwp-widget-title">',
    'after_title' => '</h2>'));

register_sidebar(array(
    'id' => 'mintwp-sidebar-one',
    'name' => esc_html__( 'Main Sidebar', 'mintwp' ),
    'description' => esc_html__( 'This sidebar is normally located on the left-hand side of web page.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-side-widget mintwp-box widget %2$s"><div class="mintwp-side-widget-inside mintwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="mintwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'mintwp-home-top-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Home Page Only)', 'mintwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of homepage.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-main-widget mintwp-box widget %2$s"><div class="mintwp-main-widget-inside mintwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="mintwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'mintwp-top-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Every Page)', 'mintwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of every page.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-main-widget mintwp-box widget %2$s"><div class="mintwp-main-widget-inside mintwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="mintwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'mintwp-home-bottom-fullwidth-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Home Page Only)', 'mintwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the bottom of homepage.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-main-widget mintwp-box widget %2$s"><div class="mintwp-main-widget-inside mintwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="mintwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'mintwp-bottom-fullwidth-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Every Page)', 'mintwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the bottom of every page.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-main-widget mintwp-box widget %2$s"><div class="mintwp-main-widget-inside mintwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="mintwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'mintwp-home-top-widgets',
    'name' => esc_html__( 'Top Widgets (Home Page Only)', 'mintwp' ),
    'description' => esc_html__( 'This widget area is located at the top of homepage.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-main-widget mintwp-box widget %2$s"><div class="mintwp-main-widget-inside mintwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="mintwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'mintwp-top-widgets',
    'name' => esc_html__( 'Top Widgets (Every Page)', 'mintwp' ),
    'description' => esc_html__( 'This widget area is located at the top of every page.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-main-widget mintwp-box widget %2$s"><div class="mintwp-main-widget-inside mintwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="mintwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'mintwp-home-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Home Page Only)', 'mintwp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of homepage.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-main-widget mintwp-box widget %2$s"><div class="mintwp-main-widget-inside mintwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="mintwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'mintwp-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Every Page)', 'mintwp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of every page.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-main-widget mintwp-box widget %2$s"><div class="mintwp-main-widget-inside mintwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="mintwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'mintwp-footer-1',
    'name' => esc_html__( 'Footer 1', 'mintwp' ),
    'description' => esc_html__( 'This sidebar is located on the left bottom of web page.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="mintwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'mintwp-footer-2',
    'name' => esc_html__( 'Footer 2', 'mintwp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="mintwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'mintwp-footer-3',
    'name' => esc_html__( 'Footer 3', 'mintwp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="mintwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'mintwp-footer-4',
    'name' => esc_html__( 'Footer 4', 'mintwp' ),
    'description' => esc_html__( 'This sidebar is located on the right bottom of web page.', 'mintwp' ),
    'before_widget' => '<div id="%1$s" class="mintwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="mintwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'mintwp_widgets_init' );


function mintwp_top_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'mintwp-home-top-fullwidth-widgets' ) || is_active_sidebar( 'mintwp-top-fullwidth-widgets' ) ) : ?>
<div class="mintwp-top-wrapper-outer clearfix">
<div class="mintwp-featured-posts-area mintwp-top-wrapper clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'mintwp-home-top-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'mintwp-top-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function mintwp_bottom_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'mintwp-home-bottom-fullwidth-widgets' ) || is_active_sidebar( 'mintwp-bottom-fullwidth-widgets' ) ) : ?>
<div class="mintwp-bottom-wrapper-outer clearfix">
<div class="mintwp-featured-posts-area mintwp-bottom-wrapper clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'mintwp-home-bottom-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'mintwp-bottom-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function mintwp_top_widgets() { ?>

<?php if ( is_active_sidebar( 'mintwp-home-top-widgets' ) || is_active_sidebar( 'mintwp-top-widgets' ) ) : ?>
<div class="mintwp-featured-posts-area mintwp-featured-posts-area-top clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'mintwp-home-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'mintwp-top-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function mintwp_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'mintwp-home-bottom-widgets' ) || is_active_sidebar( 'mintwp-bottom-widgets' ) ) : ?>
<div class='mintwp-featured-posts-area mintwp-featured-posts-area-bottom clearfix'>
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'mintwp-home-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'mintwp-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }