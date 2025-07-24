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
?>
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


<?php
get_footer();
