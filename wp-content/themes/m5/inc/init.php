<?php
if (!function_exists('MSI_post_thumbnail')) :
    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function MSI_post_thumbnail()
    {
        if (!twentynineteen_can_show_post_thumbnail()) {
            return;
        }

        if (is_singular()) :
?>

            <figure class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </figure><!-- .post-thumbnail -->

        <?php
        else :
        ?>

            <figure class="post-thumbnail">
                <a class="post-thumbnail-inner" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                    <?php the_post_thumbnail('post-thumbnail'); ?>
                </a>
            </figure>

<?php
        endif; // End is_singular().
    }
endif;


/**
 * Add custom sizes attribute to responsive image functionality for post thumbnails.
 *
 * @origin Twenty Nineteen 1.0
 *
 * @param array $attr  Attributes for the image markup.
 * @return string Value for use in post thumbnail 'sizes' attribute.
 */
function twentynineteen_post_thumbnail_sizes_attr($attr)
{

    if (is_admin()) {
        return $attr;
    }

    if (!is_singular()) {
        $attr['sizes'] = '(max-width: 34.9rem) calc(100vw - 2rem), (max-width: 53rem) calc(8 * (100vw / 12)), (min-width: 53rem) calc(6 * (100vw / 12)), 100vw';
    }

    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'twentynineteen_post_thumbnail_sizes_attr', 10, 1);


/**
 * Determines if post thumbnail can be displayed.
 */
function twentynineteen_can_show_post_thumbnail()
{
    return apply_filters('twentynineteen_can_show_post_thumbnail', !post_password_required() && !is_attachment() && has_post_thumbnail());
}

/**
 * Enqueue scripts and styles.
 */
function MSI_scripts()
{
    // CSS
    wp_enqueue_style('MSI-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('bootstrap-css',  get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3');

    // JS
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.5.1', true);
    wp_enqueue_script('common-js', get_template_directory_uri() . '/assets/js/common.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'MSI_scripts');

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
            )
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

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');
    }
endif;
add_action('after_setup_theme', 'twentynineteen_setup');

// Pagination
if ( ! function_exists( 'post_pagination' ) ) :
    function post_pagination() {
      global $wp_query;
      $pager = 999999999; // need an unlikely integer
  
         echo paginate_links( array(
              'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $wp_query->max_num_pages
         ) );
    }
 endif;
