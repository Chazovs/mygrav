<?php 
/**
 * The header for our theme.
 *
 * Displays all of the <head> section 
 *
 * @package Kosmo
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
	<?php wp_head(); ?>
</head> 
  
<body <?php body_class(); ?>>
	<!-- Header Section -->
    <header>
        <div class="header-area">
            <?php
			$kosmo_header_section = get_theme_mod('kosmo_header_section_hideshow','hide');
			if ($kosmo_header_section =='show') {  
				$kosmo_phone_value = get_theme_mod('kosmo_header_phone_value');  
				$kosmo_email_value = get_theme_mod('kosmo_header_email_value');
				$kosmo_header_social_link_1 = get_theme_mod('kosmo_header_social_link_1');
				$kosmo_header_social_link_2 = get_theme_mod('kosmo_header_social_link_2');
				$kosmo_header_social_link_3 = get_theme_mod('kosmo_header_social_link_3');
				$kosmo_header_social_link_4 = get_theme_mod('kosmo_header_social_link_4');
				
            ?>
            <!-- Top Contact Info -->
            <div class="logo-top-info">
                 
                <div class="container">
                    <div class="col-md-3 logo">
						<!-- Main Logo -->
						<?php   
						if (has_custom_logo()) :
						?> 
							<span><?php the_custom_logo(); ?></span>
						<?php endif; ?>
						<?php if (display_header_text()==true){ ?>
						   <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
								<span class="site-title"><?php bloginfo( 'title' ); ?></span>
								<?php $description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?> 
									<span class="site-description"><?php echo esc_html($description); ?></span>       
								 <?php endif; ?>	
								
							</a>    
						<?php } ?>	                    
                    
                        <!-- Responsive Toggle Menu -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only"> <?php echo esc_html__( 'Main Menu', 'kosmo' ); ?> </span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="col-md-6 top-info-social">
                        <div class="top-info">
                            <?php
                            if (!empty($kosmo_phone_value)) { ?>
                            <div class="call-icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="call">
                                <h3>  <?php echo esc_html__( 'CALL US', 'kosmo' ); ?></h3>
                                
                                <p><?php echo esc_html($kosmo_phone_value); ?></p>
                            </div>
                            <?php } 
                            if (!empty($kosmo_email_value)) {  ?>
                            <div class="email-icon">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="email">
                                <h3> <?php echo esc_html__( 'EMAIL US', 'kosmo' ); ?></h3>
                                <p><?php echo esc_html($kosmo_email_value); ?></p>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="social">
                            <ul class="social-icons">
                                <?php if (!empty($kosmo_header_social_link_1)) { ?>
                                    <li><a href="<?php echo esc_url(get_theme_mod('kosmo_header_social_link_1')); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <?php }
                                if (!empty($kosmo_header_social_link_2)) { ?> 
                                    <li><a href="<?php echo esc_url(get_theme_mod('kosmo_header_social_link_2')); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <?php }
                                if (!empty($kosmo_header_social_link_3)) { ?>
                                    <li><a href="<?php echo esc_url(get_theme_mod('kosmo_header_social_link_3')); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <?php } 
                                if (!empty($kosmo_header_social_link_4)) { ?>
                                    <li><a href="<?php echo esc_url(get_theme_mod('kosmo_header_social_link_4')); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php } else { ?>
            <div class="logo-top-info">
                <div class="container"> 
                    <div class="col-md-12 logo text-center">
                       <!-- Main Logo -->
						<?php   
						if (has_custom_logo()) :
						?> 
							<span><?php the_custom_logo(); ?></span>
						<?php endif; ?>
						<?php if (display_header_text()==true){ ?>
						   <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
								<span class="site-title"><?php bloginfo( 'title' ); ?></span>
								<?php $description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?> 
									<span class="site-description"><?php echo esc_html($description); ?></span>       
								 <?php endif; ?>	
								
							</a>    
						<?php } ?>	     
                    </div>
                </div>
            </div>
             <?php } ?>
            <!-- Main Navigation Section -->
			<!-- Start Navigation -->
			<nav class="navbar navbar-default bootsnav menu-center">
				<div class="container">            
					<!-- Start Header Navigation -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<!-- End Header Navigation -->
		
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-menu">
						<?php wp_nav_menu( array
							('container'        => 'ul', 
							'theme_location'    => 'primary', 
							'menu_class'        => 'menu', 
							'items_wrap'        => '<ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">%3$s</ul>',
							'fallback_cb'       => 'kosmo_wp_bootstrap_navwalker::fallback',
							'walker'            => new kosmo_wp_bootstrap_navwalker()
							)); 
						?>         
					</div><!-- /.navbar-collapse -->
				</div>   
			</nav>
			<!-- End Navigation -->
		</div>
    </header>
    <!-- Header Section -->