<?php
/**
 * The template for displaying search results pages.
 *
 * @package Kosmo
 */
    get_header();
?>
<!-- Main Content Section -->
    <main class="main">
        <!-- Page Title -->
		<div class="page-title text-center" <?php if ( get_header_image() ){ ?> style="background-image:url('<?php header_image(); ?>')"  <?php } ?>>
			<?php if ( have_posts() ) : ?>
				<h2 class="title"> 
					<?php 
					/* translators: %s: search term */
					printf( esc_html__( 'Search Results for: %s', 'kosmo' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h2>
			<?php else : ?>
				<h2 class="title"><?php
					/* translators: %s: nothing found term */
					printf( esc_html__( 'Nothing Found for: %s', 'kosmo' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h2>
			<?php endif; ?>
		</div>
		<!-- Page Title -->
	    <div class="container">
			<div class="row news">
				<div class="col-md-8 blog-info">
					<div class="spacer-80"></div>
					<?php if(have_posts()) : ?>
					    <?php while(have_posts()) : the_post(); ?>
					        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						        <?php get_template_part('content-parts/content', 'search'); ?>
					        </div>
					    <?php endwhile; ?>
				        <!-- pagination -->
						<div class="spacer-40"></div>
						<div class="col-sm-12">
							<?php the_posts_pagination(
								array(
								  'prev_text' =>esc_html__('&laquo;','kosmo'),
								  'next_text' =>esc_html__('&raquo;','kosmo')
								)
							); ?>
						</div>
					    <!-- End pagination -->
						<div class="spacer-80"></div>
					<?php else : 
					    get_template_part( 'content-parts/content', 'none' );
					endif; ?>
					<div class="spacer-80"></div>
				</div>
				<!-- Sidebar -->
				<div class="col-md-4 sidebar">
					<div class="spacer-40"></div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
    </main>
    <!-- Main Content Section -->
<?php get_footer(); ?>