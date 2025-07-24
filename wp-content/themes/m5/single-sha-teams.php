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
$team_id_curent =  get_the_ID();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main container">

		<div class="row justify-content-center">
			<div class="col-md-10 offset-md-1">
				<div class="post-box-meta-single"> </div>
				<?php
				// Start the Loop.
				while (have_posts()) :
					the_post();

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

						<?php
						$post_id = get_the_ID();
						$url = get_permalink();
						$title = get_the_title();
						$url_thumbnail = get_the_post_thumbnail_url( $post_id, 'full');
						?>
						<div class="meta_bottom">
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

					</article><!-- #post-<?php //the_ID(); ?> -->
					<?php

				endwhile; // End the loop.
				?>

				<div class="team-recent">
					<p class="team-titles">XEM THÊM CÁC BÁC SĨ</p>
					<div class="teams">
						<?php 
	                    $arg_team = array(
	                        'post_type' => 'sha-teams',
	                        'posts_per_page' => 6,
	                        'orderby' => 'rand',
	                        'post__not_in' => array($team_id_curent),
	                    );

	                    $query_teams = new WP_Query( $arg_team );

	                    if( $query_teams->have_posts()) {
	                        while ($query_teams->have_posts()) : 
	                            $query_teams->the_post();
	                            $team_id = get_the_ID();
	                            ?>
	                            <div class="item">
	                                <div class="im">
	                                    <a href="<?php the_permalink($team_id); ?>">
	                                        <?php 
												if (has_post_thumbnail($team_id)):
													$image = wp_get_attachment_image_src(get_post_thumbnail_id($team_id), 'full');
													$image_url = $image[0];
												else:
													$link = get_bloginfo('wpurl');
													$image_url = $link . '/wp-content/themes/m5/assets/images/os/icon-menu-item.svg';
												endif;	
											?>
	                                        <img class="" alt="<?php echo get_the_title($team_id); ?>" src="<?php echo $image_url; ?>">
	                                    </a>
	                                </div>
	                                <div class="info">
	                                    <div class="i-top">
	                                    <p class="name">
	                                        <a href="<?php echo get_permalink($team_id); ?>" title="<?php echo get_the_title($team_id); ?>"><?php echo get_the_title($team_id); ?></a>
	                                    </p>
	                                    <span><?php echo get_field('single_team_pos',$team_id); ?></span>
	                                    </div>
	                                    <div class="i-bot">
	                                        <a href="<?php echo get_permalink($team_id); ?>" title="TÌM HIỂU THÊM">TÌM HIỂU THÊM <i class="icon-circle-right"></i></a>
	                                    </div>
	                                </div>
	                            </div>
	                            <?php
	                        endwhile;
	                    }
	                ?>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer(); ?>

<style>
	.team-recent .teams .item .im {
    	text-align: center;
    	height: 200px;
    	margin-bottom: 8px;
	}
	.team-recent .teams .item .im img {
		height: 200px;
	}
</style>