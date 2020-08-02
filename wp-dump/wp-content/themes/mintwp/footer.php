<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div><!--/#mintwp-content-wrapper -->
</div><!--/#mintwp-wrapper -->
</div>

<div class="mintwp-outer-wrapper">
<?php mintwp_bottom_wide_widgets(); ?>
</div>

<?php if ( !(mintwp_get_option('hide_footer_social_buttons')) ) { ?>
<div class="mintwp-bottom-social-bar">
<div class="mintwp-outer-wrapper">
<?php mintwp_footer_social_buttons(); ?>
</div>
</div>
<?php } ?>

<?php if ( !(mintwp_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'mintwp-footer-1' ) || is_active_sidebar( 'mintwp-footer-2' ) || is_active_sidebar( 'mintwp-footer-3' ) || is_active_sidebar( 'mintwp-footer-4' ) ) : ?>
<div class='clearfix' id='mintwp-footer-blocks' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='mintwp-container clearfix'>
<div class="mintwp-outer-wrapper">

<div class='mintwp-footer-block'>
<?php dynamic_sidebar( 'mintwp-footer-1' ); ?>
</div>

<div class='mintwp-footer-block'>
<?php dynamic_sidebar( 'mintwp-footer-2' ); ?>
</div>

<div class='mintwp-footer-block'>
<?php dynamic_sidebar( 'mintwp-footer-3' ); ?>
</div>

<div class='mintwp-footer-block'>
<?php dynamic_sidebar( 'mintwp-footer-4' ); ?>
</div>

</div>
</div><!--/#mintwp-footer-blocks-->
</div>
<?php endif; ?>
<?php } ?>

<div class='clearfix' id='mintwp-footer'>
<div class='mintwp-foot-wrap mintwp-container'>
<div class="mintwp-outer-wrapper">
<?php if ( mintwp_get_option('footer_text') ) : ?>
  <p class='mintwp-copyright'><?php echo esc_html(mintwp_get_option('footer_text')); ?></p>
<?php else : ?>
  <p class='mintwp-copyright'><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'mintwp' ), esc_html(date_i18n(__('Y','mintwp'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<?php endif; ?>
<p class='mintwp-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'mintwp' ), 'ThemesDNA.com' ); ?></a></p>
</div>
</div><!--/#mintwp-footer -->
</div>

<?php wp_footer(); ?>
</body>
</html>