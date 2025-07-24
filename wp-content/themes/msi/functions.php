<?php

/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if (!function_exists('twentynineteen_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('twentynineteen', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1568, 9999);

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __('Primary', 'twentynineteen'),
				'footer' => __('Footer Menu', 'twentynineteen'),
				'social' => __('Social Links Menu', 'twentynineteen'),
				'mega_menu' => __('Mega Menu', 'twentynineteen'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5'
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		// add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		// add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		// add_theme_support( 'align-wide' );

		// Add support for editor styles.
		// add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		// add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		// add_theme_support(
		// 	'editor-font-sizes',
		// 	array(
		// 		array(
		// 			'name'      => __( 'Small', 'twentynineteen' ),
		// 			'shortName' => __( 'S', 'twentynineteen' ),
		// 			'size'      => 19.5,
		// 			'slug'      => 'small',
		// 		),
		// 		array(
		// 			'name'      => __( 'Normal', 'twentynineteen' ),
		// 			'shortName' => __( 'M', 'twentynineteen' ),
		// 			'size'      => 22,
		// 			'slug'      => 'normal',
		// 		),
		// 		array(
		// 			'name'      => __( 'Large', 'twentynineteen' ),
		// 			'shortName' => __( 'L', 'twentynineteen' ),
		// 			'size'      => 36.5,
		// 			'slug'      => 'large',
		// 		),
		// 		array(
		// 			'name'      => __( 'Huge', 'twentynineteen' ),
		// 			'shortName' => __( 'XL', 'twentynineteen' ),
		// 			'size'      => 49.5,
		// 			'slug'      => 'huge',
		// 		),
		// 	)
		// );

		// Editor color palette.
		// add_theme_support(
		// 	'editor-color-palette',
		// 	array(
		// 		array(
		// 			'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Blue', 'twentynineteen' ) : null,
		// 			'slug'  => 'primary',
		// 			'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
		// 		),
		// 		array(
		// 			'name'  => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Dark Blue', 'twentynineteen' ) : null,
		// 			'slug'  => 'secondary',
		// 			'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
		// 		),
		// 		array(
		// 			'name'  => __( 'Dark Gray', 'twentynineteen' ),
		// 			'slug'  => 'dark-gray',
		// 			'color' => '#111',
		// 		),
		// 		array(
		// 			'name'  => __( 'Light Gray', 'twentynineteen' ),
		// 			'slug'  => 'light-gray',
		// 			'color' => '#767676',
		// 		),
		// 		array(
		// 			'name'  => __( 'White', 'twentynineteen' ),
		// 			'slug'  => 'white',
		// 			'color' => '#FFF',
		// 		),
		// 	)
		// );

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');
	}
endif;
add_action('after_setup_theme', 'twentynineteen_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init()
{

	register_sidebar(
		array(
			'name'          => __('Footer', 'twentynineteen'),
			'id'            => 'sidebar-1',
			'description'   => __('Add widgets here to appear in your footer.', 'twentynineteen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __('Right sidebar', 'twentynineteen'),
			'id'            => 'sidebar-2',
			'description'   => __('Add widgets here to appear in your footer.', 'twentynineteen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	//register MegaMenu widget if the Mega Menu is set as the menu location
	$location = 'mega_menu';
	$css_class = 'mega-menu-parent';
	$locations = get_nav_menu_locations();



	if (isset($locations[$location])) {

		$menu = get_term($locations[$location], 'nav_menu');

		if (!empty($menu)) {
			if ($items = wp_get_nav_menu_items($menu->name)) {

				foreach ($items as $item) {

					if (in_array($css_class, $item->classes)) {
						register_sidebar(
							array(
								'id'   => 'mega-menu-item-' . $item->ID,
								'description' => 'Mega Menu items',
								'name' => $item->title . ' - Mega Menu',
								'before_widget' => '<div id="%1$s" class="">',
								'after_widget' => '</div>',
							)
						);
					}
				}
			}
		}
	}
}
add_action('widgets_init', 'twentynineteen_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts()
{
	// CSS
	wp_enqueue_style('twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
	wp_enqueue_style('bootstrap-css',  get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3');
	wp_enqueue_style('bootstrap-datetimepicker-css',  get_template_directory_uri() . '/assets/css/bootstrap-datetimepicker.min.css', array(), '4.17.47');
	wp_enqueue_style('slick-css',  get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0');
	wp_enqueue_style('slick-theme-css',  get_template_directory_uri() . '/assets/css/slick-theme.min.css', array(), '1.0');
	wp_enqueue_style('msi-theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0');
	wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
	// wp_enqueue_style('Owl-Carousel-css',  get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4');
    // wp_enqueue_style('Owl-Carousel-theme-css',  get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '2.3.4');

	// JS
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.5.1', true);
	wp_enqueue_script('popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
	// wp_enqueue_script('Owl-Carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '2.3.4', true);
	wp_enqueue_script('moment-js', get_template_directory_uri() . '/assets/js/moment.min.js', array(), '1.0', true);
	wp_enqueue_script('bootstrap-datetimepicker-js', get_template_directory_uri() . '/assets/js/bootstrap-datetimepicker.min.js', array(), '4.17.47', true);
	wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0', true);
	wp_enqueue_script('menu-js', get_template_directory_uri() . '/assets/js/menu.js', array(), '1.0', true);
	wp_enqueue_script('common-js', get_template_directory_uri() . '/assets/js/common.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'twentynineteen_scripts');

require get_template_directory() . '/inc/init.php';
require get_template_directory() . '/inc/post-type.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/wp-bootstrap-mega-navwalker.php';

function register_my_widgets()
{
	register_sidebar(array(
		'name' => 'test-widget',
		'id' => 'test-widget',
		'description' => __('Widgets in this area will be shown on all posts and pages.', 'theme-slug'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
	register_widget('My_Text_Widget');
}

class My_Text_Widget extends WP_Widget_Text
{
	function widget($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
		$text = apply_filters('widget_text', empty($instance['text']) ? '' : $instance['text'], $instance);
		echo $before_widget;
		if (!empty($title)) {
			echo $before_title . $title . $after_title;
		} ?>
		<?php echo !empty($instance['filter']) ? wpautop($text) : $text; ?>
<?php
		echo $after_widget;
	}
}

add_filter('get_the_archive_title', function ($title) {
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_tax()) {
		$title = sprintf(__('%1$s'), single_term_title('', false));
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	}
	return $title;
});


if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Theme Settings(' . pll_current_language('slug') . ')',
		'menu_slug' 	=> 'theme-general-settings-' . pll_current_language('slug'),
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Header (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home Page Banner Settings (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Home page Banner (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home Page Settings (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Home page Settings (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Bạn đã sẵn sàng (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Bạn đã sẵn sàng (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Phản hồi của khách hàng (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Phản hồi của khách hàng (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Gói khám dịch vụ (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Gói khám dịch vụ (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Đặt Lịch Khám (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Đặt Lịch Khám (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Gói khám dịch vụ (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Gói khám dịch vụ (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Tại Sao Nên Chọn MSI (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Tại Sao Nên Chọn MSI (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'MSI Gallery (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'MSI Gallery (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Clinic Address Setting (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Clinic address (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Partner logo Setting (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Partner logo Setting (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Right sidebar (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Right sidebar (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings (' . pll_current_language('slug') . ')',
		'menu_title'	=> 'Footer (' . pll_current_language('slug') . ')',
		'post_id' => pll_current_language('slug'),
		'parent_slug'	=> 'theme-general-settings-' . pll_current_language('slug'),
	));
}

if(!function_exists('print_data')) {
    function print_data($array_data) {
        print("<pre>".print_r($array_data,true)."</pre>");
    }
}

function just_add_cors_http_header($headers){

    $headers['Access-Control-Allow-Origin'] = '*';

    return $headers;

}

add_action('wp_headers','just_add_cors_http_header');
 
add_filter( 'allowed_http_origins', 'add_allowed_origins' );
function add_allowed_origins( $origins ) {
    $origins[] = 'http://api.mobilesms.vn:8608';
    return $origins;
}

function on_submit( $form, &$abort, $submission )
{
    if ( $abort === TRUE || $form->ID() !== 2587 ) {
        return;
    }

	$errMsg = '';

	$dataSend = array();

    $data = $submission->get_posted_data();

    $phoneNumber = strval($data['text-250']);
    $cities = sanitize_text_field($data['cities'][0]);
	$voucherCode = '';
	switch($data['cities'][0]){
		case 'Hà Nội':
			$voucherCode = 'RP-HN.01';
			break;
		case 'Bình Dương':
			$voucherCode = 'RP-BD.01';
			break;
		case 'Đồng Nai':
			$voucherCode = 'RP-DN.01';
			break;
		default:
		$voucherCode = '';
	}

	$DR_username = 'drmarie';
	$DR_password = 'Drmarie@2021!@#';
	$DR_transId = 'DrmarieWebForm'.current_time('timestamp');
	$DR_primary_key = 'Wx9ZfqkPDKkQfyLq';
	$signature = 'drmarieDrmarie@2021!@#'.$phoneNumber.$DR_transId.$DR_primary_key;
	$DR_signature = md5($signature);

	$DR_telco = '';
	$telco_number = substr($phoneNumber, 0, 3);
	$telco_VTE = array('086', '096', '097', '098', '032', '033', '034', '035', '036', '037', '038', '039');
	$telco_VNP = array('088', '091', '094', '083', '084', '085', '081', '082');
	$telco_VMS = array('089', '090', '093', '070', '079', '077', '076', '078');
	if(in_array($telco_number, $telco_VTE)){
		$DR_telco = 'VTE';
	} elseif(in_array($telco_number, $telco_VNP)){
		$DR_telco = 'VNP';
	} elseif(in_array($telco_number, $telco_VMS)){
		$DR_telco = 'VMS';
	} else{
		$DR_telco = 'VTE';
	}

	// $dataSend['request_id'] = "DR.MARIE";
	$dataSend['username'] = "drmarie";
	$dataSend['password'] = "Drmarie@2021!@#";
	$dataSend['serviceId'] = "DR.MARIE";
	$dataSend['receiver'] = $phoneNumber;
	$dataSend['content'] = "Ma coupon uu dai dich vu cua ban la " . $voucherCode . " Vui long luu tin nhan nay va toi PK Dr.Marie de nhan dich vu hoac LH tong dai dat hen 1900558882 (cp 1000d/phut)";
	$dataSend['isUnicode'] = 0;
	$dataSend['transId'] = $DR_transId;
	$dataSend['signature'] = $DR_signature;
	$dataSend['telco'] = $DR_telco;
	// var_dump($dataSend); die;
	$json_data = json_encode($dataSend);

  
    $url =  "http://api.mobilesms.vn:8608/api/sendSMS";

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://api.mobilesms.vn:8608/api/sendSMS',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>$json_data,
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
      ),
    ));
    $response = curl_exec($curl);

    curl_close($curl);

 }
 
add_action('wpcf7_before_send_mail', 'on_submit', 10, 3);