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
	wp_enqueue_style('swiper-css',  get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0');
	wp_enqueue_style('slick-theme-css',  get_template_directory_uri() . '/assets/css/slick-theme.min.css', array(), '1.0');
	wp_enqueue_style('msi-theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0');
	wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme.min.css', array(), '1.0');
	// wp_enqueue_style('Owl-Carousel-css',  get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4');
    // wp_enqueue_style('Owl-Carousel-theme-css',  get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '2.3.4');

	// JS
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.5.1', true);
	wp_enqueue_script('popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
	// wp_enqueue_script('Owl-Carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '2.3.4', true);
	//wp_enqueue_script('moment-js', get_template_directory_uri() . '/assets/js/moment.min.js', array(), '1.0', true);
	wp_enqueue_script('bootstrap-datetimepicker-js', get_template_directory_uri() . '/assets/js/bootstrap-datetimepicker.min.js', array(), '4.17.47', true);
	wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0', true);
	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '1.0', true);
	wp_enqueue_script('menu-js', get_template_directory_uri() . '/assets/js/menu.js', array(), '1.0', true);
	wp_enqueue_script('common-js', get_template_directory_uri() . '/assets/js/common.js', array(), '1.0', true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
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



add_action( 'wp_head', 'add_canonical');
function add_canonical() {
    if( is_category() ) {
        $cat = get_query_var( 'cat' );
        $link = get_category_link($cat);
        echo '<meta name="canonical" content="' . $link . '" />' . "\n";

        if ( empty( $query ) )
	    {
	        $query = $GLOBALS['wp_query'];
	    }

	    if ( empty( $query->max_num_pages ) || ! is_numeric( $query->max_num_pages ) || $query->max_num_pages < 2 )
	    {
	    } else {

		    $paged = get_query_var( 'paged' );
		    $paged = $paged ? intval( $paged ) : 1;

		    $pageds = $paged + 1;
		    $pagedss = $paged - 1;

		    $pagenum_link = html_entity_decode( get_pagenum_link() );
		    $query_args   = array();
		    $url_parts    = explode( '?', $pagenum_link );

		    if ( isset( $url_parts[1] ) )
		    {
		        wp_parse_str( $url_parts[1], $query_args );
		    }

		    $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
		    $pagenum_links = trailingslashit( $pagenum_link ) . 'page/' . $pageds;
		    $pagenum_linkss = trailingslashit( $pagenum_link ) . 'page/' . $pagedss;

	        echo '<link rel="next" href="' . $pagenum_links . '" />' . "\n";

	        if($paged > 1) {
	        	echo '<link rel="prev" href="' . $pagenum_linkss . '" />' . "\n";
	        }
	    }
    } else {
        $link = get_permalink();
        echo '<meta name="canonical" content="' . $link . '" />' . "\n";
    }
}

/**
 * Prints posts pagination based on query
 *
 * @param  WP_Query $query     Custom query, if left blank, this will use global query ( current query )
 * @return void
 */
function k2_kinhdo_posts_pagination( $query = null )
{
    $classes = array();

    if ( empty( $query ) )
    {
        $query = $GLOBALS['wp_query'];
    }

    if ( empty( $query->max_num_pages ) || ! is_numeric( $query->max_num_pages ) || $query->max_num_pages < 2 )
    {
        return;
    }

    $paged = get_query_var( 'paged' );

    if ( ! $paged && is_front_page() && ! is_home() )
    {
        $paged = get_query_var( 'page' );
    }

    $paged = $paged ? intval( $paged ) : 1;

    $pagenum_link = html_entity_decode( get_pagenum_link() );
    $query_args   = array();
    $url_parts    = explode( '?', $pagenum_link );

    if ( isset( $url_parts[1] ) )
    {
        wp_parse_str( $url_parts[1], $query_args );
    }

    $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
    $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

    // Set up paginated links.
    $links = paginate_links( array(
        'base'     => $pagenum_link,
        'total'    => $query->max_num_pages,
        'current'  => $paged,
        'mid_size' => 1,
        'add_args' => array_map( 'urlencode', $query_args ),
        'prev_text' => '<i class="fa fa-angle-left"></i> Previous',
        'next_text' => 'Next <i class="fa fa-angle-right"></i>',
    ) );

    ?>
    <nav class="k2-pagination">
        <div class="pagination loop-pagination">
            <?php echo wp_kses_post($links); ?>
        </div><!-- .pagination -->
    </nav>
    <?php
}


add_action('init', 'init', 9);

/**
 * init hook - 0
 */
function init()
{
    $taxonomies = array();
    $post_types = array();

    $taxonomies = apply_filters('extra_taxonomies', array(
        'portfolio-category' => array(
            'status'     => false,
            'post_type'  => array('portfolio'),
            'taxonomy'   => esc_html__('Category', 'nongduoc'),
            'taxonomies' => esc_html__('Categories', 'nongduoc'),
            'args'       => array(),
            'labels'     => array()
        ),
    ));
    foreach ($taxonomies as $key => $cms_taxonomy) {
        if ($cms_taxonomy['status'] === true) {
            $categories = array_merge(array(
                'hierarchical'  => true,
                'show_tagcloud' => true,
                'labels'        => array_merge(array(
                    'name'              => $cms_taxonomy['taxonomies'],
                    'singular_name'     => $cms_taxonomy['taxonomy'],
                    'edit_item'         => esc_html__('Edit', 'nongduoc') . ' ' . $cms_taxonomy['taxonomy'],
                    'update_item'       => esc_html__('Update', 'nongduoc') . ' ' . $cms_taxonomy['taxonomy'],
                    'add_new_item'      => esc_html__('Add New', 'nongduoc') . ' ' . $cms_taxonomy['taxonomy'],
                    'new_item_name'     => esc_html__('New Type', 'nongduoc') . ' ' . $cms_taxonomy['taxonomy'],
                    'all_items'         => esc_html__('All', 'nongduoc') . ' ' . $cms_taxonomy['taxonomies'],
                    'search_items'      => esc_html__('Search', 'nongduoc') . ' ' . $cms_taxonomy['taxonomy'],
                    'parent_item'       => esc_html__('Parent', 'nongduoc') . ' ' . $cms_taxonomy['taxonomy'],
                    'parent_item_colon' => esc_html__('Parent', 'nongduoc') . ' ' . $cms_taxonomy['taxonomy'] . ':',
                ), $cms_taxonomy['labels']),
                'show_in_menu'  => true
            ), $cms_taxonomy['args']);

            register_taxonomy($key, $cms_taxonomy['post_type'], $categories);
        }
    }

    $post_types = apply_filters('extra_post_types', array(
        'portfolio' => array()
    ));
    $post_types['portfolio'] = array_merge(
        array(
            'status'     => false,
            'item_name'  => __('Portfolio', 'nongduoc'),
            'items_name' => __('Portfolios', 'nongduoc'),
            'args'       => array(),
            'labels'     => array(
                'singular_name' => __('Portfolio', 'nongduoc'),
                'add_new'       => _x('Add New', 'add new on admin panel', 'nongduoc'),
            )
        ), $post_types['portfolio']
    );
    foreach ($post_types as $key => $cms_post_type) {
        if ($cms_post_type['status'] === true):
            $cms_post_type_args = !empty($cms_post_type['args']) ? $cms_post_type['args'] : array();
            $cms_post_type_labels = !empty($cms_post_type['labels']) ? $cms_post_type['labels'] : array();
            $args = array_merge(array(
                'labels'              => array_merge(array(
                    'name'                  => $cms_post_type['item_name'],
                    'singular_name'         => $cms_post_type['item_name'],
                    'add_new'               => _x('Add New', 'add new on admin panel', 'nongduoc'),
                    'add_new_item'          => __('Add New', 'nongduoc') . ' ' . $cms_post_type['item_name'],
                    'edit_item'             => __('Edit', 'nongduoc') . ' ' . $cms_post_type['item_name'],
                    'new_item'              => __('New', 'nongduoc') . ' ' . $cms_post_type['item_name'],
                    'view_item'             => __('View', 'nongduoc') . ' ' . $cms_post_type['item_name'],
                    'view_items'            => __('View', 'nongduoc') . ' ' . $cms_post_type['items_name'],
                    'search_items'          => __('Search', 'nongduoc') . ' ' . $cms_post_type['items_name'],
                    'not_found'             => __('No', 'nongduoc') . ' ' . $cms_post_type['items_name'] . ' ' . __('Found', 'nongduoc'),
                    'not_found_in_trash'    => __('No', 'nongduoc') . ' ' . $cms_post_type['items_name'] . ' ' . __('Found in Trash', 'nongduoc'),
                    'parent_item_colon'     => __('Parent', 'nongduoc') . ' ' . $cms_post_type['item_name'] . ':',
                    'all_items'             => __('All', 'nongduoc') . ' ' . $cms_post_type['items_name'],
                    'archives'              => $cms_post_type['item_name'] . ' ' . __('Archives', 'nongduoc'),
                    'attributes'            => $cms_post_type['item_name'] . ' ' . __('Entry Attributes', 'nongduoc'),
                    'uploaded_to_this_item' => __('Uploaded to this', 'nongduoc') . ' ' . $cms_post_type['item_name'],
                    'menu_name'             => $cms_post_type['item_name'],
                    'filter_items_list'     => __('Filter', 'nongduoc') . ' ' . $cms_post_type['item_name'] . ' ' . __('list', 'nongduoc'),
                    'items_list_navigation' => $cms_post_type['item_name'] . ' ' . __('list navigation', 'nongduoc'),
                    'items_list'            => $cms_post_type['item_name'] . ' ' . __('list', 'nongduoc'),
                    'name_admin_bar'        => $cms_post_type['item_name']
                ), $cms_post_type_labels),
                'hierarchical'        => false,
                'description'         => '',
                'public'              => true,
                'show_ui'             => true,
                'show_in_menu'        => true,
                'show_in_admin_bar'   => true,
                'menu_position'       => null,
                'menu_icon'           => 'dashicons-portfolio',
                'show_in_nav_menus'   => true,
                'publicly_queryable'  => true,
                'exclude_from_search' => false,
                'has_archive'         => true,
                'query_var'           => true,
                'can_export'          => true,
                'capability_type'     => 'post',
                'supports'            => array(
                    'title',
                    'editor',
                    'thumbnail',
                    'excerpt',
                    'revisions'
                )
            ), $cms_post_type_args);
            register_post_type($key, $args);
            flush_rewrite_rules();
        endif;
    }
}

/**
 * Example for create Teams Post Type
 */
add_filter('extra_post_types', 'k2_kinhdo_add_product');

function k2_kinhdo_add_product($postypes)
{   
    $item_name = esc_html__('Teams', 'k2_kinhdo');
    $items_name = esc_html__('Teams', 'k2_kinhdo');

    $postypes['sha-teams'] = array(
        'status'     => true,//require
        'item_name'  => esc_html__('Teams', 'k2_kinhdo'),//require
        'items_name' => esc_html__('Teams', 'k2_kinhdo'),//require
        'args'       => array(
            'hierarchical'        => false,
            'description'         => '',
            'public'              => true, //if is false, require "publicly_queryable": false
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => null,
            'menu_icon'           => 'dashicons-layout',
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => false,
            'query_var'           => true,
            'can_export'          => true,
            'capability_type'     => 'post',
            'rewrite'             => array(
                'slug' => 'doi-ngu',
                'with_front' => false,
            ),
            'supports'            => array(
                'title',
                'thumbnail',
                'editor',
            )
        ),//option

        'labels'     => array(
            'name'                  => $item_name,
            'singular_name'         => $item_name,
            'add_new'               => esc_html__('Add New', 'k2_kinhdo'),
            'add_new_item'          => esc_html__('Add New', 'k2_kinhdo') . ' ' . $item_name,
            'edit_item'             => esc_html__('Edit', 'k2_kinhdo') . ' ' . $item_name,
            'new_item'              => esc_html__('New', 'k2_kinhdo') . ' ' . $item_name,
            'view_item'             => esc_html__('View', 'k2_kinhdo') . ' ' . $item_name,
            'view_items'            => esc_html__('View', 'k2_kinhdo') . ' ' . $items_name,
            'search_items'          => esc_html__('Search', 'k2_kinhdo') . ' ' . $items_name,
            'not_found'             => esc_html__('No', 'k2_kinhdo') . ' ' . $items_name . ' ' . esc_html__('Found', 'k2_kinhdo'),
            'not_found_in_trash'    => esc_html__('No', 'k2_kinhdo') . ' ' . $items_name . ' ' . esc_html__('Found in Trash', 'k2_kinhdo'),
            'parent_item_colon'     => esc_html__('Parent', 'k2_kinhdo') . ' ' . $item_name . ':',
            'all_items'             => esc_html__('All', 'k2_kinhdo') . ' ' . $items_name,
            'archives'              => $items_name . ' ' . esc_html__('Archives', 'k2_kinhdo'),
            'attributes'            => $items_name . ' ' . esc_html__('Entry Attributes', 'k2_kinhdo'),
            'uploaded_to_this_item' => esc_html__('Uploaded to this', 'k2_kinhdo') . ' ' . $items_name,
            'menu_name'             => $items_name,
            'filter_items_list'     => esc_html__('Filter', 'k2_kinhdo') . ' ' . $items_name . ' ' . esc_html__('list', 'k2_kinhdo'),
            'items_list_navigation' => $items_name . ' ' . esc_html__('list navigation', 'k2_kinhdo'),
            'items_list'            => $items_name . ' ' . esc_html__('list', 'k2_kinhdo'),
            'name_admin_bar'        => $items_name
            ) //option
        );

    return $postypes;
}



/**
 * Breadcrumb
 */
function dimox_breadcrumbs() {
    $delimiter = "/";
    $home = 'Trang chủ'; // chữ thay thế cho phần 'Home' link
    $before = '<span class="current">'; // thẻ html đằng trước mỗi link
    $after = '</span>'; // thẻ đằng sau mỗi link
    if ( !is_home() && !is_front_page() || is_paged() ) {
        echo '<div id="crumbs">';
        global $post;
        $homeLink = get_bloginfo('url');
        echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
        if ( is_category() ) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
            echo $before . single_cat_title('', false) . $after;
        } elseif ( is_day() ) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif ( is_month() ) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif ( is_year() ) {
            echo $before . get_the_time('Y') . $after;
        } elseif ( is_single() && !is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
				//var_dump($post_type);
                $slug = $post_type->rewrite;
				$label = $post_type->labels->singular_name;
				$slg = $slug['slug'];
				if($post_type ->name == 'sha-teams') {
					$label = 'Đội ngũ';
					$slg = 'doi-ngu-msi';
				}
                echo '<a href="' . $homeLink . '/' . $slg . '/">' . $label . '</a> ' . $delimiter . ' ';
                echo $before . get_the_title() . $after;
            } else {
                $cat = get_the_category(); $cat = $cat[0];
                echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                echo $before . get_the_title() . $after;
            }
        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif ( is_attachment() ) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID); $cat = $cat[0];
            echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } elseif ( is_page() && !$post->post_parent ) {
            echo $before . get_the_title() . $after;
        } elseif ( is_page() && $post->post_parent ) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } elseif ( is_search() ) {
            echo $before . 'Search results for "' . get_search_query() . '"' . $after;
        } elseif ( is_tag() ) {
            echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
        } elseif ( is_author() ) {
            global $author;
            echo $before . 'Articles posted by ' . $userdata->display_name . $after;
        } elseif ( is_404() ) {
            echo $before . 'Error 404' . $after;
        }
        if ( get_query_var('paged') ) {
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
            echo __('Page') . ' ' . get_query_var('paged');
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
        }
        echo '</div>';
    }
} // end dimox_breadcrumbs()


