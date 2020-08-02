<?php
/**
* Post meta functions
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'mintwp_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function mintwp_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'mintwp' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="mintwp-tags-links"><i class="fa fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'mintwp' ) . '</span>', $tags_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'mintwp_grid_cats' ) ) :
function mintwp_grid_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'mintwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="mintwp-grid-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'mintwp' ) . '</div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'mintwp_grid_postmeta' ) ) :
function mintwp_grid_postmeta() { ?>
    <?php if ( !(mintwp_get_option('hide_post_author_home')) || !(mintwp_get_option('hide_posted_date_home')) || !(mintwp_get_option('hide_comments_link_home')) ) { ?>
    <div class="mintwp-grid-post-footer">
    <div class="mintwp-grid-post-footer-inside">
    <?php if ( !(mintwp_get_option('hide_post_author_home')) ) { ?><span class="mintwp-grid-post-author mintwp-grid-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(mintwp_get_option('hide_posted_date_home')) ) { ?><span class="mintwp-grid-post-date mintwp-grid-post-meta"><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(mintwp_get_option('hide_comments_link_home')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="mintwp-grid-post-comment mintwp-grid-post-meta"><?php comments_popup_link( esc_attr__( 'Leave a comment', 'mintwp' ), esc_attr__( '1 Comment', 'mintwp' ), esc_attr__( '% Comments', 'mintwp' ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'mintwp_single_cats' ) ) :
function mintwp_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ', ', 'mintwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="mintwp-entry-meta-single mintwp-entry-meta-single-top"><span class="mintwp-entry-meta-single-cats"><i class="fa fa-folder-open-o"></i>&nbsp;' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'mintwp' ) . '</span></div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'mintwp_single_postmeta' ) ) :
function mintwp_single_postmeta() { ?>
    <?php if ( !(mintwp_get_option('hide_post_author')) || !(mintwp_get_option('hide_posted_date')) || !(mintwp_get_option('hide_comments_link')) || !(mintwp_get_option('hide_post_edit')) ) { ?>
    <div class="mintwp-entry-meta-single">
    <?php if ( !(mintwp_get_option('hide_post_author')) ) { ?><span class="mintwp-entry-meta-single-author"><i class="fa fa-user-circle-o"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(mintwp_get_option('hide_posted_date')) ) { ?><span class="mintwp-entry-meta-single-date"><i class="fa fa-clock-o"></i>&nbsp;<?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(mintwp_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="mintwp-entry-meta-single-comments"><i class="fa fa-comments-o"></i>&nbsp;<?php comments_popup_link( esc_attr__( 'Leave a comment', 'mintwp' ), esc_attr__( '1 Comment', 'mintwp' ), esc_attr__( '% Comments', 'mintwp' ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(mintwp_get_option('hide_post_edit')) ) { ?><?php edit_post_link( esc_html__( 'Edit', 'mintwp' ), '<span class="edit-link">&nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;