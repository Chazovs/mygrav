<?php
/**
* The template for displaying full-width page.
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*
* Template Name: Full Width, no sidebar
* Template Post Type: page
*/

get_header(); ?>

<div class="mintwp-main-wrapper clearfix" id="mintwp-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="mintwp-main-wrapper-inside clearfix">

<?php mintwp_top_widgets(); ?>

<div class="mintwp-posts-wrapper" id="mintwp-posts-wrapper">

<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;
    ?>

<?php endwhile; ?>
<div class="clear"></div>

</div><!--/#mintwp-posts-wrapper -->

<?php mintwp_bottom_widgets(); ?>

</div>
</div>
</div><!-- /#mintwp-main-wrapper -->

<?php get_footer(); ?>