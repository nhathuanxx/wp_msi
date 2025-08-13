<?php
get_header();

$post_id = get_the_ID();
$categories = get_the_category($post_id);
$lang = function_exists('pll_current_language') ? pll_current_language('slug') : 'vi';

// Format ngày theo ngôn ngữ
if ($lang === 'vi') {
	$date = get_the_date('j \t\h\á\n\g n \n\ă\m Y');
} else {
	$date = get_the_date('F j, Y');
}

// Tính số phút đọc (200 từ/phút)
$reading_time = ceil(str_word_count(strip_tags(get_the_content())) / 200);
?>

<div id="msi-single-wrapper" class="msi-single-wrapper">
	<main id="msi-single-main" class="msi-single-main">

		<!-- Tiêu đề bài viết -->
		<h1 class="msi-single-title">
			<?php the_title(); ?>
		</h1>

		<!-- Meta -->
		<div class="msi-single-meta">
			<?php if (!empty($categories)) : ?>
				<span class="msi-single-category"><?php echo esc_html($categories[0]->name); ?></span>
				<span class="msi-single-bullet"> • </span>
			<?php endif; ?>

			<span class="msi-single-date"><?php echo esc_html($date); ?></span>
			<span class="msi-single-bullet"> • </span>

			<span class="msi-single-reading-time">
				<?php echo ($lang === 'vi') ? 'Đọc ' : 'Read '; ?>
				<?php echo esc_html($reading_time); ?>
				<?php echo ($lang === 'vi') ? ' phút' : ' minutes'; ?>
			</span>
		</div>
		<div class="msi-single-ulities">
			<figure name="Facebook" class="wp-block-image size-large is-resized">
				<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.msichoices.org.uk%2Fnews%2Fa-labour-government-one-year-on-what-has-it-meant-for-reproductive-rights%2F&amp;src=sdkpreparse" target="_blank" rel="noreferrer noopener"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9895 4.3882 22.954 10.125 23.8542V15.4688H7.07812V12H10.125V9.35625C10.125 6.34875 11.9166 4.6875 14.6576 4.6875C15.9701 4.6875 17.3438 4.92188 17.3438 4.92188V7.875H15.8306C14.34 7.875 13.875 8.80008 13.875 9.75V12H17.2031L16.6711 15.4688H13.875V23.8542C19.6118 22.954 24 17.9895 24 12Z" fill="#283573"></path>
					</svg>
				</a>
			</figure>
			<figure name="Share Link" class="wp-block-image size-large is-resized post_copy_link"><a id="msi-copy-link-btn" href="#0"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.00002 12C9.42947 12.5741 9.97737 13.0491 10.6066 13.3929C11.2358 13.7367 11.9315 13.9411 12.6467 13.9923C13.3618 14.0435 14.0796 13.9403 14.7514 13.6897C15.4231 13.4392 16.0331 13.047 16.54 12.54L19.54 9.53997C20.4508 8.59695 20.9548 7.33394 20.9434 6.02296C20.932 4.71198 20.4062 3.45791 19.4791 2.53087C18.5521 1.60383 17.298 1.07799 15.987 1.0666C14.676 1.0552 13.413 1.55918 12.47 2.46997L10.75 4.17997M13 9.99996C12.5706 9.42584 12.0227 8.95078 11.3935 8.60703C10.7643 8.26327 10.0685 8.05885 9.35337 8.00763C8.63822 7.95641 7.92043 8.0596 7.24867 8.31018C6.57691 8.56077 5.9669 8.9529 5.46002 9.45996L2.46002 12.46C1.54923 13.403 1.04525 14.666 1.05665 15.977C1.06804 17.288 1.59388 18.542 2.52092 19.4691C3.44796 20.3961 4.70203 20.9219 6.01301 20.9333C7.32399 20.9447 8.58701 20.4408 9.53002 19.53L11.24 17.82" stroke="#283573" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg><br>
				</a></figure>
			<div id="post_copy_link_text" style="display: none;">
				Đã sao chép
			</div>
		</div>
		<hr class="msi-single-separator" style="background-color:#00000033;color:#00000033">
		<div class="msi-single-content">
			<?php
			while (have_posts()) : the_post();
				the_content();
			endwhile;
			?>
		</div>
				<hr class="msi-single-separator" style="background-color:#00000033;color:#00000033">
			<div class="msi-single-ulities">
			<figure name="Facebook" class="wp-block-image size-large is-resized">
				<a id="msi-fb-share" href="#" target="_blank" rel="noreferrer noopener"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9895 4.3882 22.954 10.125 23.8542V15.4688H7.07812V12H10.125V9.35625C10.125 6.34875 11.9166 4.6875 14.6576 4.6875C15.9701 4.6875 17.3438 4.92188 17.3438 4.92188V7.875H15.8306C14.34 7.875 13.875 8.80008 13.875 9.75V12H17.2031L16.6711 15.4688H13.875V23.8542C19.6118 22.954 24 17.9895 24 12Z" fill="#283573"></path>
					</svg>
				</a>
			</figure>
			<figure name="Share Link" class="wp-block-image size-large is-resized post_copy_link"><a id="msi-copy-link-btn" href="#0"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.00002 12C9.42947 12.5741 9.97737 13.0491 10.6066 13.3929C11.2358 13.7367 11.9315 13.9411 12.6467 13.9923C13.3618 14.0435 14.0796 13.9403 14.7514 13.6897C15.4231 13.4392 16.0331 13.047 16.54 12.54L19.54 9.53997C20.4508 8.59695 20.9548 7.33394 20.9434 6.02296C20.932 4.71198 20.4062 3.45791 19.4791 2.53087C18.5521 1.60383 17.298 1.07799 15.987 1.0666C14.676 1.0552 13.413 1.55918 12.47 2.46997L10.75 4.17997M13 9.99996C12.5706 9.42584 12.0227 8.95078 11.3935 8.60703C10.7643 8.26327 10.0685 8.05885 9.35337 8.00763C8.63822 7.95641 7.92043 8.0596 7.24867 8.31018C6.57691 8.56077 5.9669 8.9529 5.46002 9.45996L2.46002 12.46C1.54923 13.403 1.04525 14.666 1.05665 15.977C1.06804 17.288 1.59388 18.542 2.52092 19.4691C3.44796 20.3961 4.70203 20.9219 6.01301 20.9333C7.32399 20.9447 8.58701 20.4408 9.53002 19.53L11.24 17.82" stroke="#283573" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg><br>
				</a></figure>
			<div id="post_copy_link_text" style="display: none;">
				Đã sao chép
			</div>
		</div>
        <br>
		<br>
	</main>
	<?php require get_template_directory() . '/template-parts/related-post.php'; ?>

</div>

<?php get_footer(); ?>