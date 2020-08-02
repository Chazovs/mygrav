<?php
/**
* More Custom Functions
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get custom-logo URL
function mintwp_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $mintwp_custom_logo_id = get_theme_mod( 'custom_logo' );
    $mintwp_logo = wp_get_attachment_image_src( $mintwp_custom_logo_id , 'full' );
    return $mintwp_logo[0];
}

// Category ids in post class
function mintwp_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $classes [] = 'wpcat-' . $category->cat_ID . '-id';
        }
        return $classes;
}
add_filter('post_class', 'mintwp_category_id_class');

// Change excerpt length
function mintwp_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 20;
    if ( mintwp_get_option('read_more_length') ) {
        $read_more_length = mintwp_get_option('read_more_length');
    }
    return $read_more_length;
}
add_filter('excerpt_length', 'mintwp_excerpt_length');

// Change excerpt more word
function mintwp_excerpt_more($more) {
       if ( is_admin() ) {
         return $more;
       }
       return '...';
}
add_filter('excerpt_more', 'mintwp_excerpt_more');

function mintwp_site_header_style() {
       $site_header_style = 'full-width';
       return $site_header_style;
}

// Adds custom classes to the array of body classes.
function mintwp_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'mintwp-group-blog';
    }

    if ( is_archive() ) {
        $classes[] = 'mintwp-site-archive';
    }

    if ( is_search() ) {
        $classes[] = 'mintwp-site-search';
    }

    if( is_singular() ) {
        $classes[] = 'mintwp-site-singular';

        if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
           $classes[] = 'mintwp-layout-full-width';
        }
    } else {
        if ( is_404() ) {
            $classes[] = 'mintwp-layout-full-width';
        }
    }

    if ( ('full-width' === mintwp_site_header_style()) ) {
        $classes[] = 'mintwp-header-full-width';
    }

    if ( !is_active_sidebar( 'mintwp-home-bottom-widgets' ) && !is_active_sidebar( 'mintwp-single-bottom-widgets' ) && !is_active_sidebar( 'mintwp-singular-bottom-widgets' ) && !is_active_sidebar( 'mintwp-bottom-widgets' ) ) {
        $classes[] = 'mintwp-no-bottom-widgets';
    }

    return $classes;
}
add_filter( 'body_class', 'mintwp_body_classes' );


function mintwp_post_style() {
       $post_style = 'grid';
       return $post_style;
}


function mintwp_grid_thumb_style() {
       $thumb_style = 'mintwp-hauto-image';
       return $thumb_style;
}


function mintwp_post_grid_cols() {
       $post_column = 'mintwp-3-col';
       return $post_column;
}

function mintwp_grid_no_thumb_url() {
       $thumb_url = get_template_directory_uri() . '/assets/images/no-image-4-4.jpg';
       return $thumb_url;
}

function mintwp_header_image() {
    if ( get_header_image() ) : ?>
    <div class="mintwp-header-image clearfix">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="mintwp-header-img-link">
        <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="mintwp-header-img"/>
    </a>
    </div>
    <?php endif;
}