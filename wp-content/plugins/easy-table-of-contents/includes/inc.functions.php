<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Get the current post's TOC list or supplied post's TOC list.
 *
 * @access public
 * @since  2.0
 *
 * @param int|null|WP_Post $post                 An instance of WP_Post or post ID. Defaults to current post.
 * @param bool             $apply_content_filter Whether or not to apply `the_content` filter when processing post for headings.
 *
 * @return string
 */
function get_ez_toc_list( $post = null, $apply_content_filter = true ) {

	if ( ! $post instanceof WP_Post ) {

		$post = get_post( $post );
	}

	if ( $apply_content_filter ) {

		$ezPost = new ezTOC_Post( $post );

	} else {

		$ezPost = new ezTOC_Post( $post, false );
	}

	return $ezPost->getTOCList();
}

/**
 * Display the current post's TOC list or supplied post's TOC list.
 *
 * @access public
 * @since  2.0
 *
 * @param null|WP_Post $post                 An instance of WP_Post
 * @param bool         $apply_content_filter Whether or not to apply `the_content` filter when processing post for headings.
 */
function ez_toc_list( $post = null, $apply_content_filter = true ) {

	echo get_ez_toc_list( $post, $apply_content_filter );
}

/**
 * Get the current post's TOC content block or supplied post's TOC content block.
 *
 * @access public
 * @since  2.0
 *
 * @param int|null|WP_Post $post                 An instance of WP_Post or post ID. Defaults to current post.
 * @param bool             $apply_content_filter Whether or not to apply `the_content` filter when processing post for headings.
 *
 * @return string
 */
function get_ez_toc_block( $post = null, $apply_content_filter = true ) {

	if ( ! $post instanceof WP_Post ) {

		$post = get_post( $post );
	}

	if ( $apply_content_filter ) {

		$ezPost = new ezTOC_Post( $post );

	} else {

		$ezPost = new ezTOC_Post( $post, false );
	}

	return $ezPost->getTOC();
}

/**
 * Display the current post's TOC content or supplied post's TOC content.
 *
 * @access public
 * @since  2.0
 *
 * @param null|WP_Post $post                 An instance of WP_Post
 * @param bool         $apply_content_filter Whether or not to apply `the_content` filter when processing post for headings.
 */
function ez_toc_block( $post = null, $apply_content_filter = true ) {

	echo get_ez_toc_block( $post, $apply_content_filter );
}

