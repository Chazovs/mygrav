<?php
/**
 * Kosmo Theme Customizer
 *
 * @package Kosmo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
*/


function kosmo_customize_register( $wp_customize ) {	
	 
	// Kosmo theme choice options
	if (!function_exists('kosmo_section_choice_option')) :
		function kosmo_section_choice_option()
		{
			$kosmo_section_choice_option = array(
				'show' => esc_html__('Show', 'kosmo'),
				'hide' => esc_html__('Hide', 'kosmo')
			);
			return apply_filters('kosmo_section_choice_option', $kosmo_section_choice_option);
		}
	endif;
	
	/**
	 * Sanitizing the select callback example
	 *
	 */
	if ( !function_exists('kosmo_sanitize_select') ) :
		function kosmo_sanitize_select( $input, $setting ) {

			// Ensure input is a slug.
			$input = sanitize_text_field( $input );

			// Get list of choices from the control associated with the setting.
			$choices = $setting->manager->get_control( $setting->id )->choices;

			// If the input is a valid key, return it; otherwise, return the default.
			return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
		}
	endif;

	/**
	 * Drop-down Pages sanitization callback example.
	 *
	 * - Sanitization: dropdown-pages
	 * - Control: dropdown-pages
	 * 
	 * Sanitization callback for 'dropdown-pages' type controls. This callback sanitizes `$page_id`
	 * as an absolute integer, and then validates that $input is the ID of a published page.
	 * 
	 * @see absint() https://developer.wordpress.org/reference/functions/absint/
	 * @see get_post_status() https://developer.wordpress.org/reference/functions/get_post_status/
	 *
	 * @param int                  $page    Page ID.
	 * @param WP_Customize_Setting $setting Setting instance.
	 * @return int|string Page ID if the page is published; otherwise, the setting default.
	 */
	function kosmo_sanitize_dropdown_pages( $page_id, $setting ) {
		// Ensure $input is an absolute integer.
		$page_id = absint( $page_id );
		
		// If $page_id is an ID of a published page, return it; otherwise, return the default.
		return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}
	
	
	/** Front Page Section Settings starts **/	

	$wp_customize->add_panel(
		'frontpage', 
		array(
			'title' => esc_html__('Kosmo Options', 'kosmo'),        
			'description' => '',                                        
			'priority' => 3,
		)
	);
	
	/** Slider Section Settings starts **/
   

	// Panel - Slider Section 1
    $wp_customize->add_section('sliderinfo', 
	    array(
		    'title'   => esc_html__('Home Slider Section', 'kosmo'),
		    'description' => '',
			'panel' => 'frontpage',
		    'priority'    => 140
	    )
	);

	// hide show
	
	$wp_customize->add_setting('kosmo_slider_section_hideshow',
	    array(
	        'default' => 'hide',
	        'sanitize_callback' => 'kosmo_sanitize_select',
	    )
    );
	 
    $kosmo_section_choice_option = kosmo_section_choice_option();
    
    $wp_customize->add_control(
    'kosmo_slider_section_hideshow',
	    array(
	        'type' => 'radio',
	        'label' => esc_html__('Slider Option', 'kosmo'),
	        'description' => esc_html__('Show/hide option for Slider Section.', 'kosmo'),
	        'section' => 'sliderinfo',
	        'choices' => $kosmo_section_choice_option,
	        'priority' => 1
	    )
    );
  
    $slider_no = 3;
	for( $i = 1; $i <= $slider_no; $i++ ) {
		$kosmo_slider_page = 'kosmo_slider_page_' .$i;
		$kosmo_slider_btntxt = 'kosmo_slider_btntxt_' . $i;
		$kosmo_slider_btnurl = 'kosmo_slider_btnurl_' .$i;
		 

		$wp_customize->add_setting( $kosmo_slider_page,
			array(
				'default'           => 1,
				'sanitize_callback' => 'kosmo_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control( $kosmo_slider_page,
			array(
				'label'    			=> esc_html__( 'Slider Page ', 'kosmo' ) .$i,
				'section'  			=> 'sliderinfo',
				'type'     			=> 'dropdown-pages',
				'priority' 			=> 100,
			)
		);

		$wp_customize->add_setting( $kosmo_slider_btntxt,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( $kosmo_slider_btntxt,
			array(
				'label'    			=> esc_html__( 'Slider Button Text','kosmo' ),
				'section'  			=> 'sliderinfo',
				'type'     			=> 'text',
				'priority' 			=> 100,
			)
		);
		
		$wp_customize->add_setting( $kosmo_slider_btnurl,
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control( $kosmo_slider_btnurl,
			array(
				'label'    			=> esc_html__( 'Button URL', 'kosmo' ),
				'section'  			=> 'sliderinfo',
				'priority' 			=> 100,
			)
		);
    }
	/** Slider Section Settings end **/
	
	// Header info
	$wp_customize->add_section(
		'kosmo_header_section', 
		array(
			'title'   => esc_html__('Top Header Info Section', 'kosmo'),
			'description' => '',
			'panel' => 'frontpage',
			'priority'    => 130
		)
	);

	$wp_customize->add_setting(
		'kosmo_header_section_hideshow',
		array(
			'default' => 'hide',
			'sanitize_callback' => 'kosmo_sanitize_select',
		)
	);
	
	$kosmo_section_choice_option = kosmo_section_choice_option();
	$wp_customize->add_control(
		'kosmo_header_section_hideshow',
		array(
			'type' => 'radio',
			'label' => esc_html__('Header Info Option', 'kosmo'),
			'description' => esc_html__('Show/hide option for Header Section.', 'kosmo'),
			'section' => 'kosmo_header_section',
			'choices' => $kosmo_section_choice_option,
			'priority' => 1
		)
	);

	$wp_customize->add_setting(
		'kosmo_header_phone_value', 
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'kosmo_header_phone_value', 
		array(
			'label'   => esc_html__('Contact Number', 'kosmo'),
			'section' => 'kosmo_header_section',
			'priority'  => 3
		)
	);

	$wp_customize->add_setting(
		'kosmo_header_email_value', 
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'kosmo_header_email_value',
		array(
			'label'   => esc_html__('Email', 'kosmo'),
			'section' => 'kosmo_header_section',
			'priority'  => 5
		)
	);
	
	$wp_customize->add_setting(
		'kosmo_header_social_link_1',
		array(
			'default'   =>  '',
			'type'      => 'theme_mod',
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'kosmo_header_social_link_1',
		array(
			'label'   => esc_html__('Facebook URL', 'kosmo'),
			'section' => 'kosmo_header_section',
			'priority'  => 7
		)
	);

	$wp_customize->add_setting(
		'kosmo_header_social_link_2',
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'kosmo_header_social_link_2',
		array(
			'label'   => esc_html__('Twitter URL', 'kosmo'),
			'section' => 'kosmo_header_section',
			'priority'  => 9
		)
	);

	$wp_customize->add_setting(
		'kosmo_header_social_link_3',
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'kosmo_header_social_link_3',
		array(
			'label'   => esc_html__('Linkedin URL', 'kosmo'),
			'section' => 'kosmo_header_section',
			'priority'  => 11
		)
	);

	$wp_customize->add_setting(
		'kosmo_header_social_link_4',
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'kosmo_header_social_link_4',
		array(
			'label'   => esc_html__('Instagram URL', 'kosmo'),
			'section' => 'kosmo_header_section',
			'priority'  => 11
		)
	);
	
	
	//  Services section
	$wp_customize->add_section(
		'services',              
		array(
			'title' => esc_html__('Home Service Section', 'kosmo'),          
			'description' => '',             
			'panel' => 'frontpage',		 
			'priority' => 150,
		)
	);
	
	$wp_customize->add_setting(
		'kosmo_services_section_hideshow',
		array(
			'default' => 'hide',
			'sanitize_callback' => 'kosmo_sanitize_select',
		)
    );
    
    $kosmo_section_choice_option = kosmo_section_choice_option();
    $wp_customize->add_control(
		'kosmo_services_section_hideshow',
		array(
			'type' => 'radio',
			'label' => esc_html__('Home Services Option', 'kosmo'),
			'description' => esc_html__('Show/hide option Section.', 'kosmo'),
			'section' => 'services',
			'choices' => $kosmo_section_choice_option,
			'priority' => 1
		)
    );	
   
    $wp_customize->add_setting(
		'kosmo-services_title',
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);

    $wp_customize->add_control(
		'kosmo-services_title',
		array(
			'label'   => esc_html__('Services Section Title', 'kosmo'),
			'section' => 'services',
			'priority'  => 3
		)
	);
	
	$wp_customize->add_setting(
		'kosmo-services_subtitle',
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);

    $wp_customize->add_control(
		'kosmo-services_subtitle',
		array(
			'label'   => esc_html__('Service Section Subtitle', 'kosmo'),
			'section' => 'services',	  
			'priority'  => 4
		)
	);

    $service_no = 6;
	for( $i = 1; $i <= $service_no; $i++ ) {
		$kosmo_servicepage = 'kosmo_service_page_' . $i;
		$kosmo_serviceicon = 'kosmo_page_service_icon_' . $i;
		
		// Setting - Feature Icon
		$wp_customize->add_setting( 
			$kosmo_serviceicon,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( 
			$kosmo_serviceicon,
			array(
				'label'    			=> esc_html__( 'Service Icon ', 'kosmo' ).$i,
				'description' 		=>  __('Select a icon in this list <a target="_blank" href="https://fontawesome.com/v4.7.0/icons/">Font Awesome icons</a> and enter the class name','kosmo'),
				'section'  			=> 'services',
				'type'     			=> 'text',
				'priority' 			=> 100,
			)
		);
		
		$wp_customize->add_setting( 
			$kosmo_servicepage,
			array(
				'default'           => 1,
				'sanitize_callback' => 'kosmo_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control( 
			$kosmo_servicepage,
			array(
				'label'    			=> esc_html__( 'Service Page ', 'kosmo' ) .$i,
				'section'  			=> 'services',
				'type'     			=> 'dropdown-pages',
				'priority' 			=> 100,
			)
		);
    }
	
	
	//  Projects section
	$wp_customize->add_section(
		'projects',              
		array(
			'title' => esc_html__('Home Project Section', 'kosmo'),          
			'description' => '',             
			'panel' => 'frontpage',		 
			'priority' => 160,
		)
	);
	
	$wp_customize->add_setting(
		'kosmo_projects_section_hideshow',
		array(
			'default' => 'hide',
			'sanitize_callback' => 'kosmo_sanitize_select',
		)
	);
	
	$kosmo_section_choice_option = kosmo_section_choice_option();
	$wp_customize->add_control(
		'kosmo_projects_section_hideshow',
		array(
			'type' => 'radio',
			'label' => esc_html__('Projects Option', 'kosmo'),
			'description' => esc_html__('Show/hide option Section.', 'kosmo'),
			'section' => 'projects',
			'choices' => $kosmo_section_choice_option,
			'priority' => 1
		)
	);
		
	$wp_customize->add_setting(
		'kosmo-projects_title', 
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		'kosmo-projects_title', 
		array(
			'label'   => esc_html__('Projects Section Title', 'kosmo'),
			'section' => 'projects',
			'priority'  => 3
		)
	);

	$wp_customize->add_setting(
		'kosmo-projects_subtitle', 
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'kosmo-projects_subtitle',
		array(
			'label'   => esc_html__('Projects Description', 'kosmo'),
			'section' => 'projects', 
			'priority'  => 4
		)
	);
	
	$projects_no = 6;
	for( $i = 1; $i <= $projects_no; $i++ ) {
		$kosmo_projectspage = 'kosmo_projects_page_' . $i;		
		$wp_customize->add_setting( 
			$kosmo_projectspage,
			array(
				'default'           => 1,
				'sanitize_callback' => 'kosmo_sanitize_dropdown_pages',
			)
		);
		$wp_customize->add_control( 
			$kosmo_projectspage,
			array(
				'label'    			=> esc_html__( 'Projects Page ', 'kosmo' ) .$i,
				'section'  			=> 'projects',
				'type'     			=> 'dropdown-pages',
				'priority' 			=> 100,
			)
		);
	}
	// Blog section
	$wp_customize->add_section(
		'kosmo-blog_info',
		array(
			'title'   => esc_html__('Home Blog Section', 'kosmo'),
			'description' => '',
			'panel' => 'frontpage',
			'priority'    => 170
		)
	);
	
	$wp_customize->add_setting(
		'kosmo_blog_section_hideshow',
		array(
			'default' => 'show',
			'sanitize_callback' => 'kosmo_sanitize_select',
		)
	);
    
    $kosmo_section_choice_option = kosmo_section_choice_option();
    $wp_customize->add_control(
		'kosmo_blog_section_hideshow',
		array(
			'type' => 'radio',
			'label' => esc_html__('Blog Option', 'kosmo'),
			'description' => esc_html__('Show/hide option for Blog Section.', 'kosmo'),
			'section' => 'kosmo-blog_info',
			'choices' => $kosmo_section_choice_option,
			'priority' => 1
		)
    );
	
	$wp_customize->add_setting(
		'kosmo_blog_title',
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'kosmo_blog_title',
		array(
			'label'   => esc_html__('Blog Title', 'kosmo'),
			'section' => 'kosmo-blog_info',
			'priority'  => 1
		)
	);

	$wp_customize->add_setting( 'kosmo_blog_btntxt',
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( 'kosmo_blog_btntxt',
			array(
				'label'    			=> esc_html__( 'Button Text','kosmo' ),
				'section'  			=> 'kosmo-blog_info',
				'type'     			=> 'text',
				'priority' 			=> 100,
			)
		);

    $wp_customize->add_setting( 
		'kosmo_blog_btnurl',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control( 
		'kosmo_blog_btnurl',
        array(
            'label'             => esc_html__( 'Button URL', 'kosmo' ),
            'section'           => 'kosmo-blog_info',
            'priority'          => 100,
        )
    );
	
	// Callout section
	$wp_customize->add_section(
		'kosmo_footer_contact', 
		array(
			'title'   => esc_html__('Home Callout Section', 'kosmo'),
			'description' => '',
			'panel' => 'frontpage',
			'priority'    => 170
		)
	);
	
	$wp_customize->add_setting(
		'kosmo_contact_section_hideshow',
		array(
			'default' => 'hide',
			'sanitize_callback' => 'kosmo_sanitize_select',
		)
	);

	$kosmo_section_choice_option = kosmo_section_choice_option();
	$wp_customize->add_control(
		'kosmo_contact_section_hideshow',
		array(
			'type' => 'radio',
			'label' => esc_html__('Footer Callout', 'kosmo'),
			'description' => esc_html__('Show/hide option for Footer Callout Section.', 'kosmo'),
			'section' => 'kosmo_footer_contact',
			'choices' => $kosmo_section_choice_option,
			'priority' => 5
		)
	);

	$wp_customize->add_setting(
		'ctah_heading', 
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'ctah_heading', 
		array(
			'label'   => esc_html__('Callout Text', 'kosmo'),
			'section' => 'kosmo_footer_contact',
			'priority'  => 8
		)
	);

	$wp_customize->add_setting(
		'ctah_btn_url', 
		array(
			'default'   =>'',
			'type'      => 'theme_mod',
			'sanitize_callback'	=> 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'ctah_btn_url', 
		array(
			'label'   => esc_html__('Button URL', 'kosmo'),
			'section' => 'kosmo_footer_contact',
			'priority'  => 10
		)
	);

	$wp_customize->add_setting(
		'ctah_btn_text', 
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'ctah_btn_text', 
		array(
			'label'   => esc_html__('Button Text', 'kosmo'),
			'section' => 'kosmo_footer_contact',
			'priority'  => 12
		)
	);
	
	// clients logo  info
	$wp_customize->add_section(
		'clients_logo', 
		array(
			'title'   => esc_html__('Home Clients logo Section', 'kosmo'),
			'description' => '',
			'panel' => 'frontpage', 
			'priority'        => 170
		)
	);

	$wp_customize->add_setting(
		'kosmo_clients_section_hideshow',
		array(
			'default' => 'hide',
			'sanitize_callback' => 'kosmo_sanitize_select',
		)
	);

	$kosmo_section_choice_option = kosmo_section_choice_option();
	$wp_customize->add_control(
		'kosmo_clients_section_hideshow',
		array(
			'type' => 'radio',
			'label' => esc_html__('Clients-logo', 'kosmo'),
			'description' => esc_html__('Show/hide option for Clients-logo Section.', 'kosmo'),
			'section' => 'clients_logo',
			'choices' => $kosmo_section_choice_option,
			'priority' => 5
		)
	);

	// Clients title
	$wp_customize->add_setting(
		'kosmo_clients_title',
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'kosmo_clients_title',
		array(
			'label'   => esc_html__('Clients logo Section Title', 'kosmo'),
			'section' => 'clients_logo',
			'priority'  => 6
		)
	);

	$client_no = 6;
	for( $i = 1; $i <= $client_no; $i++ ) 
	{
		$kosmo_client_logo = 'kosmo_client_logo_' . $i;   

		$wp_customize->add_setting( 
			$kosmo_client_logo,
			array(
				'default'           => 1,
				'sanitize_callback' => 'kosmo_sanitize_dropdown_pages',
			)
		);
		$wp_customize->add_control( 
			$kosmo_client_logo,
			array(
				'label'    			=> esc_html__( 'Client Page ', 'kosmo' ) .$i,
				'section'  			=> 'clients_logo',
				'type'     			=> 'dropdown-pages',
				'priority' 			=> 100,
			)
		);

	}

	// Footer Section
	
	$wp_customize->add_section(
		'kosmo-footer_info',
		array(
			'title'   => esc_html__('Footer Section', 'kosmo'),
			'description' => '',
			'panel' => 'frontpage',
			'priority'    => 170
		)
	);

	$wp_customize->add_setting(
		'kosmo_footer_section_hideshow',
		array(
			'default' => 'show',
			'sanitize_callback' => 'kosmo_sanitize_select',
		)
	);
	$kosmo_section_choice_option = kosmo_section_choice_option();
	$wp_customize->add_control(
		'kosmo_footer_section_hideshow',
		array(
			'type' => 'radio',
			'label' => esc_html__('Footer Option', 'kosmo'),
			'description' => esc_html__('Show/hide option for Footer Section.', 'kosmo'),
			'section' => 'kosmo-footer_info',
			'choices' => $kosmo_section_choice_option,
			'priority' => 1
		)
	);

	$wp_customize->add_setting(
		'kosmo-footer_title',
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'sanitize_callback'	=> 'wp_kses_post'
		)
	);

	$wp_customize->add_control(
		'kosmo-footer_title',
		array(
			'label'   => esc_html__('Copyright', 'kosmo'),
			'section' => 'kosmo-footer_info',
			'type'      => 'textarea',
			'priority'  => 1
		)
	);
   
  	
/** Front Page Section Settings end **/	

}
add_action( 'customize_register', 'kosmo_customize_register' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class kosmo_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/include/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'kosmo_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new kosmo_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'   => 1,
					'title'    => esc_html__( 'Kosmo Pro Theme', 'kosmo' ),
					'pro_text' => esc_html__( 'Upgrade Pro', 'kosmo' ),
					'pro_url'  => esc_url('http://deepeshpaliwal.com/product/kosmo-pro/'),
				)
			)
		);
		// Register sections.
		$manager->add_section(
			new kosmo_Customize_Section_Pro(
				$manager,
				'example_2',
				array(
					'priority'   => 2,
					'title'    => esc_html__( 'Kosmo Doc', 'kosmo' ),
					'pro_text' => esc_html__( 'Documentation', 'kosmo' ),
					'pro_url'  => esc_url('http://deepeshpaliwal.com/kosmo/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {
		wp_enqueue_script( 'kosmo-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );
		
		wp_enqueue_style( 'kosmo-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
kosmo_Customize::get_instance();

 ?>