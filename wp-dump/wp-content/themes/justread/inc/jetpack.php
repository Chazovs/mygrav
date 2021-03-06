<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package Justread
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function justread_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support(
		'infinite-scroll',
		array(
			'container'      => 'main',
			'render'         => 'justread_infinite_scroll_render',
			'footer'         => 'page',
			'footer_widgets' => 'sidebar-1',
			'wrapper'        => false,
		)
	);

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_theme_support(
		'jetpack-content-options',
		array(
			'blog-display'    => 'excerpt',
			'post-details'    => array(
				'stylesheet' => 'justread-style',
				'date'       => '.posted-on',
				'categories' => '.cat-links',
				'tags'       => '.tags-links',
				'author'     => '.byline',
				'comment'    => '.comments-link',
			),
			'featured-images' => array(
				'archive'         => true,
				'archive-default' => true,
				'post'            => true,
				'post-default'    => true,
				'page'            => true,
				'page-default'    => true,
			),
		)
	);

	// Add theme support for Social Menu.
	add_theme_support( 'jetpack-social-menu', 'svg' );
}
add_action( 'after_setup_theme', 'justread_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function justread_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
}
