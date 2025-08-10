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
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;300;400;500;700;900&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<link
		rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
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

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9MNM9S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
	<!-- End Google Tag Manager (noscript) -->

	<?php wp_body_open();
	?>

	<div id="page" class="wrap-main">
		<header id="header" class="header" style="padding: 0px;">
			<div class="extra-header-container">
				<div class="extra-header">
					<div class="header__lang only-desktop">
						<?php $translations = pll_the_languages(array('raw' => 1)); ?>
						<?php if (!empty($translations)) : ?>
							<div class="header-lang-content">
								<div class="lang-img-container">
									<?php
									$url = get_bloginfo('wpurl') . '/wp-content/themes/m5/assets/images/os/';
									if (pll_current_language('slug') == 'vi') {
										echo '<img class="lang-img" src="' . $url . 'flag-vi.png" alt="flag">';
									} elseif (pll_current_language('slug') == 'en') {
										echo '<img class="lang-img" src="' . $url . 'flag-en.png" alt="flag">';
									}
									?>
								</div>
								<select class="select-circle"
									onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
									<?php foreach ($translations as $translation) : ?>
										<option <?php if ($translation['current_lang'] == true) : ?> selected="selected"
											<?php endif; ?> value="
								<?php echo $translation['url']; ?>">
											<?php echo $translation['name']; ?>
										</option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="popup-country-trigger">
								<div class="lang-img-container">
									<?php
									$url = get_bloginfo('wpurl') . '/wp-content/themes/m5/assets/images/os/';
									echo '<img class="lang-img" src="' . $url . 'flag-vi.png" alt="flag">';
									?>
								</div>
								<div class="popup-country-line">

								</div>
								<button id="popup-country-open" class="popup-country-btn">
									<span class="popup-country-label">Quốc gia thành viên</span>
									<svg class="popup-country-arrow" width="16" height="16" viewBox="0 0 24 24">
										<path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" fill="none" />
									</svg>
								</button>
							</div>

							<div id="popup-country-modal" class="popup-country-modal">
								<div class="navigation-container">
									<div class="navigation-container-inner" id="country-list">
										<div class="countries-container-wrapper">
											<h3>MSI Reproductive Choices</h3>
											<div class="countries-content">
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/smallest-door-icon.e48ad1a3.png"
														alt="Global Website flag"><a href="https://www.msichoices.org/"
														target="_blank">Global Website</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_usa.570c13e8.png"
														alt="United States flag"><a href="http://www.mariestopes-us.org/"
														target="_blank">United States</a></div>
											</div>
										</div>
										<div class="countries-container-wrapper">
											<h3>Latin America</h3>
											<div class="countries-content">
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_bolivia.c4c4391a.png"
														alt="Bolivia flag"><a href="https://www.mariestopes.org.bo/"
														target="_blank">Bolivia</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_mexico.4778bd6c.png"
														alt="Mexico flag"><a href="http://www.mariestopes.org.mx/"
														target="_blank">Mexico</a></div>
											</div>
										</div>
										<div class="countries-container-wrapper">
											<h3>Europe</h3>
											<div class="countries-content">
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_austria.8e8de669.png"
														alt="Austria flag"><a href="http://www.prowoman.at/"
														target="_blank">Austria</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_romania.ccc17468.png"
														alt="Romania flag"><a href="http://www.mariestopes.ro/"
														target="_blank">Romania</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_uk.ab1c4b0d.png"
														alt="United Kingdom flag"><a href="https://www.msichoices.org.uk/"
														target="_blank">United Kingdom</a></div>
											</div>
										</div>
										<div class="countries-container-wrapper">
											<h3>Africa</h3>
											<div class="countries-content">
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_burkina-faso.26902dcf.png"
														alt="Burkina Faso flag"><a
														href="https://mariestopes.org/where-we-work/burkina-faso/"
														target="_blank">Burkina Faso</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_drc.37ef7ceb.png"
														alt="DR Congo flag"><a
														href="https://mariestopes.org/where-we-work/democratic-republic-of-the-congo/"
														target="_blank">DR Congo</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_ethiopia.9797091a.png"
														alt="Ethiopia flag"><a href="http://www.mariestopes.org.et/"
														target="_blank">Ethiopia</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_ghana.a9f438de.png"
														alt="Ghana flag"><a href="https://www.mariestopes.org.gh/"
														target="_blank">Ghana</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_kenya.33a1b710.png"
														alt="Kenya flag"><a href="https://mariestopes.or.ke/"
														target="_blank">Kenya</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_madagascar.1c82787e.png"
														alt="Madagascar flag"><a href="http://www.mariestopes.mg/"
														target="_blank">Madagascar</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_malawi.bb097fcf.png"
														alt="Malawi flag"><a href="http://www.banja.org.mw/"
														target="_blank">Malawi</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_mali.9d5b6277.png"
														alt="Mali flag"><a href="https://mariestopes.org/where-we-work/mali/"
														target="_blank">Mali</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_niger.4ea5b708.png"
														alt="Niger flag"><a href="https://mariestopes.org/where-we-work/niger/"
														target="_blank">Niger</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_nigeria.7c96cd0e.png"
														alt="Nigeria flag"><a
														href="https://mariestopes.org/where-we-work/nigeria"
														target="_blank">Nigeria</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_senegal.8359ed6b.png"
														alt="Senegal flag"><a
														href="https://mariestopes.org/where-we-work/senegal/"
														target="_blank">Senegal</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_sierra-leone.efc0c07e.png"
														alt="Sierra Leone flag"><a href="https://mariestopes.org.sl/"
														target="_blank">Sierra Leone</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_south-africa.56cfce39.png"
														alt="South Africa flag"><a href="http://www.mariestopes.org.za/"
														target="_blank">South Africa</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_tanzania.d010ab5b.png"
														alt="Tanzania flag"><a
														href="https://mariestopes.org/where-we-work/tanzania"
														target="_blank">Tanzania</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_uganda.9e75ccae.png"
														alt="Uganda flag"><a href="http://mariestopes.or.ug/"
														target="_blank">Uganda</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_zambia.c532ccdd.png"
														alt="Zambia flag"><a
														href="https://mariestopes.org/where-we-work/zambia/"
														target="_blank">Zambia</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_zimbabwe.f336acfa.png"
														alt="Zimbabwe flag"><a href="http://pszim.com/"
														target="_blank">Zimbabwe</a></div>
											</div>
										</div>
										<div class="countries-container-wrapper">
											<h3>Pacific Asia</h3>
											<div class="countries-content">
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_australia.965ec3fa.png"
														alt="Australia flag"><a href="http://www.drmarie.org.au/"
														target="_blank">Australia</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_cambodia.cbad4ac0.png"
														alt="Cambodia flag"><a href="http://www.mariestopes.org.kh/"
														target="_blank">Cambodia</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_china.788f4550.png"
														alt="China flag"><a href="http://www.mariestopes.org.cn/"
														target="_blank">China</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_mongolia.26166b21.png"
														alt="Mongolia flag"><a href="http://www.mariestopes.org.mn/"
														target="_blank">Mongolia</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_myanmar.20d09600.png"
														alt="Myanmar flag"><a
														href="https://mariestopes.org/where-we-work/myanmar/"
														target="_blank">Myanmar</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_papua-new-guinea.152e4851.png"
														alt="Papua New Guinea flag"><a href="http://www.mariestopespng.org.pg/"
														target="_blank">Papua New Guinea</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_timor-leste.60ed8e7a.png"
														alt="Timor-Leste flag"><a href="https://www.mariestopes.tl/"
														target="_blank">Timor-Leste</a></div>
												<div class="countries-container"><img
														src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_vietnam.8c1cf58f.png"
														alt="Vietnam flag"><a href="http://www.mariestopes.org.vn/"
														target="_blank">Vietnam</a></div>
											</div>
										</div>
										<div class="last-two-countries">
											<div class="countries-container-wrapper">
												<h3>West Asia &amp; Middle East</h3>
												<div class="countries-content">
													<div class="countries-container"><img
															src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_pakistan.077d9fe8.png"
															alt="Pakistan flag"><a href="http://mariestopespk.org/"
															target="_blank">Pakistan</a></div>
													<div class="countries-container"></div>
												</div>
											</div>
											<div class="countries-container-wrapper">
												<h3>South Asia</h3>
												<div class="countries-content">
													<div class="countries-container"><img
															src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_bangladesh.fd75fb3e.png"
															alt="Bangladesh flag"><a href="http://www.mariestopes-bd.org/"
															target="_blank">Bangladesh</a></div>
													<div class="countries-container"><img
															src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_india.696665b3.png"
															alt="India flag"><a href="http://www.frhsi.org.in/"
															target="_blank">India</a></div>
													<div class="countries-container"><img
															src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_nepal.557eaf99.png"
															alt="Nepal flag"><a href="http://www.mariestopes.org.np/"
															target="_blank">Nepal</a></div>
													<div class="countries-container"><img
															src="https://www.msichoices.org.uk/wp-content/cache/autoptimize/js/../images/i-country_sri-lanka.a9d348ee.png"
															alt="Sri Lanka flag"><a href="http://www.populationservices.org/"
															target="_blank">Sri Lanka</a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<div class="extra-header-menu">
						<!-- <?php
								wp_nav_menu(array(
									'theme_location' => 'primary_menu',
									'menu_class'     => 'primary-menu',
									'container'      => false
								));
								?> -->
						<?php
						$base_url = site_url();
						$lang = pll_current_language('slug');

						if (have_rows('menu_top', $lang)) : ?>
							<ul class="custom-menu menu-top">
								<?php while (have_rows('menu_top', $lang)) : the_row();
									$title = get_sub_field('title');
									$slug = trim(get_sub_field('slug'), '/');
									$link = trailingslashit($base_url) . $slug;
								?>
									<li class="menu-item menu-top-item">
										<a href="<?= esc_url($link); ?>" data-menu-id="<?= esc_attr($slug); ?>">
											<?= esc_html($title); ?>
										</a>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>

						<a href="tel:1900 55 88 82" class="custom-call-btn">
							<img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/phone-icon.svg"
								alt="icon-phone">
							<span class="phone-number">1900 55 88 82</span>
						</a>
					</div>
				</div>
			</div>

			<div class="msi-extra-menu-container">
				<div class="msi-extra-menu">
					<div class="header__logo">
						<a href="<?php bloginfo('wpurl'); ?>">
							<?php
							$logoUrl = get_field('logo_image', pll_current_language('slug'));
							if (is_front_page()) {
							?>
								<h1 style="display: none;">MSI Choices Vietnam - Making Choices Possible</h1>
							<?php
							}
							?>
							<img src="<?php echo $logoUrl; ?>" alt="<?php echo bloginfo(); ?>">
						</a>
					</div>
					<?php
					$base_url = site_url();
					$menu_items = get_field('menu_items', pll_current_language('slug'));
					// echo "<script>console.log(" . json_encode($menu_items) . ");</script>";

					if (have_rows('menu_items', pll_current_language('slug'))): ?>
						<ul class="custom-menu">
							<?php while (have_rows('menu_items', pll_current_language('slug'))): the_row(); ?>
								<?php
								$title = get_sub_field('title');
								$slug = trim(get_sub_field('slug'), '/');
								$description = get_sub_field('description');
								$children_lv2 = get_sub_field('children');
								$has_lv2 = is_array($children_lv2) && count($children_lv2) > 0;
								?>
								<li class="menu-item">
									<div class="menu-item-1" data-menu-id="<?= esc_attr($slug); ?>">
										<?php if ($has_lv2): ?>
											<button type="button" class="menu-toggle"><?= esc_html($title); ?></button>
										<?php else: ?>
											<a class="link" href="<?= esc_url("$base_url/$slug"); ?>"><?= esc_html($title); ?></a>
										<?php endif; ?>
										<?php if ($has_lv2): ?>
											<img class="arrow-custom-menu" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/arrow-custom-menu.svg"
												alt="arrow-custom-menu">
										<?php endif; ?>

									</div>
								</li>

								<?php if ($has_lv2 || $description): ?>
									<div class="menu-item-2" data-menu-id="<?= esc_attr($slug); ?>" style="display:none">
										<div class="menu-item-2-content">
											<?php if ($description): ?>
												<div class="menu-description">
													<div class="title">
														<?= esc_html($title); ?>
													</div>
													<div class="subtitle">
														<?= esc_html($description); ?>

													</div>

													<div class="read-more">
														<a href="<?= esc_url("$base_url/$slug"); ?>">Đọc thêm</a>
													</div>
													<div class="call-btn">
														<a href="tel:1900 55 88 82" class="custom-call-btn">
															<img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/phone-icon-blue.svg"
																alt="icon-phone">
															<span class="phone-number">1900 55 88 82</span>
														</a>
													</div>
												</div>
											<?php endif; ?>

											<?php if ($has_lv2): ?>
												<ul class="submenu">
													<?php foreach ($children_lv2 as $row2): ?>
														<?php
														$title2 = $row2['title'];
														$slug2 = trim($row2['slug'], '/');
														$children_lv3 = $row2['children'];
														$has_lv3 = is_array($children_lv3) && count($children_lv3) > 0;
														?>
														<li class="submenu-item">
															<?php if ($has_lv3): ?>
																<div style="display: flex; align-items: center;justify-content: space-between;">
																	<button type="button" class="menu-toggle"><?= esc_html($title2); ?></button> <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/arrow-right.svg"
																		alt="arrow-right">
																</div>
															<?php else: ?>
																<a href="<?= esc_url("$base_url/$slug2"); ?>"><?= esc_html($title2); ?></a>
															<?php endif; ?>

															<?php if ($has_lv3): ?>
																<ul class="submenu-lv3">
																	<?php foreach ($children_lv3 as $row3): ?>
																		<?php
																		$title3 = $row3['title'];
																		$slug3 = trim($row3['slug'], '/');
																		?>
																		<li><a href="<?= esc_url("$base_url/$slug3"); ?>"><?= esc_html($title3); ?></a></li>
																	<?php endforeach; ?>
																</ul>
															<?php endif; ?>
														</li>
													<?php endforeach; ?>
												</ul>
											<?php endif; ?>
										</div>
									</div>
								<?php endif; ?>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
					<?php $lang = pll_current_language('slug'); ?>

					<a href="javascript:;"
						class="header__book font-size-16 font-weight-bold book-calendar btn-box-shadow btn-h50 btn-i-lg-12 text-uppercase">
						<?php if ($lang === 'vi') : ?>
							ĐẶT LỊCH
						<?php else : ?>
							BOOK APPOINTMENT
						<?php endif; ?>
						<img class="arrow-custom-menu" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/arrow-custom-menu.svg" alt="arrow-custom-menu">
					</a>
					<button id="msi-mobile-menu-btn" aria-label="Toggle menu" aria-expanded="false" aria-controls="msi-mobile-menu">
						<div class="header__icon__menu d-lg-none icon-menu-mobile">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</button>

				</div>
			</div>
			<?php
			$base_url = site_url();
			$menu_items = get_field('menu_items', pll_current_language('slug'));

			if ($menu_items): ?>
				<div id="msi-mobile-menu-wrapper">

					<!-- <button id="msi-mobile-menu-btn" aria-label="Toggle menu" aria-expanded="false" aria-controls="msi-mobile-menu">
								<span class="msi-mobile-hamburger"></span>
							</button> -->

					<nav id="msi-mobile-menu" class="msi-mobile-menu" aria-hidden="true">
						<?php msi_mobile_render_menu($menu_items, $base_url); ?>
					</nav>

				</div>
			<?php endif; ?>
			<!-- <div class="msi-mega-menu-container">
				<div class="display-flex-center justify-content-between bg-f9 msi-mega-menu">
					<div class="overlay-mobile"></div>
					<div class="msi-choices">
						MSI Choices
					</div>
					<div></div>
					<div class="header__nav only-desktop">
						<?php

						$args = array(
							'theme_location' => 'mega_menu',
							'depth' => 0,
							'container' => '',
							'menu_class'  => 'primary-menu',
							'walker'  => new WP_Bootstrap_Mega_Navwalker()
						);
						wp_nav_menu($args);
						?>
					</div>
					<a href="javascript:;"
						class="dat-lich-btn">

						<span class="header__book-text">
							<?php echo get_field('book_an_appointment', pll_current_language('slug')); ?>
						</span>
					</a>

				</div>
			</div> -->
			<!-- <div class="header__menu__mobile">

			
			</div> -->
			<!-- <div class="header__icon__menu d-lg-none icon-menu-mobile">
				<span></span>
				<span></span>
				<span></span>
			</div> -->
	</div>
	</header>



	<!-- tạm ẩn background đầu trang -->