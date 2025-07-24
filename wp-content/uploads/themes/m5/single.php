<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
$author_id = get_the_author_id();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main container">

		<div class="row justify-content-center">
			<div class="col-md-8">

				<div class="post-box-meta-single"> 
                    <p><?php echo get_the_date('d-m-Y'); ?> | <span>Tác giả: <?php 
                    if($author_id == 11) {
                    	echo get_the_author_link();
                    }else {
	                    echo get_the_author_posts_link();
	                }
                	?></span> | Ngày cập nhật: <?php echo get_the_modified_date('d-m-Y'); ?></p>
                </div>

				<?php
				// Start the Loop.
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content/content', 'single');

				endwhile; // End the loop.
				?>
				<?php
				$tags = wp_get_post_tags(get_the_ID());
				if (count($tags) > 0) :
				?>
					<div class="msi-post-tags-related">
						<span class="msi-tag-label">
							<i class="fas fa-tags"></i> :
						</span>
						<?php

						foreach ($tags as $tag) : ?>
							<span class="msi-widget-tags-item">
								<a href="<?php echo get_tag_link($tag->term_id); ?>">#<?php echo $tag->name; ?></a>
							</span>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

		        <div class="comment clearfix">
		            <?php comments_template( '', true );  ?>
		        </div>
		        
				<?php require get_template_directory() . '/template-parts/related-post.php'; ?>

			</div>


		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();