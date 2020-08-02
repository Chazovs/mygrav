<?php
/**
* Getting started options
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function mintwp_getting_started($wp_customize) {

    $wp_customize->add_section( 'sc_mintwp_getting_started', array( 'title' => esc_html__( 'Getting Started', 'mintwp' ), 'description' => esc_html__( 'Thanks for your interest in MintWP! If you have any questions or run into any trouble, please visit us the following links. We will get you fixed up!', 'mintwp' ), 'panel' => 'mintwp_main_options_panel', 'priority' => 5, ) );

    $wp_customize->add_setting( 'mintwp_options[documentation]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new MintWP_Customize_Button_Control( $wp_customize, 'mintwp_documentation_control', array( 'label' => esc_html__( 'Documentation', 'mintwp' ), 'section' => 'sc_mintwp_getting_started', 'settings' => 'mintwp_options[documentation]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/mintwp-wordpress-theme/', 'button_target' => '_blank', ) ) );

    $wp_customize->add_setting( 'mintwp_options[contact]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new MintWP_Customize_Button_Control( $wp_customize, 'mintwp_contact_control', array( 'label' => esc_html__( 'Contact Us', 'mintwp' ), 'section' => 'sc_mintwp_getting_started', 'settings' => 'mintwp_options[contact]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/contact/', 'button_target' => '_blank', ) ) );

}