<?php
/**
 * The template for displaying archive pages.
 *
 * @package Parfum
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">
			<?php
			if ( have_posts() ) {
				?>
				<header class="archive-header">
					<?php
					the_archive_title( '<h1 class="archive-title">', '</h1>' );
					the_archive_description( '<div class="archive-meta">', '</div>' );
					?>
				</header><!-- .archive-header -->
				<?php

				while ( have_posts() ) :
					the_post();
					get_template_part( PARFUM_TEMPLATE_PARTS . 'content-archive' );
				endwhile;

				parfum_the_posts_pagination();

			} else {
				get_template_part( PARFUM_TEMPLATE_PARTS . 'content-none' );
			}
			?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
