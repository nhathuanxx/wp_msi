<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

// $discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null; ?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php if ( ! is_page() ) : ?>
<div class="entry-meta">
	<?php //twentynineteen_posted_by(); ?>
	<?php //twentynineteen_posted_on(); ?>
	<span class="comment-count">
		<?php
		// if ( ! empty( $discussion ) ) {
		// 	twentynineteen_discussion_avatars_list( $discussion->authors );
		// }
		?>
		<?php //twentynineteen_comment_count(); ?>
	</span>
	
</div><!-- .entry-meta -->
<?php endif; ?>
