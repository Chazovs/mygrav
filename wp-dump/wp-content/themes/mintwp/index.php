<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="mintwp-main-wrapper clearfix" id="mintwp-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="mintwp-main-wrapper-inside clearfix">

<?php mintwp_top_widgets(); ?>

<div class="mintwp-posts-wrapper" id="mintwp-posts-wrapper">

<?php if ( !(mintwp_get_option('hide_posts_heading')) ) { ?>
<?php if(is_home() && !is_paged()) { ?>
<?php if ( mintwp_get_option('posts_heading') ) : ?>
<h1 class="mintwp-posts-heading"><span><?php echo esc_html( mintwp_get_option('posts_heading') ); ?></span></h1>
<?php else : ?>
<h1 class="mintwp-posts-heading"><span><?php esc_html_e( 'Recent Posts', 'mintwp' ); ?></span></h1>
<?php endif; ?>
<?php } ?>
<?php } ?>

<div class="mintwp-posts-content">
<div class="mintwp-posts-container">

<?php if (have_posts()) : ?>

    <div class="mintwp-posts">
    <div class="<?php echo esc_attr( mintwp_post_grid_cols() ); ?>-sizer"></div>
    <div class="<?php echo esc_attr( mintwp_post_grid_cols() ); ?>-gutter"></div>
    <?php $mintwp_total_posts = $wp_query->post_count; ?>
    <?php $mintwp_post_counter=1; while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', mintwp_post_style() ); ?>

    <?php $mintwp_post_counter++; endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php mintwp_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>
</div>

</div><!--/#mintwp-posts-wrapper -->

<?php mintwp_bottom_widgets(); ?>

</div>
</div>
</div><!-- /#mintwp-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>