/**
 * Get page title and description.
 *
 * @return array Contains 'title' and 'desc'
 */
function k2_kinhdo_get_page_titles()
{
    $title = $desc = '';

    // Default titles
    if (!is_archive()) {
        // Posts page view
        if (is_home()) {
            // Only available if posts page is set.
            if (!is_front_page() && $page_for_posts = get_option('page_for_posts')) {
                $title = get_the_title($page_for_posts);
            }
        } // Single page view
        elseif (is_page()) {
            
            $otp_check = get_post_meta(get_the_ID(), 'page_title_op_on', true);

            if( !empty( $otp_check ) ) {

                $title = get_post_meta(get_the_ID(), 'custom_title', true);
            } else {

                $title = '';
            }

            if ( ! $title ) {
                $title = get_the_title();
            }
        } // 404
        elseif (is_404()) {
            $title = esc_html__('404', 'k2_kinhdo');
        } // Search result
        elseif (is_search()) {
            $title = esc_html__('Tìm Kiếm: ', 'k2_kinhdo') . ' "'. get_search_query(). '" ';
        }
        else {
            $title = get_the_title();
        }
    } else {
        $title = single_cat_title( '', false );
    }

    if( is_single() ) {
        $title = get_the_title();
    }

    return array(
        'title' => $title,
        'desc'  => $desc
    );
}