function ez_toc_inline_styles(){
    echo "<style>@font-face{font-display:swap;font-family:ez-toc-icomoon;src:url('".EZ_TOC_URL."vendor/icomoon/fonts/ez-toc-icomoon.eot');src:url('".EZ_TOC_URL."vendor/icomoon/fonts/ez-toc-icomoon.eot?#iefix') format('embedded-opentype'),url('".EZ_TOC_URL."vendor/icomoon/fonts/ez-toc-icomoon.woff2') format('woff2'),url('".EZ_TOC_URL."vendor/icomoon/fonts/ez-toc-icomoon.woff') format('woff'),url('".EZ_TOC_URL."vendor/icomoon/fonts/ez-toc-icomoon.ttf') format('truetype'),url('".EZ_TOC_URL."vendor/icomoon/fonts/ez-toc-icomoon.svg#ez-toc-icomoon') format('svg');font-weight:400;font-style:normal}#ez-toc-container {background: #F9F9F9;border: 1px solid #AAAAAA;border-radius: 4px;-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);display: table;margin-bottom: 1em;padding: 10px;position: relative;width: auto;}div.ez-toc-widget-container {padding: 0;position: relative;}#ez-toc-container.ez-toc-light-blue {background: #EDF6FF;}#ez-toc-container.ez-toc-white {background: #FFFFFF;}#ez-toc-container.ez-toc-black {background: #000000;}#ez-toc-container.ez-toc-transparent {background: none transparent;}div.ez-toc-widget-container ul {display: block;}div.ez-toc-widget-container li {border: none;padding: 0;}div.ez-toc-widget-container ul.ez-toc-list {padding: 10px;}#ez-toc-container ul ul, .ez-toc div.ez-toc-widget-container ul ul {margin-left: 1.5em;}#ez-toc-container ul, #ez-toc-container li {margin: 0;padding: 0;}#ez-toc-container ul, #ez-toc-container li, #ez-toc-container ul li, div.ez-toc-widget-container, div.ez-toc-widget-container li {background: none;list-style: none none;line-height: 1.6;margin: 0;overflow: hidden;z-index: 1;}#ez-toc-container p.ez-toc-title {text-align: left;line-height: 1.45;margin: 0;padding: 0;}.ez-toc-title-container {display: table;width: 100%;}.ez-toc-title, .ez-toc-title-toggle {display: table-cell;text-align: left;vertical-align: middle;}#ez-toc-container.ez-toc-black p.ez-toc-title {color: #FFF;}#ez-toc-container div.ez-toc-title-container + ul.ez-toc-list {margin-top: 1em;}.ez-toc-wrap-left {float: left;margin-right: 10px;}.ez-toc-wrap-right {float: right;margin-left: 10px;}#ez-toc-container a {color: #444444;box-shadow: none;text-decoration: none;text-shadow: none;}#ez-toc-container a:visited {color: #9f9f9f;}#ez-toc-container a:hover {text-decoration: underline;}#ez-toc-container.ez-toc-black a {color: #FFF;}#ez-toc-container.ez-toc-black a:visited {color: #FFF;}#ez-toc-container a.ez-toc-toggle {color: #444444;}#ez-toc-container.counter-hierarchy ul, .ez-toc-widget-container.counter-hierarchy ul, #ez-toc-container.counter-flat ul, .ez-toc-widget-container.counter-flat ul {counter-reset: item;}#ez-toc-container.counter-numeric li, .ez-toc-widget-container.counter-numeric li {list-style-type: decimal;list-style-position: inside;}#ez-toc-container.counter-decimal ul.ez-toc-list li a::before, .ez-toc-widget-container.counter-decimal ul.ez-toc-list li a::before {content: counters(item, ".") ". ";display: inline-block;counter-increment: item;margin-right: .2em;}#ez-toc-container.counter-roman li a::before, .ez-toc-widget-container.counter-roman ul.ez-toc-list li a::before {content: counters(item, ".", upper-roman) ". ";counter-increment: item;}.ez-toc-widget-container ul.ez-toc-list li::before {content: ' ';position: absolute;left: 0;right: 0;height: 30px;line-height: 30px;z-index: -1;}.ez-toc-widget-container ul.ez-toc-list li.active::before {background-color: #EDEDED;}.ez-toc-widget-container li.active > a {font-weight: 900;}.ez-toc-btn {display: inline-block;padding: 6px 12px;margin-bottom: 0;font-size: 14px;font-weight: normal;line-height: 1.428571429;text-align: center;white-space: nowrap;vertical-align: middle;cursor: pointer;background-image: none;border: 1px solid transparent;border-radius: 4px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;-o-user-select: none;user-select: none }.ez-toc-btn:focus {outline: thin dotted #333;outline: 5px auto -webkit-focus-ring-color;outline-offset: -2px }.ez-toc-btn:hover,.ez-toc-btn:focus {color: #333;text-decoration: none }.ez-toc-btn:active,.ez-toc-btn.active {background-image: none;outline: 0;-webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,0.125);box-shadow: inset 0 3px 5px rgba(0,0,0,0.125) }.ez-toc-btn-default {color: #333;background-color: #fff;border-color: #ccc }.ez-toc-btn-default:hover,.ez-toc-btn-default:focus,.ez-toc-btn-default:active,.ez-toc-btn-default.active {color: #333;background-color: #ebebeb;border-color: #adadad }.ez-toc-btn-default:active,.ez-toc-btn-default.active {background-image: none }.ez-toc-btn-sm,.ez-toc-btn-xs {padding: 5px 10px;font-size: 12px;line-height: 1.5;border-radius: 3px }.ez-toc-btn-xs {padding: 1px 5px }.ez-toc-btn-default {text-shadow: 0 -1px 0 rgba(0,0,0,0.2);-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075);box-shadow: inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075) }.ez-toc-btn-default:active {-webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,0.125);box-shadow: inset 0 3px 5px rgba(0,0,0,0.125) }.ez-toc-btn:active,.btn.active {background-image: none }.ez-toc-btn-default {text-shadow: 0 1px 0 #fff;background-image: -webkit-gradient(linear,left 0,left 100%,from(#fff),to(#e0e0e0));background-image: -webkit-linear-gradient(top,#fff 0,#e0e0e0 100%);background-image: -moz-linear-gradient(top,#fff 0,#e0e0e0 100%);background-image: linear-gradient(to bottom,#fff 0,#e0e0e0 100%);background-repeat: repeat-x;border-color: #dbdbdb;border-color: #ccc;filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff',endColorstr='#ffe0e0e0',GradientType=0);filter: progid:DXImageTransform.Microsoft.gradient(enabled=false) }.ez-toc-btn-default:hover,.ez-toc-btn-default:focus {background-color: #e0e0e0;background-position: 0 -15px }.ez-toc-btn-default:active,.ez-toc-btn-default.active {background-color: #e0e0e0;border-color: #dbdbdb }.ez-toc-pull-right {float: right !important;margin-left: 10px;}.ez-toc-glyphicon {position: relative;top: 1px;display: inline-block;font-family: 'Glyphicons Halflings';-webkit-font-smoothing: antialiased;font-style: normal;font-weight: normal;line-height: 1;-moz-osx-font-smoothing: grayscale }.ez-toc-glyphicon:empty {width: 1em }.ez-toc-toggle i.ez-toc-glyphicon {font-size: 16px;margin-left: 2px;}[class*=\"ez-toc-icon-\"] {font-family: 'ez-toc-icomoon' !important;speak: none;font-style: normal;font-weight: normal;font-variant: normal;text-transform: none;line-height: 1;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;}.ez-toc-icon-toggle:before {content: \"\\e87a\";}#ez-toc-container input {position: absolute;left: -999em;}#ez-toc-container input[type=\"checkbox\"]:checked + nav {opacity: 0;max-height: 0;border: none;}#ez-toc-container label {float: right;position: relative;left: 3px;font-size: 16px;/* background: #f9efef; */padding: 0px 4px 0px 5px;border: 1px solid #999191;border-radius: 5px;cursor: pointer;}div#ez-toc-container p.ez-toc-title {display: contents;}div#ez-toc-container {padding-right: 20px;}#ez-toc-container label {left: 10px;}.ez-toc-wrap-center {margin: 0 auto;}#ez-toc-container.counter-hyphen ul.ez-toc-list li a::before,#ez-toc-container.counter-disc li,.ez-toc-widget-container.counter-disc li {list-style-type: disc;list-style-position: inside;}#ez-toc-container.counter-hyphen li,.ez-toc-widget-container.counter-hyphen li {list-style-type: '- ';list-style-position: inside;}#ez-toc-container a.ez-toc-toggle {color: #444444;background: inherit;border: inherit;}.ez-toc-toggle #item{position: absolute;left: -999em;}</style>";
}
if (ezTOC_Option::get( 'inline_css' )) {
	add_action('wp_head', 'ez_toc_inline_styles');
}

