<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Kosmo
 */

    get_header(); 
	
?>
    
	<!-- Main Content Section -->
	<main class="main">
		<!-- Page Title -->
		<div class="page-title text-center" <?php if ( get_header_image() ){ ?> style="background-image:url('<?php header_image(); ?>')"  <?php } ?>>
			<h2 class="title"> <?php wp_title(''); ?></h2>
		</div>
		<!-- Page Title -->
		
        <!-- Content Section -->
		<section class="page-not-found">
			<div class="container">
				<div class="row error-page">
					<div class="col-md-12 text-center">
						<h1><?php echo esc_html__( '404', 'kosmo' ); ?></h1>
						<h2><?php echo esc_html__( 'Oops! That page can&rsquo;t be found', 'kosmo' ); ?></h2>
						<h4><?php echo esc_html__( 'Sorry, but the page you are looking for does not exist', 'kosmo' ); ?></h4>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-default"> <?php echo esc_html__( 'Back to HomePage', 'kosmo' ); ?></a>
					</div>
				</div>
			</div>
		</section>
		<!-- Content Section -->
	</main>
	<!-- Main Content Section -->
	<?php get_footer(); ?>	