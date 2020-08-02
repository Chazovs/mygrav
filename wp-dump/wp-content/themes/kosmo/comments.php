<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage kosmo
 * @since Kosmo 
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
    <div class="comments">
        <?php if ( have_comments() ) : ?>
        <h2 class="title-2 text-center">
            <?php
                $comments_number = get_comments_number();
                if ( 1 === $comments_number ) {
                    /* translators: %s: post title */
                    printf( esc_html__( 'One thought on &ldquo;%s&rdquo;','kosmo' ), get_the_title() );
                } else {
                    printf(
                        /* translators: 1: number of comments, 2: post title */
                        _nx(
                            '%1$s Comment found',
                            '%1$s Comments found',
                            $comments_number,
                            'comments title',
                            'kosmo'
                        ),
                        esc_html(number_format_i18n( $comments_number ) ),
                        get_the_title()
                    );
                }
            ?>
        </h2>

        <?php the_comments_navigation(); ?>
        <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 42,
                'callback' => 'kosmo_comments',
            ) );
        ?>
        <!-- .comment-list -->

        <?php the_comments_navigation(); ?>

    <?php endif; // Check for have_comments(). ?>

    <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'kosmo' ) ) :
    ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'kosmo' ); ?></p> 
    <?php endif; ?>

    <?php 
        $req      = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );

        $comments_args = array
        (
            'submit_button' => '<div class="form-group">'.
              '<input  name="%1$s" type="submit" id="%2$s" class="btn btn-block btn-warning" value="add comment" />'.
            '</div>',
            'title_reply'  =>  __( '<h2 class="title-2 text-center">Add Comment</h2>', 'kosmo'  ), 
            'comment_notes_after' => '',  
                
            'comment_field' =>  
                '<div class="comment-btn col-md-12"><textarea class="form-control" id="comment" name="comment" placeholder="' . esc_attr( 'Comment here', 'kosmo' ) . '" rows="7" aria-required="true" '. $aria_req . '>' .
                '</textarea></div>',
            'fields' => apply_filters( 'comment_form_default_fields', array (
                'author' => '<div id="comment-name" class="col-md-6">'.               
                    '<input id="author" class="form-control" name="author" placeholder="' . esc_attr( 'Name', 'kosmo' ) . '" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                    '" size="30"' . $aria_req . ' /></div>',
                'email' =>'<div id="comment-name" class="col-md-6">'.
                    '<input id="email" class="form-control" name="email" placeholder="' . esc_attr( 'Email Address', 'kosmo' ) . '" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' /></div>',
            
            ) ),
        );
        ?>
    </div>
    <div class="comment-box" id="comment-box"> 
        <?php
        comment_form($comments_args);
        ?>
    </div>
</div>

<!-- .comments-area -->
