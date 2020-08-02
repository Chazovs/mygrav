 <?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Kosmo
 */
    $kosmo_footer_section = get_theme_mod('kosmo_footer_section_hideshow','show');
    if ($kosmo_footer_section =='show') { 
?>

		<!-- Footer Section -->
		</main>
		<footer>
			<div class="footer">
				<div class="container">
				   <!-- Footer widgets -->
					<div class="row widgets">
						<div class="col-md-3 col-sm-6">                       
							<?php dynamic_sidebar('kosmo-footer-widget-area-1'); ?>
					    </div>
						<div class="col-md-3 col-sm-6">
						    <?php dynamic_sidebar('kosmo-footer-widget-area-2'); ?>
						</div>
                        <div class="col-md-3 col-sm-6">
							<?php dynamic_sidebar('kosmo-footer-widget-area-3'); ?>
						</div>
						<div class="col-md-3 col-sm-6">
							<?php dynamic_sidebar('kosmo-footer-widget-area-4'); ?>
						</div>
					</div>
					<!-- Footer widgets -->
				</div>
			</div>
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row copyright-bar">
						<div class="col-md-12 text-center">
							<?php if( get_theme_mod('kosmo-footer_title') ) : ?>
							<p><?php echo wp_kses_post( html_entity_decode(get_theme_mod('kosmo-footer_title'))); ?></p>
							<?php else : 
								/* translators: 1: poweredby, 2: link, 3: span tag closed  */
							   printf( esc_html__('%1$sPowered by %2$s%3$s','kosmo'),'<span>','<a href="'. esc_url( __( 'https://wordpress.org/','kosmo')).'"target="_blank">WordPress.</a>','</span>');
							   /* translators: 1: poweredby, 2: link, 3: span tag closed  */
							   printf( esc_html__( ' Theme: Kosmo by: %1$sDesign By %2$s%3$s', 'kosmo' ), '<span>', '<a href="'. esc_url( __( 'https://deepeshpaliwal.com/', 'kosmo' ) ) .'" target="_blank">deepeshpaliwal</a>', '</span>' );
							  endif;  ?>
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright -->
		</footer>
	<?php } ?>
	<!-- back-to-top link -->
	<a href="" class="cd-top" ><?php esc_html__( 'Top', 'kosmo' ); ?></a>
	<!-- Footer Section -->
	<?php wp_footer(); ?>
    </body>
</html>