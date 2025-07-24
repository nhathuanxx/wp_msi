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

$current_cat_ID = get_queried_object()->term_id;
$current_cat_name = get_queried_object()->name;
$current_cat_description = get_queried_object()->description;
?>
<div class="page-qa">
	<div class="container">
		<div class="page-qa__banner">
			<div class="page-qa__banner-content">
				<div class="page-qa__banner-title">
					<?php
					echo $current_cat_name
					?>
				</div>
				<div class="page-qa__banner-subtitle">
					<?php
					echo $current_cat_description
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="os-page-qa">
	<div class="container">
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="msi-post-cat-1" role="tabpanel" aria-labelledby="msi-post-cat-1-tab">
				<div class="row msi-post-tab-content">
					<div class="col-md-12 msi-post-tab-content-left">
						<div class="msi-post-list row">

							<?php
							global $paged;
							$curpage = $paged ? $paged : 1;

							$args = array(
								'post_type' => 'hoi-dap',
								'paged' => $paged, // Sử dụng $curpage thay vì $paged để nhất quán với phần còn lại của mã
								'posts_per_page' => 12,
								'tax_query' => array(
									array(
										'taxonomy' => 'hoi-dap-cat',
										'terms' => $current_cat_ID,
										'field' => 'term_id',
									)
								)
							);
							$query = new WP_Query($args); ?>

							<?php if ($query->have_posts()) : ?>
								<?php while ($query->have_posts()) : $query->the_post(); ?>
									<div class="msi-post-item col-md-6 col-lg-4">
										<div class="row" style="height: 100%; position:relative">
											<div class="col-md-12 post-thumbnail-img">
												<a href="<?php the_permalink(); ?>">
													<?php if (has_post_thumbnail($post->ID)) : ?>
														<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
														<img class="" alt="Post Thumbnail" src="<?php echo $image[0]; ?>">
													<?php endif; ?>
													<img class="" alt="Post Thumbnail" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/qadefault.png'); ?>">
												</a>
											</div>
											<div class="col-md-12 post-item-content">
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
								if ($query->max_num_pages > 1) { ?>
									<div id="wp_pagination" class="text-center">
										<nav aria-label="Page navigation example">
											<ul class="pagination">
												<!-- Nút Previous -->
												<li class="page-item <?php echo ($curpage == 1 ? 'disabled' : ''); ?>">
													<a style="width:auto;height:auto" class="previous page button page-link" href="<?php echo get_pagenum_link(($curpage - 1 > 0 ? $curpage - 1 : 1)); ?>">&lsaquo; Previous</a>
												</li>

												<!-- Hiển thị trang đầu tiên -->
												<li class="page-item <?php echo ($curpage == 1 ? 'active' : ''); ?>">
													<a class="page-link page button" href="<?php echo get_pagenum_link(1); ?>">1</a>
												</li>

												<!-- Hiển thị dấu ba chấm nếu cần -->
												<?php if ($curpage > 3) { ?>
													<?php if ($curpage > 4) { ?>
														<li class="page-item">
															<span class="page-link">...</span>
														</li>
													<?php } ?>
												<?php } ?>

												<!-- Hiển thị hai trang trước và hai trang sau trang hiện tại -->
												<?php for ($i = max(2, $curpage - 2); $i <= min($query->max_num_pages - 1, $curpage + 2); $i++) { ?>
													<li class="page-item <?php echo ($i == $curpage ? 'active' : ''); ?>">
														<a class="page-link page button" href="<?php echo get_pagenum_link($i); ?>"><?php echo $i; ?></a>
													</li>
												<?php } ?>

												<!-- Hiển thị dấu ba chấm và trang cuối cùng -->
												<?php if ($curpage < $query->max_num_pages - 2) { ?>
													<?php if ($curpage < $query->max_num_pages - 3) { ?>
														<li class="page-item">
															<span class="page-link">...</span>
														</li>
													<?php } ?>
													<li class="page-item">
														<a class="page-link page button" href="<?php echo get_pagenum_link($query->max_num_pages); ?>"><?php echo $query->max_num_pages; ?></a>
													</li>
												<?php } ?>

												<!-- Nút Next -->
												<li class="page-item <?php echo ($curpage == $query->max_num_pages ? 'disabled' : ''); ?>">
													<a style="width:auto;height:auto" class="next page button page-link" href="<?php echo get_pagenum_link(($curpage + 1 <= $query->max_num_pages ? $curpage + 1 : $query->max_num_pages)); ?>">Next &rsaquo;</a>
												</li>
											</ul>
										</nav>
									</div>
								<?php }
								?>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?>
						</div>

					</div>
				</div><!-- .msi-post-tab-content -->
			</div>
		</div>

	</div>
</div>

