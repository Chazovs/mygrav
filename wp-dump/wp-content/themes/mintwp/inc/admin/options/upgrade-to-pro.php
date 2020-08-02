<?php
/**
* Upgrade to pro options
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function mintwp_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'sc_mintwp_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'mintwp' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'mintwp_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new MintWP_Customize_Static_Text_Control( $wp_customize, 'mintwp_upgrade_text_control', array(
        'label'       => esc_html__( 'MintWP Pro', 'mintwp' ),
        'section'     => 'sc_mintwp_upgrade',
        'settings' => 'mintwp_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy MintWP? Upgrade to MintWP Pro now and get:', 'mintwp' ).
            '<ul class="mintwp-customizer-pro-features">' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Color Options', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Font Options', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Layout Options (separate options for singular and non-singular pages)', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Custom Page Templates', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Custom Post Templates', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Posts Grid-Layout Styles (2/3/4/5 Columns)', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Posts Grid-Thumbnails Styles (Horizontal/Square/Vertical/Auto Height)', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Featured Posts Widgets with Layout Styles (2/3/4/5 Columns) and Thumbnail Styles (Horizontal/Square/Vertical/Auto Height) : These widgets displays recent/popular/random posts or posts from a given category or tag.', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Tabbed Widget', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Social Profiles Widget and About Me Widget', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Widget Areas', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '3 Header Layouts', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Post Share Buttons', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Related Posts with Thumbnails', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Author Bio Box with Social Buttons', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Sticky Menu/Sticky Sidebars with enable/disable capability', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Built-in Contact Form', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'WooCommerce Support', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Search Engine Optimized', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Customizer options', 'mintwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Features...', 'mintwp' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.MINTWP_PROURL.'" class="button button-primary" target="_blank"><i class="fa fa-shopping-cart"></i> ' . esc_html__( 'Upgrade To MintWP PRO', 'mintwp' ) . '</a></strong>'
    ) ) );

}