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
$current_page_ID = get_the_ID();
$page_content = get_post($current_page_ID)->post_content;
$current_cat_name = get_the_title();
$lang = pll_current_language('slug');
?>
<!-- <div class="page-qa">
	<div class="container">
		<div class="page-qa__banner">
			<div class="page-qa__banner-content">
				<div class="page-qa__banner-title">
					<?php
					echo $current_cat_name
					?>
				</div>
			</div>
		</div>
	</div>
</div> -->
<div class="wp-block-msi-blocks-header-image-uk alignfull">
	<?php
// Lấy ID của trang hiện tại
$post_id = get_the_ID();

// Lấy nội dung trang
$post_content = get_post_field('post_content', $post_id);

// Tìm ảnh đầu tiên trong nội dung
preg_match('/<img[^>]+src=["\']([^"\']+)["\']/i', $post_content, $matches);

// Nếu có ảnh đầu tiên thì dùng, nếu không thì dùng ảnh mặc định
$image_url = !empty($matches[1])
    ? esc_url($matches[1])
    : get_template_directory_uri() . '/assets/images/msi/anh-page.jpg';
?>

<div class="right-image-block" style="background-image: url('<?php echo $image_url; ?>'); background-size: cover; background-position: center; width: 100%; ">
    <div class="container-wide">
        <div class="input-container">
            <span style="color:white;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);"><?php echo $current_cat_name; ?></span>
        </div>
    </div>
</div>
</div>
<main class="main-content service-page">
	<div class="service-intro bg-f9">
		<div class="container">
			<div class="service-intro__wrap">
				<div class="service-intro__content">
					<div class="margin-0">
						<?php echo $page_content; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h3 class="wp-block-heading has-text-align-center">
		<?php if ($lang === 'vi') : ?>
			Tìm hiểu thêm về MSI Việt Nam
		<?php else : ?>
			Learn more about MSI Vietnam
		<?php endif; ?>
	</h3>
	<p class="has-text-align-center-p">
		<?php if ($lang === 'vi') : ?>
			Tìm hiểu sâu hơn về MSI Việt Nam bằng cách đọc những câu chuyện, tin tức của chúng tôi.
		<?php else : ?>
			Explore more about MSI Vietnam by reading our stories and news.
		<?php endif; ?>
	</p>
	<?php require get_template_directory() . '/template-parts/post-list.php'; ?>
</main>


<?php get_footer(); ?>
<style>
	.service-page {
		font-family: 'Be Vietnam Pro', sans-serif !important;
		background-color: white;
	}

	/* .service-intro__content{
		width: 100%;
	} */
	.service-intro {
		background-color: white;
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
		padding: 0px 120px;
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

		.page-qa__banner-content {
			padding: 0px;
		}


		/* test111111111111 */
	}
</style>