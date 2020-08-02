<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Parfum
 * @since Parfum 1.0
 */

?>
			</div><!-- .content-sidebar-innner-wrap-->
		</div><!-- inner wrap -->
	</div><!-- #main .wrapper -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="inner-wrap">
			<div class="footer-inner-wrap">
				<?php
				if ( is_active_sidebar( 'parfum-sidebar-footer-1' ) || is_active_sidebar( 'parfum-sidebar-footer-2' ) || is_active_sidebar( 'parfum-sidebar-footer-3' ) || is_active_sidebar( 'parfum-sidebar-footer-4' ) ) {
					?>

					<div class="wrapper-widget-area-footer">
						<div class="widget-area-footer-1">
							<?php
							if ( is_active_sidebar( 'parfum-sidebar-footer-1' ) ) {
								dynamic_sidebar( 'parfum-sidebar-footer-1' );
							}
							?>
						</div>

						<div class="widget-area-footer-2">
							<?php
							if ( is_active_sidebar( 'parfum-sidebar-footer-2' ) ) {
								dynamic_sidebar( 'parfum-sidebar-footer-2' );
							}
							?>
						</div>

						<div class="widget-area-footer-3">
							<?php
							if ( is_active_sidebar( 'parfum-sidebar-footer-3' ) ) {
								dynamic_sidebar( 'parfum-sidebar-footer-3' );
							}
							?>
						</div>

						<div class="widget-area-footer-4">
							<?php
							if ( is_active_sidebar( 'parfum-sidebar-footer-4' ) ) {
								dynamic_sidebar( 'parfum-sidebar-footer-4' );
							}
							?>
						</div>
					</div><!-- .wrapper-widget-area-footer -->
					<?php
				} // if is active widget areas ;
				?>

				<div class="site-info">
					<div class="footer-text-left"><?php echo wp_kses_post( get_theme_mod( 'parfum_footer_text_1', '' ) ); ?></div>
					<div class="footer-text-center"><?php echo wp_kses_post( get_theme_mod( 'parfum_footer_text_2', '' ) ); ?></div>
					<div class="footer-text-right"><?php echo wp_kses_post( get_theme_mod( 'parfum_footer_text_3', '' ) ); ?></div>
				</div><!-- .site-info -->

				<?php
				if ( '' == get_theme_mod( 'parfum_hide_credits', '' ) ) {
					?>
					<div class="parfum-theme-credits">
							Theme <a href="<?php echo PARFUM_THEME_URI; ?>"><?php echo PARFUM_NAME; ?></a> <?php esc_html_e( 'by', 'parfum' ); ?> GalussoThemes |
							<?php esc_html_e( 'Powered by', 'parfum' ); ?> <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'parfum' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'parfum' ); ?>">WordPress</a>
					</div><!-- .credits-blog-wp -->
					<?php
				}
				?>
			</div><!-- .footer-inner-wrap -->
		</div><!-- inner-warp -->
	</footer><!-- #colophon -->

	<?php
	if ( get_theme_mod( 'parfum_back_to_top_button', 1 ) == 1 ) { ?>
		<div class="ir-arriba"><i class="fa fa-arrow-up"></i></div>
	<?php } ?>

	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
