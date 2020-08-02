<?php 
/* For Search Results
*/
?>
<div class="blog-img-box">
    <?php if(has_post_thumbnail()) : ?>
		<div class="hover-effect">
		   <?php the_post_thumbnail('kosmo-page-thumbnail', array('class' => 'img-responsive')); ?>
	    </div>
	<?php endif; ?>
</div>
<div class="blog-content">
	<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
	<h4>
			<i class="fa fa-user" aria-hidden="true"></i>
			<?php echo esc_html__('By ','kosmo'); ?>
	        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
	            <?php 
	               the_author(); 
	            ?>
	        </a>
		<span class="meta-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comment', 'kosmo'), __('1 Comment', 'kosmo'), __('% Comments', 'kosmo') ); ?>
		</span>
		<span class="meta-date">
		   <i class="fa fa-calendar" aria-hidden="true"></i>
		   <?php the_time( get_option( 'date_format' ) ); ?>
	   </span>   
	</h4>
	<?php the_excerpt(); ?>
</div>
<div class="spacer-50"></div>