<?php
/**
 * Template part - Service Section of FrontPage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kosmo
 */
	$kosmo_services_title = get_theme_mod('kosmo-services_title');
	$kosmo_services_section     = get_theme_mod( 'kosmo_services_section_hideshow','hide');
	  
	   
	$kosmo_service_no_excerpt = get_theme_mod('kosmo_service_no_excerpt');
	 
	$services_no        = 6;
	$services_pages      = array();
	$services_icons     = array();
	for( $i = 1; $i <= $services_no; $i++ ) {
		$services_pages[]    =  get_theme_mod( "kosmo_service_page_$i", 1 );
		$services_icons[]    = get_theme_mod( "kosmo_page_service_icon_$i", '' );
	}

    $services_args  = array(
      'post_type' => 'page',
      'post__in' => array_map( 'absint', $services_pages ),
      'posts_per_page' => absint($services_no),
      'orderby' => 'post__in'
     
    ); 
    
    $services_query = new   wp_Query( $services_args );
    if( $kosmo_services_section == "show"  ) :
?>
		<!-- service section -->
		<section class="home-services-other">
			<div class="container">
				<div class="section-title text-center">
				    <?php if($kosmo_services_title != "")   {  ?>
					<h2 class="title-services-other title-2"><?php echo esc_html(get_theme_mod('kosmo-services_title')); ?></h2>
					<?php }?>
					<h4 class="subtitle-services-other subtitle-2"><?php echo  esc_html(get_theme_mod('kosmo-services_subtitle')); ?></h4>
					<div class="spacer-50"> </div>
				</div>

				<div class="row services-other text-center">
				    <?php
				    if($services_query->have_posts()):
				        $count = 0;
				        while($services_query->have_posts()) :
				        $services_query->the_post();
				    ?>
					    <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="services-info">
								<?php 
								   if($services_icons[$count] !=""){
							    ?>
								    <i class="fa <?php echo esc_html($services_icons[$count]); ?>" aria-hidden="true"></i>
								<?php 
								} 
								?>
								<h4 class="services-title-one subtitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink() ?>" class="fa fa-plus service-btn" aria-hidden="true"></a>
							</div>
							<div class="clearfix spacer-70"></div>
					    </div>
				    <?php
				        $count = $count + 1;
				        endwhile;
				        wp_reset_postdata();
				    endif;
				    ?>  
				</div>
			</div>
			<div class="spacer-50"></div>
		</section>
        <!-- End service Section -->
<?php
    endif;
?>
  

