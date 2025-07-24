<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
$category = get_queried_object();
$current_cat_ID = $category->term_id;
?>
<div class="msi-post-tab-module">
	<div class="container">
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="msi-post-cat-1" role="tabpanel" aria-labelledby="msi-post-cat-1-tab">
				<div class="msi-post-tab-head">
					<div class="row">
						<h2 class="msi-post-tab-head-title">
							<?php the_archive_title(); ?>
						</h2>
					</div>
				</div><!-- .msi-post-tab-head -->
				<div class="row msi-post-tab-content">
					<div class="col-md-8 msi-post-tab-content-left">
						<div class="msi-post-list">

							<?php
							global $paged;
							$curpage = $paged ? $paged : 1;

							$args = array(
                                'post_type' => 'khach-hang',
                                'orderby' => 'post_date',
                                'posts_per_page' => 6,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'danh-sach-khach-hang',
                                        'terms' => 12,
                                        'field' => 'term_id',
                                    )
                                ),
                            );
							$query = new WP_Query($args); ?>

							<?php if ($query->have_posts()) : ?>
								<?php while ($query->have_posts()) : $query->the_post(); ?>
									<div class="msi-post-item">
										<div class="row">
											<div class="col-md-5 post-thumbnail-img">
												<a href="<?php the_permalink(); ?>">
													<?php if (has_post_thumbnail($post->ID)) : ?>
														<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
														<img class="" alt="Post Thumbnail" src="<?php echo $image[0]; ?>">
													<?php endif; ?>
												</a>
											</div>
											<div class="col-md-7 post-item-content">
												<h3 class="post-item-title">
													<a href="<?php the_permalink(); ?>">
														<?php the_title(); ?>
													</a>
												</h3>
												<div class="msi-post-created">
													<?php the_date(); ?>
												</div>
												<div class="post-item-description">
													<?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
												</div>
												<div class="msi-read-more">
													<a href="<?php the_permalink(); ?>">Xem chi tiết</a>
												</div>
											</div>
										</div>
									</div><!-- End .msi-post-item -->
								<?php endwhile; ?>
								<?php
								if ($query->max_num_pages > 1) {
									echo '
				<div id="wp_pagination" class="text-center">
				<nav aria-label="Page navigation example">
  <ul class="pagination">
  <li class="page-item"><a class="first page button page-link" href="' . get_pagenum_link(1) . '">&laquo;</a></li>
  <li class="page-item"><a class="previous page button page-link" href="' . get_pagenum_link(($curpage - 1 > 0 ? $curpage - 1 : 1)) . '">&lsaquo;</a></li>';
									for ($i = 1; $i <= $query->max_num_pages; $i++)
										echo '<li class="page-item"><a class="page-link ' . ($i == $curpage ? 'active ' : '') . 'page button" href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
									echo '
									<li class="page-item"><a class="next page button page-link" href="' . get_pagenum_link(($curpage + 1 <= $query->max_num_pages ? $curpage + 1 : $query->max_num_pages)) . '">&rsaquo;</a></li>
									<li class="page-item"><a class="last page button page-link" href="' . get_pagenum_link($query->max_num_pages) . '">&raquo;</a></li>
					</ul>
					</nav>
					</div>
				';
								}
								?>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?>
						</div>

					</div>
					<div class="col-md-4  msi-post-tab-sidebar-right">
						<?php require get_template_directory() . '/inc/sidebar-right.php'; ?>
					</div>
				</div><!-- .msi-post-tab-content -->
			</div>
		</div>

	</div>
</div>
<div class="confirm home-confirm msi-main-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="confirm__content">
					<h2 class="confirm__title">Bạn đã sẵn sàng</h2>
					<p class="confirm__desc">
						Chúng tôi luôn đồng hành cùng bạn trên chặng đường an toàn
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="confirm__btns display-flex-center">
					<a href="tel:1900 55 88 82" class="btn btn-main btn-main--gradient btn-h60 font-size-18 font-weight-bold text-uppercase">
						<i class="icon-phone"></i> 1900 55 88 82
					</a>
					<a href="javascript:;" class="btn btn-secondary btn-secondary--gradient btn-h60 font-size-16 font-weight-bold book-calendar text-uppercase">
						<i class="icon-calendar"></i> Đặt lịch khám
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