add_filter('use_block_editor_for_post', '__return_false');
add_filter('gutenberg_can_edit_post_type', '__return_false');

/* ---------------------------------------------------------------------------
 * COMMENTS
 * --------------------------------------------------------------------------- */
// Giao diện comment
function windpro_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    //$rating = get_comment_meta( get_comment_ID(), 'rating', true );
    //$width_rating = ($rating / 5)*100;
    ?>
    <li class="item-content" id="li-comment-<?php comment_ID() ?>">
    <div id="comment-<?php comment_ID(); ?> "  class="item-contents">
        <div class="comment-author_information">
        <div class="comment-avatar"><?php echo get_avatar($comment,60)?></div>
            <div class="comment-author vcard">
                <div class="comment-meta commentmetadata">
                    <?php printf(__('<span class="comment-author_name">%s</span>'), get_comment_author_link()) ?>
                </div>
            </div>
        </div>
        <div class="comment-box">
            <?php if ($comment->comment_approved == '0') : ?>
            <em><?php _e('Your comment is awaiting moderation.','vlive') ?></em>
            <?php endif; ?>
            <?php comment_text() ?>
            <div class="reply">
                <?php if (is_single()) { if ( !is_user_logged_in()) :  ?>
                <a href="<?php echo get_option('home'); ?>/wp-login.php?action=register"><i class="zmdi zmdi-mail-reply-all"></i> <?php _e('Log in to Reply', 'vlive'); ?></a>
                <?php else : ?>
                <?php comment_reply_link(array_merge( $args, array('reply_text' => __(('Reply'), 'vlive'), 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                <?php endif; } ?> 
            </div>
        </div>
    </div>
<?php
}