<?php
/**
* The header for MintWP theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class('mintwp-animated mintwp-fadein'); ?> id="mintwp-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<?php if ( !(mintwp_get_option('hide_header_social_buttons')) ) { ?><?php mintwp_header_social_buttons(); ?><?php } ?>
<div id="mintwp-search-overlay-wrap" class="mintwp-search-overlay">
  <span class="mintwp-search-closebtn" title="<?php esc_attr_e('Close Search','mintwp'); ?>">&#xD7;</span>
  <div class="mintwp-search-overlay-content">
    <?php get_search_form(); ?>
  </div>
</div>

<div class="mintwp-container" id="mintwp-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="mintwp-head-content clearfix" id="mintwp-head-content">

<?php mintwp_header_image(); ?>

<?php if ( !(mintwp_get_option('hide_header_content')) ) { ?>
<div class="mintwp-outer-wrapper">
<div class="mintwp-header-inside clearfix">

<div id="mintwp-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="mintwp-logo-img-link">
        <img src="<?php echo esc_url( mintwp_custom_logo() ); ?>" alt="" class="mintwp-logo-img"/>
    </a>
    </div>
<?php else: ?>
    <div class="site-branding">
      <h1 class="mintwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <p class="mintwp-site-description"><?php bloginfo( 'description' ); ?></p>
    </div>
<?php endif; ?>
</div><!--/#mintwp-logo -->

</div>
</div>
<?php } ?>

</div><!--/#mintwp-head-content -->
</div><!--/#mintwp-header -->

<div class="mintwp-container mintwp-primary-menu-container clearfix">
<div class="mintwp-primary-menu-container-inside clearfix">
<?php if ( !(mintwp_get_option('disable_primary_menu')) ) { ?>
<nav class="mintwp-nav-primary" id="mintwp-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
<div class="mintwp-outer-wrapper">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'mintwp-menu-primary-navigation', 'menu_class' => 'mintwp-nav-primary-menu mintwp-menu-primary', 'fallback_cb' => 'mintwp_fallback_menu', ) ); ?>
</div>
</nav>
<?php } ?>
</div>
</div>

<div class="mintwp-outer-wrapper">
<?php mintwp_top_wide_widgets(); ?>
</div>

<div class="mintwp-outer-wrapper">
<div class="mintwp-container clearfix" id="mintwp-wrapper">
<div class="mintwp-content-wrapper clearfix" id="mintwp-content-wrapper">