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

<div id="primary" class="os-content-area">
	<main id="main" class="site-main container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="msi-single-post-title text-center">
					<div class="overlay"></div>
					<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
					<a class="os-similar-btn" href="<?php bloginfo('wpurl'); ?>/qa">Tìm thông tin tương tự</a>
				</div>
				<?php
				// Start the Loop.
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content/content', 'single');

				endwhile; // End the loop.
				?>
			</div>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php require get_template_directory() . '/template-parts/msi-doctors.php'; ?>
<?php require get_template_directory() . '/template-parts/content-us-now.php'; ?>

<?php get_footer(); ?>
<style>
	#pagetitle {
		display: none;
	}

	.os-content-area {
		background-color: white;
	}

	.os-content-area .msi-single-post-title {
		width: 100%;
		height: 560px;
		padding: 100px 200px 100px 200px;
		border-radius: 24px;
		opacity: 0px;
		background: #00000066;
		background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/qapost.png'); ?>');
		background-size: cover;
		background-position: center;
		overflow: hidden;
		position: relative
	}

	.os-content-area .msi-single-post-title .overlay {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, 0.4);
	}

	.os-content-area .msi-single-post-title .entry-title {
		font-family: 'Space Grotesk', sans-serif;
		font-size: 56px;
		font-weight: 500;
		position: relative;
		line-height: 67px;
		text-align: center;
		color: var(--ColorBasic-Basic-White, #FFFFFF);

	}

	.os-similar-btn {
		width: fit-content;
		height: 48px;
		padding: 12px 24px 12px 24px;
		gap: 10px;
		border-radius: 100px;
		opacity: 0px;
		background: var(--Alias-Button-Primary-Blue, #00ACEE);
		font-family: 'Be Vietnam Pro', sans-serif;
		font-size: 16px;
		font-weight: 500;
		line-height: 24px;
		text-align: left;
		color: var(--Alias-Text-White, #FFFFFF);
		position: relative;
		top: 64px;
	}

	.os-content-area .entry-content {
		font-family: 'Be Vietnam Pro', sans-serif;
		font-size: 16px;
		font-weight: 400;
		line-height: 24px;
		text-align: left;
		color: var(--Alias-Text-Neutral, #292929);
		margin-top: 72px;


	}

	@media screen and (max-width: 767px) {
		.os-content-area .msi-single-post-title {
			width: 100%;
			height: fit-content;
			padding: 20px 40px;
			height: 180px;
			/* padding: 0px; */
			border-radius: 24px;
			opacity: 0px;
			background: #00000066;
			background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/qapost.png'); ?>');
			background-size: cover;
			background-position: center;
			overflow: hidden;
			position: relative;
		}

		.os-content-area .msi-single-post-title .entry-title {
			font-family: 'Space Grotesk', sans-serif;
			color: var(--ColorBasic-Basic-White, #FFFFFF);
			font-family: Space Grotesk;
			font-size: 16px;
			font-weight: 500;
			line-height: 20.42px;
			text-align: center;

            margin: 0px;
		}

		.os-similar-btn {
			width: fit-content;
			height: 48px;
			padding: 12px 24px 12px 24px;
			gap: 10px;
			border-radius: 100px;
			opacity: 0px;
			background: var(--Alias-Button-Primary-Blue, #00ACEE);
			font-family: 'Be Vietnam Pro', sans-serif;
			font-size: 16px;
			font-weight: 500;
			line-height: 24px;
			text-align: left;
			color: var(--Alias-Text-White, #FFFFFF);
			position: relative;
			top: 40px;
		}
	}
</style>