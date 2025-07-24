<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K9MNM9S');</script>
<!-- End Google Tag Manager -->

</head>

<body <?php body_class();
		?>>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9MNM9S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<?php wp_body_open();
	?>

	<div id="page" class="wrap-main">
	<div>222222222222</div>
		<header id="header" class="header display-flex-center justify-content-between bg-f9">
			<div class="header__logo">
				<a href="<?php echo get_home_url(); ?>">
					<?php
					$logoUrl = get_field('logo_image', pll_current_language('slug'));
					?>
					<img src="<?php echo $logoUrl; ?>" alt="<?php echo bloginfo(); ?>">
				</a>
			</div>
			<div class="header__nav only-desktop">
				<!-- <ul class="primary-menu">
					<li class="active">
						<a href="index.html">Trang chủ</a>
					</li>
					<li>
						<a href="about.html">Giới thiệu</a>
						<ul>
							<li>
								<a href="#">Khám sức khỏe phụ nữ định kỳ</a>
							</li>
							<li>
								<a href="#">Các biện pháp tránh thai dài hạn</a>
								<ul>
									<li>
										<a href="#">Khám sức khỏe phụ nữ định kỳ</a>
									</li>
									<li>
										<a href="#">Các biện pháp tránh thai dài hạn</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="mega-menu">
						<a href="service.html">Dịch vụ</a>
						<div class="mega-menu__main">
							<div class="mega-menu__main__wrap">
								<div class="item mega-menu__list">
									<ul>
										<li>
											<a href="#">Khám sức khỏe phụ nữ định kỳ</a>
										</li>
										<li>
											<a href="#">Các biện pháp tránh thai dài hạn</a>
										</li>
									</ul>
								</div>
								<div class="item mega-menu__list">
									<ul>
										<li>
											<a href="#">Khám sức khỏe phụ nữ định kỳ</a>
										</li>
										<li>
											<a href="#">Các biện pháp tránh thai dài hạn</a>
										</li>
									</ul>
								</div>
								<div class="item mega-menu__img">
									<figure class="margin-0">
										<img src="./assets/images/cham-soc-truoc-sinh.jpg" alt="Chăm sóc trước sinh">
									</figure>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
								</div>
								<div class="col-lg-4"></div>
								<div class="col-lg-4"></div>
							</div>
						</div>
					</li>
					<li>
						<a href="#">Phòng khám</a>
					</li>
					<li>
						<a href="#">Tin tức</a>
					</li>
					<li>
						<a href="#">Đội ngũ MSI</a>
					</li>
				</ul> -->
				<?php

				$args = array(
					'theme_location' => 'mega_menu', // primary_menu or mega-menu
					'depth' => 0,
					'container' => '',
					'menu_class'  => 'primary-menu',
					'walker'  => new WP_Bootstrap_Mega_Navwalker()
				);
				wp_nav_menu($args);
				?>
			</div>
			<div class="header__info display-flex-center only-desktop">
				<div class="header__desc text-right">
				    <?php
                        while (the_repeater_field('header_slogan', pll_current_language('slug'))) : 
					?>
					<p class="primary-color font-weight-bold margin-0 font-size-14 text-uppercase"><?php echo get_field('title', pll_current_language('slug')); ?>
										<p class="text-uppercase margin-0"><?php echo get_field('sub_title', pll_current_language('slug')); ?></p>
					<?php endwhile; ?>
					
				</div>
				<a href="javascript:;" class="header__book btn btn-secondary btn-secondary--gradient font-size-16 font-weight-bold book-calendar btn-box-shadow btn-h50 btn-i-lg-12 text-uppercase">
					<i class="icon-calendar"></i> <?php echo get_field('book_an_appointment', pll_current_language('slug')); ?>cccccccccccc
				</a>
				<div class="header__lang only-desktop">
					<?php $translations = pll_the_languages(array('raw' => 1)); ?>

					<?php if (!empty($translations)) : ?>
						<select class="select-circle" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">

							<?php foreach ($translations as $translation) : ?>
								<option <?php if ($translation['current_lang'] == true) : ?> selected="selected" <?php endif; ?> value="<?php echo $translation['url']; ?>"><?php echo $translation['slug']; ?></option>
							<?php endforeach; ?>
						</select>
					<?php endif; ?>

				</div>
			</div>
			<div class="header__menu__mobile">
				<div class="header__menu">
					<?php

					$args = array(
						'theme_location' => 'mega_menu', // primary_menu or mega-menu
						'depth' => 0,
						'container' => '',
						'menu_class'  => 'primary-menu',
						'walker'  => new WP_Bootstrap_Mega_Navwalker()
					);
					wp_nav_menu($args);
					?>
					<!-- <ul class="primary-menu">
						<li class="active">
							<a href="index.html">Trang chủ</a>
						</li>
						<li>
							<a href="about.html">Giới thiệu</a>
							<ul>
								<li>
									<a href="#">Khám sức khỏe phụ nữ định kỳ</a>
								</li>
								<li>
									<a href="#">Các biện pháp tránh thai dài hạn</a>
									<ul>
										<li>
											<a href="#">Khám sức khỏe phụ nữ định kỳ</a>
										</li>
										<li>
											<a href="#">Các biện pháp tránh thai dài hạn</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="mega-menu">
							<a href="service.html">Dịch vụ</a>
							<div class="mega-menu__main">
								<div class="mega-menu__main__wrap">
									<div class="item mega-menu__list">
										<ul>
											<li>
												<a href="#">Khám sức khỏe phụ nữ định kỳ</a>
											</li>
											<li>
												<a href="#">Các biện pháp tránh thai dài hạn</a>
											</li>
										</ul>
									</div>
									<div class="item mega-menu__list">
										<ul>
											<li>
												<a href="#">Khám sức khỏe phụ nữ định kỳ</a>
											</li>
											<li>
												<a href="#">Các biện pháp tránh thai dài hạn</a>
											</li>
										</ul>
									</div>
									<div class="item mega-menu__img">
										<figure class="margin-0">
											<img src="./assets/images/cham-soc-truoc-sinh.jpg" alt="Chăm sóc trước sinh">
										</figure>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
									</div>
									<div class="col-lg-4"></div>
									<div class="col-lg-4"></div>
								</div>
							</div>
						</li>
						<li>
							<a href="#">Phòng khám</a>
						</li>
						<li>
							<a href="#">Tin tức</a>
						</li>
						<li>
							<a href="#">Đội ngũ MSI</a>
						</li>
					</ul> -->
				</div>
				<div class="header__menu__mobile__info">
					<div class="header__lang">

						<?php if (!empty($translations)) : ?>
							<select class="select-circle" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">

								<?php foreach ($translations as $translation) : ?>
									<option selected="<?php echo ($translation['current_lang'] == true) ? 'selected' : ''; ?>" value="<?php echo $translation['url']; ?>">
										<?php echo $translation['slug']; ?>
									</option>
								<?php endforeach; ?>
							</select>
						<?php endif; ?>
					</div>
					<div class="header__desc text-center">
						<?php
                        while (the_repeater_field('header_slogan', pll_current_language('slug'))) : 
						?>
						<p class="primary-color font-weight-bold margin-0 font-size-14 text-uppercase"><?php echo get_field('title', pll_current_language('slug')); ?>
											<p class="text-uppercase margin-0"><?php echo get_field('sub_title', pll_current_language('slug')); ?></p>
						<?php endwhile; ?>
					</div>
					<a href="javascript:;" class="header__book btn btn-secondary btn-secondary--gradient font-size-16 font-weight-bold book-calendar btn-box-shadow btn-h50 btn-i-lg-12 text-uppercase">
						<i class="icon-calendar"></i> <?php echo get_field('book_an_appointment', pll_current_language('slug')); ?>vvvvvvvvvvv
					</a>
				</div>
			</div>
			<div class="header__icon__menu d-lg-none icon-menu-mobile">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</header>