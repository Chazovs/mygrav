<?php
/**
 * The template for displaying Comments
 *
 * @package Parfum
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _n( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'parfum' ), number_format_i18n( get_comments_number() ), '<span style="word-break:break-word;">' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="commentlist">
			<?php
			wp_list_comments( array(
				'callback' => 'parfum_comment',
				'style'    => 'ol',
			) );
			?>
		</ol><!-- .commentlist -->

		<?php
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through.
			?>
			<nav id="comment-nav-below" class="navigation" role="navigation">
				<h1 class="assistive-text section-heading"><?php esc_html_e( 'Comment navigation', 'parfum' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'parfum' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'parfum' ) ); ?></div>
			</nav>
			<?php
		endif; // Check for comment navigation.

		/*
		 * If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php esc_html_e( 'Comments are closed.', 'parfum' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments. ?>

	<?php comment_form(); ?>

</div><!-- #comments .comments-area -->
