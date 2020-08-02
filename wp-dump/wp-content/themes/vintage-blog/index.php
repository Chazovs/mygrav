<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
            <h2 class="title">
               <?php echo esc_html__('Blog', 'kosmo') ?>
            </h2>
            <?php } else { ?>
            <h2 class="title"><?php wp_title(''); ?></h2>                         
            <?php } ?>
        </div>
        <!-- Page Title -->
        
        <div class="container">
        	<div class="row news">
                <div class="col-md-8 blog-info">
                    <div class="spacer-80"></div>
					<div class="blog-isotope">
						<?php if(have_posts()) : ?>
							<?php while(have_posts()) : the_post(); ?>
								<div id="post-<?php the_ID(); ?>" <?php post_class('blog-iso-item'); ?>>
									<?php get_template_part('content-parts/content', get_post_format()); ?>
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
						<?php else :  
							get_template_part( 'content-parts/content', 'none' );
						endif; ?>
					</div>
				    <div class="spacer-80"></div>
                </div>
    			<!-- Sidebar -->
                <div class="col-md-4 sidebar">
                    <div class="spacer-40"></div>
                    <?php get_sidebar(); ?>
                    <div class="spacer-40"></div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Content Section -->
<?php get_footer(); ?>