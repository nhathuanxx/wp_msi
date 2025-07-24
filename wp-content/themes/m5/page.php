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
				<!-- <div class="page-qa__banner-subtitle">
                    <?php
                    if (pll_current_language('slug') == 'vi') {
                        echo 'Cung cấp những thông tin mới nhất về sức khỏe phụ nữ, các kiến thức chuyên môn, cùng những cập nhật từ phòng khám.';
                    }
                    if (pll_current_language('slug') == 'en') {
                        echo "Discover how we can empower you to not just survive, but thrive. Dive deeper into prioritizing your well being<br />and gain the knowledge needed to make informed decisions that will lead to a healthier lifestyle.";
                    }
                    if (pll_current_language('slug') == 'zh') {
                        echo '了解我们如何帮助您不仅生存，而且蓬勃发展。更深入地优先考虑您的健康<br />并获得做出明智决策所需的知识，从而实现更健康的生活方式。';
                    }
                    ?>
                </div> -->
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
</main>


<?php get_footer(); ?>
<style>
	.service-page{
		font-family: 'Be Vietnam Pro', sans-serif !important; 
		background-color: white;
	}
	/* .service-intro__content{
		width: 100%;
	} */
	.service-intro{
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
		.page-qa__banner-content{
			padding: 0px;
		}
		}
</style>
