<?php
/**
* Template part for displaying single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mintwp-post-singular mintwp-box'); ?>>
<div class='mintwp-box-inside'>

    <header class="entry-header">
        <?php if ( !(mintwp_get_option('hide_post_categories')) ) { ?><?php mintwp_single_cats(); ?><?php } ?>

        <?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

        <?php mintwp_single_postmeta(); ?>
    </header><!-- .entry-header -->

    <div class="entry-content clearfix">
            <?php
            if ( has_post_thumbnail() ) {
                if ( !(mintwp_get_option('hide_thumbnail')) ) {
                    if ( !(mintwp_get_option('hide_thumbnail_single')) ) {
                        if ( mintwp_get_option('thumbnail_link') == 'no' ) {
                            the_post_thumbnail('mintwp-featured-image', array('class' => 'mintwp-post-thumbnail-single'));
                        } else { ?>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'mintwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('mintwp-featured-image', array('class' => 'mintwp-post-thumbnail-single')); ?></a>
                <?php   }
                    }
                }
            }

            the_content( sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'mintwp' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ) );

            wp_link_pages( array(
             'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'mintwp' ) . '</span>',
             'after'       => '</div>',
             'link_before' => '<span>',
             'link_after'  => '</span>',
             ) );
             ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php if ( !(mintwp_get_option('hide_post_tags')) ) { ?><?php mintwp_post_tags(); ?><?php } ?>
    </footer><!-- .entry-footer -->

    <?php if ( !(mintwp_get_option('hide_author_bio_box')) ) { echo wp_kses_post( force_balance_tags( mintwp_add_author_bio_box() ) ); } ?>

</div>
</article>