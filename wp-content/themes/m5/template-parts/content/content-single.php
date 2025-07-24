<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Post title. Only visible to screen readers. */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __('Pages:', 'twentynineteen'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //twentynineteen_entry_footer(); 
		?>
	</footer><!-- .entry-footer -->

	<?php get_template_part('template-parts/post/author', 'bio'); ?>

	<?php
	$post_id = get_the_ID();
	$url = get_permalink();
	$title = get_the_title();
	$url_thumbnail = get_the_post_thumbnail_url( $post_id, 'full');
	?>
	<!-- <div class="meta_bottom">
        <div class="text_share header-text">Share</div>
        <div class="post-shares">
                <a rel="nofollow" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url($url); ?>">
                    <i class="fa fa-facebook"></i>
                    Facebook                    </a>
                <a rel="nofollow" target="_blank" href="http://twitter.com/share?text=<?php echo $title; ?>&amp;url=<?php echo esc_url($url); ?>">
                    <i class="fa fa-twitter"></i>                        
                    Twitter                    </a>
                <a rel="nofollow" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo esc_url($url); ?>&amp;media=<?php echo $url_thumbnail; ?>&amp;description=<?php echo $title; ?>">
                    <i class="fa fa-pinterest"></i>
                    
                    Pinterest                    </a>
                <a rel="nofollow" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php echo $title; ?>&amp;url=<?php echo esc_url($url); ?>">
                    <i class="fa fa-linkedin"></i>
                    Linkedin                        
                </a>
        </div>
    </div>
    <?php if ( function_exists( 'kksr_freemius' ) ) { ?>
		<div class="rate-sha">
			<p class="title">Bài viết này hữu ích với bạn?</p>
			<?php echo kk_star_ratings(); ?>
		</div>
	<?php } ?> -->

</article><!-- #post-<?php the_ID(); ?> -->