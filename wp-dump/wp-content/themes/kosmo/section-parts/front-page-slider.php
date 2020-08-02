<?php
/**
 * Template part - Features Section of FrontPage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Kosmo
*/
   
    $kosmo_slider_section     = get_theme_mod( 'kosmo_slider_section_hideshow','hide');

    $slider_no        = 3;
    $slider_pages      = array();
    for( $i = 1; $i <= $slider_no; $i++ ) {
        $slider_pages[]    =  get_theme_mod( "kosmo_slider_page_$i", 1 );
        $kosmo_slider_btntxt[]    =  get_theme_mod( "kosmo_slider_btntxt_$i", 1 );
        $kosmo_slider_btnurl[]    =  get_theme_mod( "kosmo_slider_btnurl_$i", 1 );
    }
    
	$slider_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $slider_pages ),
        'posts_per_page' => absint($slider_no),
        'orderby' => 'post__in'
	); 
	
    $slider_query = new   wp_Query( $slider_args );
	?> 
    <main class="main">
		<?php  if ( $kosmo_slider_section =='show' && $slider_query->have_posts() ) 
		{ 
		?>
			<!-- home section -->
			<section class="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<?php
						   $count = 0;
						   while($slider_query->have_posts()) :
						   $slider_query->the_post();
						?>
						<li class="has-overlay">
							<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
							<div class="slider-content text-center">
								<div class="container">
									<h2> <?php the_title(); ?></h2>
									<?php the_content(); ?>
									<?php if($kosmo_slider_btntxt[$count] != ""){ ?>
										<a class="btn primary-btn" href="<?php echo esc_url($kosmo_slider_btnurl[$count]); ?>"> 
											<?php echo esc_html($kosmo_slider_btntxt[$count]); ?> <i class="fa fa-angle-right"></i> 
										</a>
									<?php } ?>
								</div>
							</div>
						</li>
						<?php
							$count = $count + 1;
							endwhile;
							wp_reset_postdata();
						?>  
					</ul>
				</div>
			</section>
			<!-- End home -->
     <?php }
    else
    {?>


 <div class="page-title text-center" <?php if ( get_header_image() ){ ?> style="background-image:url('<?php header_image(); ?>')"  <?php } ?>>
          <?php if (is_home() || is_front_page()) { ?>  
            <h2 class="title">
               <?php echo esc_html__('Home', 'kosmo') ?>
            </h2>
            <?php } else { ?>
            <h2 class="title"><?php wp_title(''); ?></h2>                         
            <?php } ?>
        </div>
<?php
}
?>