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
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main container">
		<div class="text-center mb-3">
			<?php
			if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail('full');
			}
			?>
		</div>

		<div class="row justify-content-center">
			<div class="col-md-8">

				<div class="page-breadcrumb">
					<div class="container">
						<?php
						if (function_exists('yoast_breadcrumb')) {
							yoast_breadcrumb('<div id="breadcrumbs" class="margin-0 padding-0 text-center">', '</div>');
						}
						?>
					</div>
				</div>

				<div class="msi-single-post-title text-center">
					<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
				</div>

				<div class="text-center">
					<div class="msi-post-social-share">
						<div class="msi-post-social-item">
							<i class="fab fa-facebook" style="color: #38539b;"></i>
						</div>
						<div class="msi-post-social-item">
							<i class="fab fa-youtube" style="color: #f04323;"></i>
						</div>
						<div class="msi-post-social-item">
							<i class="fab fa-linkedin" style="color: #0078af;"></i>
						</div>
						<div class="msi-post-social-item">
							<i class="fab fa-twitter-square" style="color: #4ea6ea;"></i>
						</div>
					</div>
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
				<?php require get_template_directory() . '/template-parts/related-post.php'; ?>

			</div>


		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();