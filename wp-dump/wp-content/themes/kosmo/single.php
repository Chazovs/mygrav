<?php
/**
 * The template for displaying all single posts.
 *
 * @package Kosmo
 */
    get_header(); 
?>

    <!-- Main Content Section -->
    <main class="main">
		<!-- Page Title -->
		<div class="page-title text-center" <?php if ( get_header_image() ){ ?> style="background-image:url('<?php header_image(); ?>')"  <?php } ?>>
			<h2 class="title"><?php wp_title(''); ?></h2>
		</div>
		<!-- Page Title -->
		
		<!-- Blog Details -->
		<section>
			<div class="container">
				<div class="row ">
					<div class="col-md-9 blog-info news">
						<div class="blog-single">
							<?php if(have_posts()) : ?>
								<?php while(have_posts()) : the_post(); ?>
									<?php  get_template_part( 'content-parts/content', 'single' ); ?>
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