<?php
$kosmo_view_demo = esc_html__( 'View Demo', 'kosmo');
$kosmo_upgrade_to_pro = esc_html__( 'Upgrade To Pro', 'kosmo' );


function kosmo_theme_page() {
	$title = esc_html(__('About Kosmo Theme','kosmo'));
	add_theme_page( 
		esc_html(__( 'About Kosmo Theme','kosmo')),
		$title.'', 
		'edit_theme_options',
		'kosmo_upgrade',
		'kosmo_display_upgrade'
	);
}

add_action('admin_menu','kosmo_theme_page');


function kosmo_display_upgrade() {
  $theme_data = wp_get_theme('kosmo'); 
    
    // Check for current viewing tab
    $tab = null;
    if ( isset( $_GET['tab'] ) ) {
        $tab = $_GET['tab'];
    } else {
        $tab = null;
    } 
     
    $pro_theme_url = 'http://deepeshpaliwal.com/product/kosmo-pro/';
    $pro_theme_demo = 'http://deepeshpaliwal.com/product/kosmo-pro-demo/';
    $doc_url  = 'http://deepeshpaliwal.com/docs/wp-themes/kosmo/';
    $support_url = 'https://wordpress.org/support/theme/kosmo';   
    $rating_url = 'https://wordpress.org/support/theme/kosmo/reviews/#new-post';   
    
    $current_action_link =  admin_url( 'themes.php?page=kosmo_upgrade&tab=pro_features' ); ?>
    
	<div class="kosmo-wrapper about-wrap">
        <h1><?php printf(esc_html__('Welcome to %1$s - Version %2$s', 'kosmo'), $theme_data->Name ,$theme_data->Version ); ?></h1><?php
       	printf( __('<div class="about-text">Kosmo Business corporate theme is known for its business layout and unique style. It is suitable for any kind of business,  startups, finance, corporate, lawyer,  agency  and the medium sized companies. Being a perfect match as a theme for the digital marketing as well as online business promotion.', 'kosmo') ); ?>
       <p class="upgrade-btn"><a class="upgrade" href="<?php echo esc_url($pro_theme_url); ?>" target="_blank"><?php printf( __( 'Upgrade To %1s Pro Now', 'kosmo'), $theme_data->Name ); ?></a></p>

	   <h2 class="nav-tab-wrapper">
	        <a href="?page=kosmo_upgrade" class="nav-tab<?php echo is_null($tab) ? ' nav-tab-active' : null; ?>"><?php echo $theme_data->Name; ?></a>
			<a href="?page=kosmo_upgrade&tab=pro_features" class="nav-tab<?php echo $tab == 'pro_features' ? ' nav-tab-active' : null; ?>"><?php esc_html_e( 'PRO Features', 'kosmo' );  ?></a>
            <a href="?page=kosmo_upgrade&tab=free_vs_pro" class="nav-tab<?php echo $tab == 'free_vs_pro' ? ' nav-tab-active' : null; ?>"><?php esc_html_e( 'Free VS PRO', 'kosmo' ); ?></a>
	        <?php do_action( 'kosmo_admin_more_tabs' ); ?>
	    </h2>      

        <?php if ( is_null( $tab ) ) { ?>
            <div class="theme_info info-tab-content">
                <div class="theme_info_column clearfix">
                    <div class="theme_info_left">
                        <div class="theme_link">
                            <h3><?php esc_html_e( 'Theme Customizer', 'kosmo' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('%s supports the Theme Customizer for all theme settings. Click "Customize" to start customize your site.', 'kosmo'), $theme_data->Name); ?></p>
                            <p>
                                <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php esc_html_e('Start Customize', 'kosmo'); ?></a>
                            </p>
                        </div>
                        <div class="theme_link">
                            <h3><?php esc_html_e( 'Theme Documentation', 'kosmo' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('Need any help to setup and configure %s? Please have a look at our documentations instructions.', 'kosmo'), $theme_data->Name); ?></p>
                            <p>
                                <a href="<?php echo esc_url($doc_url); ?>" target="_blank" class="button button-secondary"><?php esc_html_e(' Documentation', 'kosmo'); ?></a>
                            </p>
                            <?php do_action( 'kosmo_dashboard_theme_links' ); ?>
                        </div>  
                        <div class="theme_link">
                            <h3><?php esc_html_e( 'Having Trouble, Need Support?', 'kosmo' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('Support for %s WordPress theme is conducted through Genex free support ticket system.', 'kosmo'), $theme_data->Name); ?></p>
                            <p>  
                                <a href="<?php echo esc_url($support_url); ?>" target="_blank" class="button button-secondary"><?php echo sprintf( esc_html('Create a support ticket', 'kosmo'), $theme_data->Name); ?></a>
                            </p>
                        </div> 
						 <div class="theme_link">
                            <h3><?php esc_html_e( 'Please Rate Us', 'kosmo' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('We need your help to expand or and portoflio so please rate us on wordpress ', 'kosmo'), $theme_data->Name); ?></p>
                            <p>  
                                <a href="<?php echo esc_url($rating_url); ?>" target="_blank" class="button button-secondary"><?php echo sprintf( esc_html('Rate This Theme', 'kosmo'), $theme_data->Name); ?></a>
                            </p>
                        </div> 
                       
                    </div>  
                    <div class="theme_info_right">
                        <?php echo sprintf ( '<img src="'. get_template_directory_uri() .'/screenshot.jpg" alt="%1$s" />',__('Theme screenshot','kosmo') ); ?>
                    </div>
                </div> 
            </div>
        <?php } ?>
	
		 <?php if ( $tab == 'pro_features' ) { ?>
            <div class="pro-features-tab info-tab-content">
			 
				<div class="wrap clearfix">
				   <div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-cog"></i></div>
	<h3><?php echo esc_html(__( '2 Home Pages', 'kosmo' )); ?></h3>
	<p><?php echo esc_html(__('Theme supports 3 types of Home Pages with different UI elements styles - slider, projects, services, features, team, about. so more', 'kosmo' )); ?></p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-th-large"></i></div>
	<h3><?php echo esc_html(__( '3 Header Preset', 'kosmo' )); ?></h3>
	<p><?php echo esc_html(__('Theme offers 4 tytpes of header navgiation preset so you can change and select your header design', 'kosmo' )); ?></p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-th"></i></div>
	<h3><?php echo esc_html(__( 'Unlimited Color Scheme', 'kosmo' )); ?></h3>
	<p><?php echo esc_html(__( 'Theme support Unlimited Color Option that mean you can design your website with any color.', 'kosmo' )); ?></p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-envelope"></i></div>
	<h3><?php echo esc_html(__( 'Contact Form 7', 'kosmo' )); ?></h3>
	<p><?php echo esc_html(__( 'kosmo Pro support contact form 7 that mean you can easily add your contact form with theme design ', 'kosmo' )); ?></p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-list-alt"></i></div>
	<h3><?php echo esc_html(__( 'Projects Page', 'kosmo' )); ?> </h3>
	<p><?php echo esc_html(__( 'Theme have 6 types of Projctes deslin presets with you can use 2, 3, or 4 Columns with masonry layouts!', 'kosmo' )); ?> </p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-font"></i></div>
	<h3><?php echo esc_html(__( 'Typography', 'kosmo' )); ?></h3>
	<p><?php echo esc_html(__('Theme loves typography, you can choose from over 500+ Google Fonts and Standard Fonts to customize your site!', 'kosmo' )); ?></p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-slideshare"></i></div>
	<h3><?php echo esc_html(__( 'Unlimitd Image Slides', 'kosmo' )); ?></h3>
	<p><?php echo esc_html(__('Theme includes Flex slider . You can add unlimited slides on your home page', 'kosmo' )); ?></p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-user"></i></div>
	<h3><?php echo esc_html(__( 'Team Page', 'kosmo' )); ?></h3>
	<p><?php echo esc_html(__('You can add unlimited team members with team deatil page and also display their social profiles ', 'kosmo' )); ?></p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-magic"></i></div>
	<h3><?php echo esc_html(__( 'Retina Ready', 'kosmo' )); ?></h3>
	<p><?php echo esc_html(__( 'Theme is Retina Ready. So, Everything looks amazingly sharp and crisp on high resolution retina displays of all sizes!', 'kosmo' )); ?></p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-dashboard"></i></div>
	<h3><?php echo esc_html(__( 'Awesome Icons', 'kosmo' )); ?></h3>
	<p><?php echo esc_html(__( ' Choose from over 2500+ icons are fully integrated into the theme ', 'kosmo' )); ?></p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-magic"></i></div>
	<h3><?php echo esc_html(__( 'Excellent Support', 'kosmo' )); ?></h3>
	<p><?php echo esc_html(__( 'We truly care about our customers and themes performance. We assure you that you will get the best after sale support like never before!', 'kosmo' ));
 ?></p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-desktop"></i></div>
	<h3><?php echo esc_html(__( 'Responsive Layout', 'kosmo' )); ?></h3>
	<p><?php echo esc_html( __('Theme is fully responsive and can adapt to any screen size. Resize your browser window to view it!', 'kosmo' )); ?></p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-rocket"></i></div>
	<h3><?php echo esc_html( __( 'Testimonials', 'kosmo' ));?></h3>
	<p><?php echo  esc_html( __( 'Display your clients\' glowing comments about your business on your homepage. Showing a specific number of testimonials with use of testimonial widget. ', 'kosmo' ));?></p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-skype"></i></div>
	<h3><?php echo esc_html( __( 'Social Media', 'kosmo' )); ?></h3>
	<p><?php echo esc_html( __( 'Want your users to stay in touch? No problem, Theme has Social Media icons all throughout the theme!', 'kosmo' )); ?></p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-map-marker"></i></div>
	<h3><?php echo esc_html( __( 'Add Timeline', 'kosmo' )); ?></h3>
	<p><?php echo esc_html( __('This Theme includes Timeline shortcode, So you can easily display your company history to your visitors or  your clients', 'kosmo' )); ?></p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-edit"></i></div>
	<h3><?php echo esc_html( __( 'Customization', 'kosmo' )); ?></h3>
	<p><?php echo esc_html( __('With advanced theme options, page options & extensive docs, its never been easier to customize a theme!', 'kosmo' )); ?></p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-check"></i></div>
	<h3><?php echo esc_html( __( 'Demo content', 'kosmo' )); ?></h3>
	<p><?php echo esc_html( __('Theme includes single click demo content. You can quickly setup the site like our demo and get started easily!', 'kosmo' )); ?></p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-signal"></i></div>
	<h3><?php echo esc_html( __( 'Improvement', 'kosmo' )); ?></h3>
	<p><?php echo esc_html( __('We love our theme and customers. We are committed to improve and add new features to Theme!', 'kosmo' )); ?></p>
</div>
				</div>
			</div><?php   
		} ?>  
       
       <!-- Free VS PRO tab -->
        <?php if ( $tab == 'free_vs_pro' ) { ?>
            <div class="free-vs-pro-tab info-tab-content">
	            <div id="free_pro">
	                <table class="free-pro-table">
		                <thead>
			                <tr>
			                    <th></th>  
			                    <th><?php echo esc_html($theme_data->Name); ?> Lite</th>
			                    <th><?php echo esc_html($theme_data->Name); ?> PRO</th>
			                </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <td><h3><?php _e('Responsive Design', 'kosmo'); ?></h3></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                        <td><h3><?php _e('Support', 'kosmo'); ?></h3></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>		                    
		                    <tr>
		                        <td><h3><?php _e('Custom Logo Option', 'kosmo'); ?></h3></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                         <td><h3><?php _e('Social Links', 'kosmo'); ?></h3></td>
		                         <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                         <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	 <td><h3><?php _e('Unlimited color option', 'kosmo'); ?></h3></td>
		                    	 <td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	 <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	 <td><h3><?php _e('3 Home page', 'kosmo'); ?></h3></td>
		                    	 <td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	 <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							 <tr>
		                    	 <td><h3><?php _e('Header Presets', 'kosmo'); ?></h3></td>
		                    	 <td class="only-pro"><?php _e('1', 'kosmo'); ?></td>
		                    	 <td class="only-lite"><?php _e('2', 'kosmo'); ?></td>
		                    </tr>	
		                     <tr>
		                    	 <td><h3><?php _e('Pre Defined Page Templates', 'kosmo');?></h3></td>
		                    	 <td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	 <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	<td><h3><?php _e('6 Portfolio Presets', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	<td><h3><?php _e('Team With Detail Page', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	<td><h3><?php _e('Redux Theme Option Panel', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr> 
							<tr>
		                    	<td><h3><?php _e('Boxed Layout', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('Sticky Header Option', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('Contact Form 7', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('18+ Shortcodes', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('Google Fonts', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('Dash Icons Inbuilt', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                     <tr>
		                    	<td><h3><?php _e('Multiple Service Layouts', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							 <tr>
		                    	<td><h3><?php _e('Team Page', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							 <tr>
		                    	<td><h3><?php _e('Service Page', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('Custom Widgets', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
								 <tr>
		                    	<td><h3><?php _e('Social Icons', 'kosmo');?></h3></td>
		                    	 <td class="only-pro"><?php _e('4', 'kosmo'); ?></td>
		                    	 <td class="only-lite"><?php _e('18+', 'kosmo'); ?></td>
		                    </tr>
		                     <tr>
		                    	<td><h3><?php _e('Multiple Blog Layouts', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                     <tr>
		                    	<td><h3><?php _e('Page Animation', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                     <tr>
		                    	<td><h3><?php _e('Premium Priority Support', 'kosmo');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    
		                    <tr class="ti-about-page-text-center">
		                        <td><a href="<?php echo esc_url($pro_theme_demo); ?>" target="_blank" class="button button-primary button-hero"><?php printf( __( '%1s Pro Demo', 'kosmo'), $theme_data->Name ); ?></a></td>
		                    	<td colspan="2"><a href="<?php echo esc_url($pro_theme_url); ?>" target="_blank" class="button button-primary button-hero"><?php printf( __( 'Upgrade To %1s Pro', 'kosmo'), $theme_data->Name ); ?></a></td>
		                    </tr>
		                </tbody>
	                </table>			    
				</div>
			</div><?php 
		} ?>

    </div><?php
}
?>