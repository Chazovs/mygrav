<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Use this page template to remove the sidebar from any page.
 *  @package Kosmo
 */
?>
<?php
   get_header(); 
?>

 <!-- Main Content Section -->
	<main class="main">
		<!-- Page Title -->
		<div class="page-title text-center" <?php if ( get_header_image() ){ ?> style="background-image:url('<?php header_image(); ?>')"  <?php } ?>>
			<?php if (is_home() || is_front_page()) { ?>						
				<h2 class="title"><?php the_title(); ?></h2>
			<?php } else { ?>
				<h2 class="title"><?php wp_title(''); ?></h2>						
			<?php } ?>	
		</div>
		<!-- Page Title -->
		
		<!-- Page Details -->
		<section>
			<div class="container">
				<div class="page-news">
					<div class="page-cont">
						<?php if(have_posts()) : ?>
							<?php while(have_posts()) : the_post(); ?>
								<div class="page-img-box">
									<a class="hover-effect">
									   <?php if(has_post_thumbnail()) : ?>
									   <?php the_post_thumbnail('kosmo-page-thumbnail', array('class' => 'img-responsive')); ?>
									   <?php endif; ?>
									</a>
								</div>
								
								 <?php the_content();
									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kosmo' ),
										'after'  => '</div>',
									) );
								?>
								
							<?php endwhile; ?>
						<?php else : ?>
							<p><?php esc_html__('No Posts Found', 'kosmo'); ?></p>
						<?php endif; ?>
						<!-- Comments -->
						<div class="spacer-80"></div>
						<?php 
							if ( comments_open() || get_comments_number() ) :
									comments_template();
							endif; 
						?> 
						<!--End Comments -->
				    </div>
				</div>
			</div>
		</section>
	</main>
	<!-- Main Content Section -->
	<?php get_footer(); ?>