<?php require get_template_directory() . '/template-parts/os-partner-logo-2.php'; ?>
<?php require get_template_directory() . '/template-parts/content-us-now.php'; ?>
<?php get_footer(); ?>

<style>
	.os-page-qa {
		background-color: white;
	}

	.os-page-qa .nav-pills .nav-link.active,
	.nav-pills .show>.nav-link {
		color: #fff;
		background-color: #007bff;
	}

	#pagetitle,
	.partner-row-header-3,
	#msi-partner-logo-carousel {
		display: none;
	}

	.page-qa {
		padding-top: 64px;
		padding-bottom: 72px;
		background-color: #fff;
	}


	.page-qa__banner {
		width: 100%;
		background-size: cover;
		background-repeat: no-repeat;
		height: 339px;
		border-radius: 40px;
		background-image: url('<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/qa-banner.png');
	}

	.page-qa__banner-content {
		border-radius: 40px;
		background: linear-gradient(92.84deg, rgba(236, 249, 255, 0.4) -22.65%, #B6E9FF 168.27%);
		height: 100%;
		width: 100%;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
	}

	.page-qa__banner-title {
		font-family: "Space Grotesk", sans-serif;
		font-size: 56px;
		font-weight: 500;
		line-height: 67px;
		text-align: center;
		color: #0072AB;
	}

	.page-qa__banner-subtitle {
		font-family: 'Be Vietnam Pro', sans-serif;
		font-size: 16px;
		font-weight: 400;
		line-height: 24px;
		text-align: center;
		color: #292929;
		margin-top: 24px;
	}

	.msi-post-tab-content {
		border: none;
	}

	.os-page-qa .nav-pills .nav-link.active,
	.nav-pills .show>.nav-link {
		color: var(--Alias-Text-White, #FFFFFF);

		background: var(--Alias-Button-Primary-Pink, #E50C75);

	}

	.os-page-qa .msi-post-tab-nav .nav-item a {
		background: var(--Alias-Button-Primary-Pinkex, #FFE4F4);
		padding: 12px 24px;
		border-radius: 100px;
		color: var(--Alias-Button-Primary-DarkPink, #D40261);
		font-family: 'Be Vietnam Pro', sans-serif;
		font-size: 16px;
		font-weight: 500;
		line-height: 24px;
		text-align: left;

	}

	.os-page-qa .msi-post-tab-nav {
		display: flex;
		/* justify-content: center; */
		align-items: center;
		position: relative;
		top: unset;
		right: unset;
		gap: 24px;
		flex-wrap: nowrap;
		width: max-content;
	}

	.os-page-qa .nav-item {
		margin: 0;
	}

	.os-page-qa .msi-post-tab-content-left {
		padding-right: 0;
		padding-top: 72px;
		border-right: none;
	}

	.os-page-qa .msi-post-item {
		margin-bottom: 120px;
		padding: 0px 28px;
	}

	.os-page-qa .post-thumbnail-img img {
		border-radius: 24px;
	}

	.os-page-qa .post-thumbnail-img {
		margin-bottom: 32px;
	}

	.os-page-qa .post-item-title {
		font-family: 'Be Vietnam Pro', sans-serif;
		font-size: 24px;
		font-weight: 600;
		line-height: 30px;
		text-align: left;
		margin-bottom: 28px;
		color: #000000;

	}

	.os-page-qa .post-item-description {
		font-family: 'Be Vietnam Pro', sans-serif;
		font-size: 16px;
		font-weight: 400;
		line-height: 24px;
		text-align: left;
		color: var(--Alias-Text-Neutral, #292929);
		margin-bottom: 28px;
	}

	.os-page-qa .msi-read-more {
		position: absolute;
		bottom: -48px;
		width: calc(100% - 28px);
		height: 48px;
		padding: 12px 24px 12px 24px;
		border-radius: 100px;
		background: var(--Alias-Button-Primary-Bluex, #DEF3FF);
		font-family: 'Be Vietnam Pro', sans-serif;
		font-size: 16px;
		font-weight: 500;
		line-height: 24px;
		text-align: left;
		color: var(--Alias-Button-Primary-DarkBlue, #0072AB);
		text-align: center;
	}

	.os-page-qa .tab-pane {
		padding-bottom: 88px;
	}

	/* .os-page-qa .nav-container{
		overflow: hidden;
		overflow-x: scroll;
	} */
	.os-page-qa .nav-container {
		overflow: hidden;
		overflow-x: scroll;
		-ms-overflow-style: none;
		/* Ẩn thanh cuộn ngang trên IE và Edge */
		scrollbar-width: none;
		/* Ẩn thanh cuộn ngang trên Firefox */
	}

	.os-page-qa .nav-container::-webkit-scrollbar {
		display: none;
		/* Ẩn thanh cuộn ngang trên Chrome, Safari và Opera */
	}

	/* Container for nav and arrows */
	.os-page-qa .nav-container {
		display: flex;
		align-items: center;
		position: relative;
		overflow: hidden;
		white-space: nowrap;
		/* Ngăn các mục bị xuống dòng */
	}

	/* Container for nav and arrows */
	.os-page-qa .nav-container {
		display: flex;
		align-items: center;
		position: relative;
		overflow: hidden;
		white-space: nowrap;
		/* Ngăn các mục bị xuống dòng */
	}

	/* Style for the navigation list */
	.os-page-qa .nav-container .msi-post-tab-nav {
		display: flex;
		align-items: center;
		gap: 24px;
		/* Khoảng cách giữa các mục nav */
		flex-grow: 1;
		/* Để danh sách nav chiếm không gian còn lại */
	}

	/* Style for navigation arrows */
	.os-page-qa .nav-container .nav-arrow {
		cursor: pointer;
		padding: 6px 12px;
		z-index: 1;
		position: sticky;
		top: 0;
		border-radius: 50%;
		background-color: white;
		color: #E50C75;
		font-weight: 800;
	}

	.os-page-qa .nav-container .nav-arrow-left {
		left: 0;
	}

	.os-page-qa .nav-container .nav-arrow-right {
		right: 0;
	}

	/* Hiển thị mũi tên khi cần */
	.os-page-qa .nav-container .nav-arrow {
		display: none;
	}

	.os-page-qa .nav-container .nav-arrow.show {
		display: block;
	}

	.os-page-qa .nav-container .nav-arrow.show {
		z-index: 99;
	}

	@media screen and (min-width: 991px) and (max-width: 1199px) {}

	@media screen and (max-width: 991px) {}

	@media screen and (max-width: 768px) {
		.page-item .previous {
			display: none;
		}

		.page-item .next {
			display: none;
		}

		.page-qa .container {
			padding: 0px 16px
		}

		.page-qa__banner-title {
			font-family: 'Space Grotesk', sans-serif;
			font-size: 16px;
			font-weight: 500;
			line-height: 20.42px;
			text-align: center;
			color: var(--Alias-Text-Primary-DarkBlue, #0072AB);
			margin-bottom: 5px;
		}

		.page-qa__banner-subtitle {
			font-family: 'Be Vietnam Pro', sans-serif;
			font-size: 12px;
			font-weight: 400;
			line-height: 18px;
			text-align: center;
			margin-top: 0px;
		}

		.page-qa__banner {
			height: auto;
			padding: 18.17px 10.17px;
			border-radius: 24px;
		}

		.os-page-qa .msi-post-tab-nav {
			display: flex;
			justify-content: start;
			flex-wrap: nowrap;
			white-space: nowrap;
			overflow: scroll;
		}

		.os-page-qa .msi-post-tab-content-left {
			padding-left: 0px;
		}
	}

	#wp_pagination {
		width: 100%;
		display: flex;
		justify-content: center;
	}

	/* CSS cho phân trang */
	#wp_pagination {
		display: inline-block;
		margin-top: 20px;
	}

	.pagination {
		display: flex;
		justify-content: center;
		padding-left: 0;
		list-style: none;
		border-radius: 0.25rem;
	}

	.page-item {
		margin: 0 5px;
	}

	.page-link {
		position: relative;
		display: block;
		padding: 0.5rem 0.75rem;
		margin-left: -1px;
		line-height: 1.25;
		width: 40px;
		height: 40px;
		display: flex;
		justify-content: center;
		align-items: center;
		background-color: #fff;
		border: none;
		text-decoration: none;
		transition: background-color 0.15s ease-in-out, color 0.15s ease-in-out;
		border-radius: 0.25rem;
		font-family: 'Be Vietnam Pro', sans-serif;
		font-size: 16px;
		font-weight: 400;
		line-height: 24px;
		text-align: left;
		color: var(--Alias-Text-Neutral, #292929);

	}

	.page-link:hover {
		color: #0056b3;
		background-color: #e9ecef;
		border-color: #dee2e6;
	}

	.page-item.active .page-link {
		z-index: 1;
		color: #fff;
		background-color: #212529;
		border-color: #212529;
		width: 40px;
		height: 40px;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: var(--sds-size-space-200) var(--sds-size-space-400) var(--sds-size-space-200) var(--sds-size-space-400);
		gap: 0px;
		border-radius: 8px;
		opacity: 0px;

	}

	.page-item.disabled .page-link {
		color: #6c757d;
		pointer-events: none;
		background-color: #fff;
		border-color: #dee2e6;
	}

	.page-item span.page-link {
		color: #6c757d;
		background-color: transparent;
		border-color: transparent;
		pointer-events: none;
	}
	.os-page-qa .post-thumbnail-img img{
		height: 350px;
	}
</style>