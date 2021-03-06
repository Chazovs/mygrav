<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div id="post-<?php the_ID(); ?>" class="mintwp-grid-post <?php echo esc_attr( mintwp_post_grid_cols() ); ?>">
<div class="mintwp-grid-post-inside">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(mintwp_get_option('hide_thumbnail')) ) { ?>
    <div class="mintwp-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'mintwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail(mintwp_grid_thumb_style(), array('class' => 'mintwp-grid-post-thumbnail-img')); ?></a>
        <?php mintwp_grid_postmeta(); ?>
        <?php if ( !(mintwp_get_option('hide_post_categories_home')) ) { mintwp_grid_cats(); } ?>
    </div>
    <?php } else { ?>
    <div class="mintwp-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'mintwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( mintwp_grid_no_thumb_url() ); ?>" class="mintwp-grid-post-thumbnail-img"/></a>
        <?php mintwp_grid_postmeta(); ?>
        <?php if ( !(mintwp_get_option('hide_post_categories_home')) ) { mintwp_grid_cats(); } ?>
    </div>
    <?php } ?>
    <?php } else { ?>
    <div class="mintwp-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'mintwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( mintwp_grid_no_thumb_url() ); ?>" class="mintwp-grid-post-thumbnail-img"/></a>
        <?php mintwp_grid_postmeta(); ?>
        <?php if ( !(mintwp_get_option('hide_post_categories_home')) ) { mintwp_grid_cats(); } ?>
    </div>
    <?php } ?>

    <div class="mintwp-grid-post-details">
    <?php the_title( sprintf( '<h3 class="mintwp-grid-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php if ( !(mintwp_get_option('hide_post_snippet')) ) { ?><div class="mintwp-grid-post-snippet"><?php the_excerpt(); ?></div><?php } ?>

    <?php //mintwp_grid_postmeta(); ?>
    </div>

</div>
</div>