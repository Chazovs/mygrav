<?php
/**
* Social profiles options
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function mintwp_social_profiles($wp_customize) {

    $wp_customize->add_section( 'sc_mintwp_sociallinks', array( 'title' => esc_html__( 'Social Links', 'mintwp' ), 'panel' => 'mintwp_main_options_panel', 'priority' => 400, ));

    $wp_customize->add_setting( 'mintwp_options[hide_header_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_header_social_buttons_control', array( 'label' => esc_html__( 'Hide Header Social Buttons', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[hide_header_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[hide_footer_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'mintwp_hide_footer_social_buttons_control', array( 'label' => esc_html__( 'Hide Footer Social Buttons', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[hide_footer_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'mintwp_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'mintwp_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'mintwp_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_vklink_control', array( 'label' => esc_html__( 'VK Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_githublink_control', array( 'label' => esc_html__( 'Github URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'mintwp_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'mintwp_sanitize_email' ) );

    $wp_customize->add_control( 'mintwp_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[telephonenumber]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'mintwp_telephonenumber_control', array( 'label' => esc_html__( 'Telephone Number', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[telephonenumber]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'mintwp_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'mintwp_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'mintwp' ), 'section' => 'sc_mintwp_sociallinks', 'settings' => 'mintwp_options[rsslink]', 'type' => 'text' ) );

}