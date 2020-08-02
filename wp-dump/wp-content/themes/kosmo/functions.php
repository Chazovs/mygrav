<?php

/**
 * kosmo functions and definitions
  @package Kosmo
 *
*/

/* Set the content width in pixels, based on the theme's design and stylesheet.
*/
function kosmo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kosmo_content_width', 980 );
}
add_action( 'after_setup_theme', 'kosmo_content_width', 0 );


if( ! function_exists( 'kosmo_theme_setup' ) ) {


	function kosmo_theme_setup() {

		load_theme_textdomain( 'kosmo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
       // Add title tag 
		add_theme_support( 'title-tag' );


		// Add default logo support		
        add_theme_support( 'custom-logo');

        add_theme_support('post-thumbnails');
        add_image_size('kosmo-page-thumbnail',738,423, true);
        add_image_size('kosmo-about-thumbnail',370,225, true);
        add_image_size('kosmo-blog-front-thumbnail',370,225, true);
        add_image_size('kosmo-projects-thumbnail',500,400, true);      
        
         
         // Add theme support for Semantic Markup
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) ); 

		$defaults = array(
			'default-image'          => get_template_directory_uri() .'/assets/images/page-title-bg.jpg',
			'width'                  => 1920,
			'height'                 => 540,
			'uploads'                => true,
			'default-text-color'     => "fff",
			'wp-head-callback'       => 'kosmo_text_color',
			);
		add_theme_support( 'custom-header', $defaults );

		// Menus
		 register_nav_menus(array(
       'primary' => esc_html__('Primary Menu', 'kosmo'),
       
       ));
		// add excerpt support for pages
        add_post_type_support( 'page', 'excerpt' );

        if ( is_singular() && comments_open() ) {
			wp_enqueue_script( 'comment-reply' );
        }
		  // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );	
		

    	// To use additional css
 	    add_editor_style( 'assets/css/editor-style.css' );
		//About Theme		
		if ( is_admin() ) {
			require( get_template_directory() . '/include/welcome-screen.php');
		}
		 
	}
	add_action( 'after_setup_theme', 'kosmo_theme_setup' );
}

// Register Nav Walker class_alias
require_once('class-wp-bootstrap-navwalker.php');
require get_template_directory(). '/include/search-form.php';
require get_template_directory(). '/include/about.php';
/**
 * Enqueue CSS stylesheets
 */		
if( ! function_exists( 'kosmo_enqueue_styles' ) ) {
	function kosmo_enqueue_styles() {	
	    wp_enqueue_style('kosmo-font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:300,400,500,700','');
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
		wp_enqueue_style('font-awesome', get_template_directory_uri() .'/assets/css/font-awesome.css');
		wp_enqueue_style('flexslider', get_template_directory_uri() .'/assets/css/flexslider.css');
		wp_enqueue_style('carousel', get_template_directory_uri() .'/assets/css/owl.carousel.css');
		wp_enqueue_style('theme', get_template_directory_uri() .'/assets/css/owl.theme.css');
		wp_enqueue_style('bootstrapnav', get_template_directory_uri() . '/assets/css/bootsnav.css');
		wp_enqueue_style('animate', get_template_directory_uri() .'/assets/css/animate.css');
		
		// main style
		wp_enqueue_style( 'kosmo-style', get_stylesheet_uri() );
		
	}
	add_action( 'wp_enqueue_scripts', 'kosmo_enqueue_styles' );
}

/**
 * Enqueue JS scripts
 */

if( ! function_exists( 'kosmo_enqueue_scripts' ) ) {
	function kosmo_enqueue_scripts() {   
		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js',array(),'', true);
		wp_enqueue_script('bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js',array(),'', true);
		wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js',array(),'', true);	
		wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js',array(),'', true);
		wp_enqueue_script('poptrox', get_template_directory_uri() . '/assets/js/jquery.poptrox.js',array(),'', true);
		wp_enqueue_script('kosmo-back-to-top', get_template_directory_uri() . '/assets/js/back-to-top.js',array(),'', true);
		wp_enqueue_script('kosmo-main', get_template_directory_uri() . '/assets/js/main.js',array(),'', true);
	}
	add_action( 'wp_enqueue_scripts', 'kosmo_enqueue_scripts' );
}


/**
 * kosmo admin  JS scripts
 */
function kosmo_admin_enqueue_scripts( $hook ) { 
	wp_enqueue_style( 
		'font-awesome', 
		get_template_directory_uri() . '/assets/css/font-awesome.css'
	);
	wp_enqueue_style( 
		'kosmo-admin', 
		get_template_directory_uri() . '/assets/css/admin.css'
	);
 
}
add_action( 'admin_enqueue_scripts', 'kosmo_admin_enqueue_scripts' );

/**
 * Register sidebars for kosmo
*/
function kosmo_sidebars() {

	// Blog Sidebar
	
	register_sidebar(array(
		'name' => esc_html__( 'Blog Sidebar', "kosmo"),
		'id' => 'blog-sidebar',
		'description' => esc_html__( 'Sidebar on the blog layout.', "kosmo"),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="sidebar-title">',
		'after_title' => '</h3>',
	));
  	

	// Footer Sidebar
	
	register_sidebar(array(
		'name' => esc_html__( 'Footer Widget Area 1', "kosmo"),
		'id' => 'kosmo-footer-widget-area-1',
		'description' => esc_html__( 'The footer widget area 1', "kosmo"),
		'before_widget' => ' <div class="widget %2$s">',
		'after_widget' => '</div> ',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));	
	
	register_sidebar(array(
		'name' => esc_html__( 'Footer Widget Area 2', "kosmo"),
		'id' => 'kosmo-footer-widget-area-2',
		'description' => esc_html__( 'The footer widget area 2', "kosmo"),
		'before_widget' => '<div class="widget %2$s"> ',
		'after_widget' => ' </div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));	
	
	register_sidebar(array(
		'name' => esc_html__( 'Footer Widget Area 3', "kosmo"),
		'id' => 'kosmo-footer-widget-area-3',
		'description' => esc_html__( 'The footer widget area 3', "kosmo"),
		'before_widget' => '<div class=" widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));	
	
	register_sidebar(array(
		'name' => esc_html__( 'Footer Widget Area 4', "kosmo"),
		'id' => 'kosmo-footer-widget-area-4',
		'description' => esc_html__( 'The footer widget area 4', "kosmo"),
		'before_widget' => '<div class=" widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));		
}

add_action( 'widgets_init', 'kosmo_sidebars' );

require get_template_directory(). '/include/comments-function.php';
/**
 * Customizer additions.
*/
require get_template_directory(). '/include/customizer.php';

/**
 * Styles the header text color displayed on the page header title
 *
 */

function kosmo_text_color()
{
	$kosmo_logo_text_color = get_header_textcolor();
	?>
		<style type="text/css">
			<?php
				//Check if user has defined any header image.
				if ( get_header_image() ) :
			?>
				.site-title, .site-description{
					color: #<?php echo esc_attr($kosmo_logo_text_color); ?> !important;
					
				}
			<?php endif; ?>	
		</style>
	<?php

}
?>