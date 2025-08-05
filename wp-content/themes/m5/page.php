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
	<div class="right-image-block">
		<div class="container-wide">
			<div class="input-container">
				<span> <?php
						echo $current_cat_name
						?></span>
			</div>
			<div class="container-image">
				<div class="image-container"><img decoding="async" src="https://www.msichoices.org.uk/wp-content/uploads/2023/08/msi-uk-pregnancy-options-01-1.jpg.webp" alt="Y tá MSI UK đang an ủi khách hàng phá thai." class="header-image lazyloaded" data-src="https://www.msichoices.org.uk/wp-content/uploads/2023/08/msi-uk-pregnancy-options-01-1.jpg.webp" data-eio-rwidth="800" data-eio-rheight="533" data-src-webp="https://www.msichoices.org.uk/wp-content/uploads/2023/08/msi-uk-pregnancy-options-01-1.jpg.webp"><noscript><img decoding="async" src="https://www.msichoices.org.uk/wp-content/uploads/2023/08/msi-uk-pregnancy-options-01-1.jpg" alt="MSI UK nurse comforting abortion client." class="header-image" data-eio="l" /></noscript><img decoding="async" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzU2IiBoZWlnaHQ9IjMyMCIgdmlld0JveD0iMCAwIDM1NiAzMjAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxnIHN0eWxlPSJtaXgtYmxlbmQtbW9kZTptdWx0aXBseSI+CjxwYXRoIGQ9Ik0zNTMuODgxIDIzNS40N0wxOTkuODY3IC0yMC45NjkzQzE5Ny45MSAtMjQuMzI1MSAxOTQuMjc2IC0yNi44NDE5IDE5MC4zNjMgLTI3LjY4MDlDMTg2LjQ1IC0yOC41MTk4IDE4Mi4yNTcgLTI3LjY4MDkgMTc4LjkwMyAtMjUuNDQzN0MxMDcuMzQ2IDIyLjM3NjQgNDYuNDEwOSA4Ni40MTYyIDEuOTY3NDQgMTU5Ljk2NEMwLjAxMDgxMzQgMTYzLjMyIC0wLjU0ODIyOSAxNjcuNTE1IDAuNTY5ODQ1IDE3MS40M0MxLjY4NzkyIDE3NS4zNDUgNC4yMDM1OSAxNzguNzAxIDcuODM3MzMgMTgwLjY1OEwyNzIuMjYyIDMyMS4zMjJDMjc0LjQ5OCAzMjIuNDQxIDI3Ni43MzQgMzIzIDI3OS4yNSAzMjNDMjg0LjAwMiAzMjMgMjg4Ljc1MyAzMjAuNzYzIDI5MS41NDkgMzE2LjU2OEMzMDcuMjAyIDI5My4zNTcgMzI3LjA0NyAyNzIuNjYzIDM1MC4yNDggMjU1LjA0NUMzNTYuMTE3IDI1MC41NzEgMzU3Ljc5NSAyNDIuMTgxIDM1My44ODEgMjM1Ljc0OSIgZmlsbD0iI0VCRjNGQiIvPgo8L2c+Cjwvc3ZnPgo=" class="rectangle first"><img decoding="async" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzU3IiBoZWlnaHQ9IjI3OCIgdmlld0JveD0iMCAwIDM1NyAyNzgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxnIHN0eWxlPSJtaXgtYmxlbmQtbW9kZTptdWx0aXBseSI+CjxwYXRoIGQ9Ik0zNTQuODc1IDI2My40N0wyMDAuNDI4IDcuMDMwNzFDMTk4LjQ2NiAzLjY3NDkyIDE5NC44MjIgMS4xNTgwNyAxOTAuODk4IDAuMzE5MTE3QzE4Ni45NzMgLTAuNTE5ODMyIDE4Mi43NjkgMC4zMTkxMjIgMTc5LjQwNSAyLjU1NjMyQzEwNy42NDcgNTAuMzc2NCA0Ni41NDEzIDExNC40MTYgMS45NzI5NyAxODcuOTY0QzAuMDEwODQzNyAxOTEuMzIgLTAuNTQ5NzY5IDE5NS41MTUgMC41NzE0NDYgMTk5LjQzQzEuNjkyNjYgMjAzLjM0NSA0LjIxNTQgMjA2LjcwMSA3Ljg1OTM1IDIwOC42NThMMjczLjAyNyAzNDkuMzIyQzI3NS4yNjkgMzUwLjQ0MSAyNzcuNTEyIDM1MSAyODAuMDM0IDM1MUMyODQuNzk5IDM1MSAyODkuNTY1IDM0OC43NjMgMjkyLjM2OCAzNDQuNTY4QzMwOC4wNjUgMzIxLjM1NyAzMjcuOTY2IDMwMC42NjMgMzUxLjIzMSAyODMuMDQ1QzM1Ny4xMTggMjc4LjU3MSAzNTguOCAyNzAuMTgxIDM1NC44NzUgMjYzLjc0OSIgZmlsbD0iIzlEQ0RGMCIvPgo8L2c+Cjwvc3ZnPgo=" class="rectangle second"></div>
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