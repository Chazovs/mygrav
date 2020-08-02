<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Kosmo
*/
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
				<div class="row ">
					<div class="col-md-9 page-news">
						<div class="page-cont">
							<?php if(have_posts()) : ?>
								<?php while(have_posts()) : the_post(); ?>
									<?php if(has_post_thumbnail()) : ?>
										<div class="page-img-box">
											<div class="hover-effect">
											   <?php the_post_thumbnail('kosmo-page-thumbnail', array('class' => 'img-responsive')); ?>
											</div>
										</div>
									<?php endif; ?>
								    <?php the_content();
									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kosmo' ),
										'after'  => '</div>',
									) );
									?>
								<?php endwhile; ?>
							<?php else :  
							   get_template_part( 'content-parts/content', 'none' );
							endif; ?>
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
					<!-- Sidebar -->
					<div class="col-md-3 sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- Main Content Section -->
<?php get_footer(); ?>