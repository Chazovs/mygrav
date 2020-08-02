<?php
/**
 * Functions  FOR Comment.
 *
 */

if ( ! function_exists( 'kosmo_comments' ) ) :
	
	/**
	 * Comment layout
	 */
	function kosmo_comments( $comment, $args, $depth ) {  ?>
    <div <?php comment_class('comments'); ?> id="<?php comment_ID() ?>">
        <?php if ($comment->comment_approved == '0') : ?>
		    <div class="alert alert-info">
		      <p><?php esc_html_e( 'Your comment is awaiting moderation.', 'kosmo' ) ?></p>
		    </div>
	    <?php endif; ?>
        <div class="comments-single">
			<?php echo get_avatar( $comment,'88', null,'User', array( 'class' => array( 'media-object','' ) )); ?>
			<h3>
				<?php 
				/* translators: '%1$s %2$s: edit term */
				printf(esc_html__( '%1$s %2$s', 'kosmo' ), get_comment_author_link(), edit_comment_link(esc_html__( '(Edit)', 'kosmo' ),'  ','') ) ?>
				<span class="fw-600"><time datetime="<?php echo comment_time('c'); ?>"><?php printf(  
					/* translators: 1: date, 2: time */
					_x( '%1$s at %2$s', '1: date, 2: time', 'kosmo' ),
						get_comment_date(),
						get_comment_time()
					); ?></time></span>
	        </h3>
			<?php comment_text() ;?>
			<a class="reply-link"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a>
        </div>
    </div>
	<?php
	} 

	endif;
?>