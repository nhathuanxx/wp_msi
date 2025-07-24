<?php
/**
 * The template for displaying comments.
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 * 
 * @package vlive
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

    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ( 1 === $comment_count ) {

                /* translators: 1: title. */
                esc_html_e( 'Bình luận', 'vlive' );
            } else {
                /* translators: 1: title. */
                esc_html_e( 'Bình luận', 'vlive' );
            }
            ?>
        </h2><!-- .comments-title -->

        <?php the_comments_navigation(); ?>

        <ul class="comment-list"><?php wp_list_comments('type=comment&max_depth=2&callback=windpro_comment');?></ul><!-- .comment-list -->

        <?php the_comments_navigation();

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'vlive' ); ?></p>
        <?php
        endif;

    endif; // Check for have_comments().

    $form = array(
                'id_form'           => 'commentform',
                'id_submit'         => 'submit',
                'title_reply_before' => '<p id="reply-title" class="comment-reply-title">',
                'title_reply_after' => '</p>',
                'title_reply'       => esc_html__( 'Bình luận của bạn', 'vlive'),
                'cancel_reply_link' => esc_html__( 'Hủy', 'vlive'),
                'label_submit'      => esc_html__( 'Bình luận', 'vlive'),
                'comment_notes_before' => '',
                'fields' => apply_filters( 'comment_form_default_fields', array(

                        'author' =>
                        '<div class="row"><div class="comment-form-author col-md-6 col-sm-12 col-xs-12">'.
                        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                        '" placeholder="'.esc_attr__('Họ và tên', 'vlive').'"/></div>',

                        'email' =>
                        '<div class="comment-form-email col-md-6 col-sm-12 col-xs-12">'.
                        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                        '" placeholder="'.esc_attr__('Email', 'vlive').'"/></div></div>',
                )
                ),
                'comment_field' =>  '<div class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.esc_attr__('Bình Luận Của Bạn ...', 'vlive').'" aria-required="true">' .
                '</textarea></div>',
        );

    comment_form($form);
    ?>

</div><!-- #comments -->