add_action( 'woocommerce_archive_description', 'ez_toc_woo_category_desc' );
function ez_toc_woo_category_desc() {
  if (!function_exists('vtde_php_upgrade_notice')) {
    return false;
  }
  $term_object = get_queried_object();
  $desc = $term_object->description;
  preg_match_all( '@<h1.*?>(.*?)<\/h1>@', $desc, $matches );
  $array = $matches[1];
  $container = '<div id="ez-toc-container" class="counter-hierarchy counter-decimal ez-toc-grey"><div class="ez-toc-title-container"><p class="ez-toc-title">' . esc_html_e('Table of Contents', 'easy-table-of-contents') . '</p><span class="ez-toc-title-toggle"><a class="ez-toc-pull-right ez-toc-btn ez-toc-btn-xs ez-toc-btn-default ez-toc-toggle" style="display: inline;"><i class="ez-toc-glyphicon ez-toc-icon-toggle"></i></a></span></div><nav><ul class="ez-toc-list">';
    foreach ( $array as $val ) { 
      $vals .= '<li><a class="anchor" href="#'.$val.'">'.$val.'</a></li>';
      $desc = preg_replace('/<h1>(.*?)<\/h1>/', "<h1 id='$1'>$1</h1>", $desc);
    }
    $last .= '</ul></nav></div>';
    $desc = $container . $vals . $last . $desc;
    echo $desc;
}
add_action('wp_head', 'ez_toc_woo_cat_desc_remove');
function ez_toc_woo_cat_desc_remove(){
  if (!function_exists('vtde_php_upgrade_notice')) {
    return false;
  }
  remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
}


//if (function_exists( 'mpg_run' )) {
//	add_filter('the_content', 'ez_toc_mpg');
//}
//function ez_toc_mpg($content){
//  if (is_front_page() || is_single()) {
//  	return $content;
//  }
/*  preg_match_all( '/<h(.*?).*?>(.*?)<\/h(.*?)>/', $content, $matches );*/
//  $array = $matches[2];
//  $container = '<div id="ez-toc-container" class="container counter-hierarchy counter-decimal ez-toc-grey"><div class="ez-toc-title-container"><p class="ez-toc-title">' . esc_html_e('Table of Contents', 'easy-table-of-contents') . '</p><span class="ez-toc-title-toggle"><a class="ez-toc-pull-right ez-toc-btn ez-toc-btn-xs ez-toc-btn-default ez-toc-toggle" style="display: inline;"><i class="ez-toc-glyphicon ez-toc-icon-toggle"></i></a></span></div><nav><ul class="ez-toc-list">';
//    foreach ( $array as $val ) {
//      $val = preg_replace('/\[(.*?)\](.*?)\[(.*?)\]/', '$2', $val);
//      $val = preg_replace('/{(.*?)\|(.*?)\|(.*?)}/', '$3', $val);
//      $vals .= '<li><a class="anchor" href="#'.$val.'">'.$val.'</a></li>';
/*      $content = preg_replace('/<h(.*?).*?>(.*?)<\/h(.*?)>/', "<h$3 id='$2'>$2</h$3>", $content);*/
//    }
//    $last .= '</ul></nav></div>';
//    $content = $container . $vals . $last . $content;
//
//return $content;
//}

//if( is_plugin_active('beaver-builder-lite-version/fl-builder.php') )
//{
//	add_filter( 'the_content', array( ezTOC::class, 'the_content' ) );
//}

/**
 * EzPrintR method
 * to print_r content with pre tags
 * @since 2.0.34
 * @param $content
 * @return void
*/
function EzPrintR($content){
	echo "<pre>";
    print_r($content);
    echo "</pre>";
}

/**
 * EzDumper method
 * to var_dump content with pre tags
 * @since 2.0.34
 * @param $content
 * @return void
*/
function EzDumper($content){
	echo "<pre>";
    var_dump($content);
    echo "</pre>";
}