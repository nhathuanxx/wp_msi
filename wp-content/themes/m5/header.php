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
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K9MNM9S');</script> -->
	<!-- End Google Tag Manager -->
	<meta name="google-site-verification" content="LH4iz-JrIFNrQgMJsV6lwNGOVhbLnRId-JiOPxZcRU0" />
</head>

<body <?php body_class();
		?>>
	<!-- Google Tag Manager (noscript) -->
	<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9MNM9S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
	<!-- End Google Tag Manager (noscript) -->

	<?php wp_body_open();
	?>

	<div id="page" class="wrap-main">
		<header id="header" class="header display-flex-center justify-content-between bg-f9">
			<div class="overlay-mobile"></div>
			<div class="header__logo">
				<a href="<?php bloginfo('wpurl'); ?>">
					<?php
					$logoUrl = get_field('logo_image', pll_current_language('slug'));
					if (is_front_page()) {
					?>
						<h1 style="display: none;">Hệ thống phòng khám Sản phụ khoa Dr.Marie</h1>
					<?php
					}
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

				<span class="header__search ">
					<form method="get" action="" role="search">
						<input type="hidden" name="post_type" value="post">
						<input type="hidden" name="taxonomy" value="category">
						<input type="hidden" name="term" value="tin-tuc-y-hoc">
						<div class="search-data">
							<input id="search-data-input-val" type="search" name="s" value=""/>
							<label>Search</label>
							<img class="icon-calendar" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon-search.svg" alt="icon-calendar">
						</div>
					</form>
				</span>

				<a href="javascript:;" class="header__book btn btn-custom btn-secondary btn-secondary--gradient font-size-16 font-weight-bold book-calendar btn-box-shadow btn-h50 btn-i-lg-12 text-uppercase">
					<span class="header__book-icon">
						<!-- <i class="icon-calendar"></i> -->
						<img class="icon-calendar" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon-calendar.svg" alt="icon-calendar">
					</span>
					<span class="header__book-text"><?php echo get_field('book_an_appointment', pll_current_language('slug')); ?></span>
				</a>
				<a href="tel:1900 55 88 82" class="custom-call-btn">
					<div class="call-button">
				    	<div class="header__book-icon">
							<img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon-phone.svg" alt="icon-calendar">
				    	</div>
				    	<div class="text">
				    	    <span>Call us now!</span>
				    	</div>
					</div>
					<span class="phone-number">1900 55 88 82</span>
				</a>

				<div class="header__lang only-desktop">
					<?php $translations = pll_the_languages(array('raw' => 1)); ?>

					<?php if (!empty($translations)) : ?>
						<?php
							$url = get_bloginfo('wpurl') . '/wp-content/themes/m5/assets/images/os/';
    						if (pll_current_language('slug') == 'vi') {
    						    echo '<img src="' . $url . 'flag-vi.png" alt="flag">';
    						} elseif (pll_current_language('slug') == 'en') {
    						    echo '<img src="' . $url . 'flag-en.png" alt="flag">';
    						} elseif (pll_current_language('slug') == 'zh') {
    						    echo '<img src="' . $url . 'flag-cn.png" alt="flag">';
    						}
                		?>

						<select class="select-circle" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
							<?php foreach ($translations as $translation) : ?>
								<option <?php if ($translation['current_lang'] == true) : ?> selected="selected" <?php endif; ?> value="<?php echo $translation['url']; ?>">
									<?php echo $translation['slug']; ?>
								</option>
							<?php endforeach; ?>
						</select>
					<?php endif; ?>

				</div>
			</div>
			<div class="header__menu__mobile">
				
				<span class="header__search ">
					<form method="get" action="" role="search">
						<input type="hidden" name="post_type" value="post">
						<input type="hidden" name="taxonomy" value="category">
						<input type="hidden" name="term" value="tin-tuc-y-hoc">
						<div class="search-data">
							<input id="search-data-input-val" type="search" name="s" value=""/>
							<label class="search-data-label">Search</label>
							<img class="icon-calendar" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon-search.svg" alt="icon-calendar">
						</div>
					</form>
				</span>
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
							<?php
								$url = get_bloginfo('wpurl') . '/wp-content/themes/m5/assets/images/os/';
    							if (pll_current_language('slug') == 'vi') {
    							    echo '<img src="' . $url . 'flag-vi.png" alt="flag">';
    							} elseif (pll_current_language('slug') == 'en') {
    							    echo '<img src="' . $url . 'flag-en.png" alt="flag">';
    							} elseif (pll_current_language('slug') == 'zh') {
    							    echo '<img src="' . $url . 'flag-cn.png" alt="flag">';
    							}
                			?>
							<select class="select-circle" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">

							<?php foreach ($translations as $translation) : ?>
							<option selected="<?php echo ($translation['current_lang'] == true) ? 'selected' : ''; ?>"
								value="<?php echo $translation['url']; ?>">
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
						<i class="icon-calendar"></i> <?php echo get_field('book_an_appointment', pll_current_language('slug')); ?>
					</a>
				</div>
			</div>
			<div class="header__icon__menu d-lg-none icon-menu-mobile">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</header>

<!-- tạm ẩn background đầu trang -->
