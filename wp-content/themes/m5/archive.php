<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
$category = get_queried_object();
$current_cat_ID = $category->term_id;
$current_cat_name = $category->name;
$current_cat_description = $category->description;
$lang = pll_current_language('slug');
$current_cat_slug = $category->slug; // lấy slug để so sánh
$search_text = ($lang === 'en') ? 'Search' : 'Tìm kiếm';

?>
<div class="category-container">
    <div class="category-content">
        <div class="category-content-header">
            <div class="header-title">
                <?php
                echo $current_cat_name
                ?>
            </div>
            <div class="header-sub-title">
                <?php
                echo $current_cat_description
                ?>
            </div>
        </div>
        <div class="category-first-post">
            <?php
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 1,
            ];

            if ($current_cat_slug !== 'tin-tuc' && $current_cat_slug !== 'news') {
                $args['category_name'] = $current_cat_slug;
            }

            $query = new WP_Query($args);

            if ($query->have_posts()):
                $query->the_post();
                $post_id = get_the_ID();
                $categories = get_the_category($post_id);
                $title = get_the_title();
                $excerpt = get_the_excerpt();
                $lang = pll_current_language('slug');

                if ($lang === 'vi') {
                    $date = get_the_date('\n\g\à\y j \t\h\á\n\g n \n\ă\m Y');
                } else {
                    $date = get_the_date('F j, Y');
                }
                $reading_time = ceil(str_word_count(strip_tags(get_the_content())) / 200);
                $permalink = get_permalink();
                $thumbnail = get_the_post_thumbnail_url($post_id, 'large');
                if (!$thumbnail) {
                    $thumbnail = 'https://via.placeholder.com/600x400?text=No+Image';
                }
            ?>
                <div id="category-featured" class="category-featured">
                      <div class="category-featured__image category-featured__image_mobile">
                        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>">
                    </div>
                    <div class="category-featured__content">
                        <div class="category-featured__meta">
                            <span class="category-featured__category"><?php echo esc_html($categories[0]->name); ?></span>

                            <span class="category-featured__bullet">•</span>

                            <span class="category-featured__date"><?php echo esc_html($date); ?></span>

                            <span class="category-featured__bullet">•</span>

                            <span class="category-featured__reading-time"><?php if ($lang === 'vi') : ?>
                                    Đọc
                                <?php else : ?>
                                    Read <?php endif; ?> <?php echo esc_html($reading_time); ?> <?php if ($lang === 'vi') : ?>
                                    phút <?php else : ?>
                                    minutes <?php endif; ?></span>
                        </div>
                        <h2 class="category-featured__title"><?php echo esc_html($title); ?></h2>
                        <p class="category-featured__excerpt"><?php echo esc_html($excerpt); ?></p>
                        <a href="<?php echo esc_url($permalink); ?>" class="category-featured__button"><?php if ($lang === 'vi') : ?>
                                ĐỌC THÊM
                            <?php else : ?>
                                READ MORE
                            <?php endif; ?></a>
                    </div>
                    <div class="category-featured__image category-featured__image_desktop">
                        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>">
                    </div>
                </div>
            <?php
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <!-- <?php echo $current_cat_slug ?> -->
        <div class="line-space">
            <hr class="line-space-content" style="background-color:#00000033;color:#00000033">
        </div>
        <div class="category-posts">
            <div class="template-blog-header">
                <div class="title">
                    <?php if (pll_current_language('slug') === 'vi') : ?>
                        Bài viết mới nhất <?php else : ?>
                        Latest Posts
                    <?php endif; ?>
                </div>
                <div class="template-blog-search-wrapper">
                    <button id="template-blog-search-toggle" aria-label="Mở tìm kiếm" title="Tìm kiếm">
                        <img class="search-icon" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/search-icon.svg" alt="search-icon">
                    </button>
                    <div class="template-blog-search-box" style="display:none;">
                        <span class="template-blog-search-icon"> <img class="search-icon" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/search-icon.svg" alt="search-icon">
                        </span>
                        <input type="text" id="template-blog-search-key" placeholder="<?php echo esc_attr($search_text . ' ' . $current_cat_name . '...'); ?>">
                        <button id="template-blog-search-clear" aria-label="Xóa tìm kiếm" title="Xóa tìm kiếm">&times;</button>
                    </div>
                </div>
            </div>
            <?php
            if ($current_cat_slug === 'tin-tuc' || $current_cat_slug === 'news') {
                $categories = get_categories();
                foreach ($categories as $cat) {
                    echo '<button class="template-blog-filter-btn" data-category="' . esc_attr($cat->slug) . '">'
                        . esc_html($cat->name) .
                        '</button>';
                }
            }
            ?>

            <!-- Danh sách bài viết -->
            <div id="template-blog-post-list">

                <?php
                $lang = pll_current_language('slug');
                $args = ['post_type' => 'post', 'posts_per_page' => 6, 'lang' => $lang];
                if ($current_cat_slug !== 'tin-tuc' && $current_cat_slug !== 'news') {
                    $args['category_name'] = $category->slug;
                }
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();
                    echo msi_get_post_card_html(get_post());
                }
                wp_reset_postdata();
                ?>
            </div>

            <!-- Nút tải thêm -->
            <div class="template-blog-load-more-wrap" <?php if ($query->found_posts < 6) echo 'style="display:none;"'; ?>>
                <button id="template-blog-load-more-btn"
                    data-category="<?php echo ($category->slug === 'tin-tuc' || $category->slug === 'news') ? '' : esc_attr($category->slug); ?>">
                    <?php if ($lang === 'vi') : ?>
                        TẢI THÊM
                    <?php else : ?>
                        LOAD MORE
                    <?php endif; ?>
                </button>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>