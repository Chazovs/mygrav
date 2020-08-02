<?php
/**
* Post options
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function mintwp_post_options($wp_customize) {

    $wp_customize->add_section( 'sc_mintwp_posts', array( 'title' => esc_html__( 'Post Options', 'mintwp' ), 'panel' => 'mintwp_main_options_panel', 'priority' => 260 ) );

    $wp_customize->add_setting( 'mintwp_options[hide_posts_heading]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_posts_heading_control', array( 'label' => esc_html__( 'Hide HomePage Posts Heading', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_posts_heading]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[posts_heading]', array( 'default' => esc_html__( 'Recent Posts', 'mintwp' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'mintwp_posts_heading_control', array( 'label' => esc_html__( 'HomePage Posts Heading', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[posts_heading]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'mintwp_options[thumbnail_link]', array( 'default' => 'yes', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_thumbnail_link' ) );

    $wp_customize->add_control( 'mintwp_thumbnail_link_control', array( 'label' => esc_html__( 'Thumbnail Link', 'mintwp' ), 'description' => esc_html__('Do you want single post thumbnail to be linked to their post?', 'mintwp'), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[thumbnail_link]', 'type' => 'select', 'choices' => array( 'yes' => esc_html__('Yes', 'mintwp'), 'no' => esc_html__('No', 'mintwp') ) ) );

    $wp_customize->add_setting( 'mintwp_options[read_more_length]', array( 'default' => 20, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_positive_integer' ) );

    $wp_customize->add_control( 'mintwp_read_more_length_control', array( 'label' => esc_html__( 'Auto Post Summary Length', 'mintwp' ), 'description' => esc_html__('Enter the number of words need to display in the post summary. Default is 20 words.', 'mintwp'), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[read_more_length]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[hide_post_snippet]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_post_snippet_control', array( 'label' => esc_html__( 'Hide Post Snippet', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_post_snippet]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_posted_date_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_posted_date_home_control', array( 'label' => esc_html__( 'Hide Posted Date from Posts Summaries', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_posted_date_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_posted_date]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_posted_date_control', array( 'label' => esc_html__( 'Hide Posted Date from Single Posts', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_posted_date]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_post_author_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_post_author_home_control', array( 'label' => esc_html__( 'Hide Post Author from Posts Summaries', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_post_author_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_post_author]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_post_author_control', array( 'label' => esc_html__( 'Hide Post Author from Single Posts', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_post_author]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_post_categories_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_post_categories_home_control', array( 'label' => esc_html__( 'Hide Post Categories from Posts Summaries', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_post_categories_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_post_categories]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_post_categories_control', array( 'label' => esc_html__( 'Hide Post Categories from Single Posts', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_post_categories]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_post_tags_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_post_tags_home_control', array( 'label' => esc_html__( 'Hide Post Tags from Posts Summaries', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_post_tags_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_post_tags]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_post_tags_control', array( 'label' => esc_html__( 'Hide Post Tags from Single Posts', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_post_tags]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_comments_link_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_comments_link_home_control', array( 'label' => esc_html__( 'Hide Comment Link from Posts Summaries', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_comments_link_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_comments_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_comments_link_control', array( 'label' => esc_html__( 'Hide Comment Link from Single Posts', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_comments_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_post_edit]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_post_edit_control', array( 'label' => esc_html__( 'Hide Post Edit Link', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_post_edit]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_thumbnail]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_thumbnail_control', array( 'label' => esc_html__( 'Hide Thumbnails from Every Page', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_thumbnail]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_thumbnail_single]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_thumbnail_single_control', array( 'label' => esc_html__( 'Hide Thumbnails from Posts/Pages', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_thumbnail_single]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_author_bio_box]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_author_bio_box_control', array( 'label' => esc_html__( 'Hide Author Bio Box', 'mintwp' ), 'section' => 'sc_mintwp_posts', 'settings' => 'mintwp_options[hide_author_bio_box]', 'type' => 'checkbox', ) );

}