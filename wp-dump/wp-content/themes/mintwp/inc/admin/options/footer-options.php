<?php
/**
* Footer options
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function mintwp_footer_options($wp_customize) {

    $wp_customize->add_section( 'sc_mintwp_footer', array( 'title' => esc_html__( 'Footer', 'mintwp' ), 'panel' => 'mintwp_main_options_panel', 'priority' => 440 ) );

    $wp_customize->add_setting( 'mintwp_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_html', ) );

    $wp_customize->add_control( 'mintwp_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'mintwp' ), 'section' => 'sc_mintwp_footer', 'settings' => 'mintwp_options[footer_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'mintwp' ), 'section' => 'sc_mintwp_footer', 'settings' => 'mintwp_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

}