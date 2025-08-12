<div class="msi-related-widget-container">
<div class="msi-related-widget">
    <h4 class="msi-widget-title">
        <?php
        if (pll_current_language('slug') == 'vi') {
            echo 'Bài viết liên quan';
        }
        if (pll_current_language('slug') == 'en') {
            echo 'Related Posts';
        }
        ?>
    </h4>
    <div id="template-blog-post-list">
        <?php
        // Default arguments
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3, // How many items to display
            'post__not_in'   => array(get_the_ID()), // Exclude current post
            'no_found_rows'  => true, // No pagination needed
        );

        // Get categories of current post
        $cats = wp_get_post_terms(get_the_ID(), 'category');
        $cats_ids = array();
        foreach ($cats as $wpex_related_cat) {
            $cats_ids[] = $wpex_related_cat->term_id;
        }
        if (!empty($cats_ids)) {
            $args['category__in'] = $cats_ids;
        }

        // If custom selected posts exist, override query
        $single_post_select_post = get_field('single_post_select_post');
        if ($single_post_select_post) {
            $args['post__in'] = $single_post_select_post;
        }

        // Query posts
        $wpex_query = new WP_Query($args);

        // Loop
        foreach ($wpex_query->posts as $post) : setup_postdata($post);
        $default_image_url = get_template_directory_uri() . '/assets/images/msi/phong-kham-gan-ban.jpg';

            $thumb_url   = get_the_post_thumbnail_url($post->ID, 'medium'); // Lấy ảnh thumbnail
            $image_url = $thumb_url ?: $default_image_url;

            $categories  = get_the_category($post->ID);
            $category_name = !empty($categories) ? $categories[0]->name : '';
            $date_display = get_the_date('j \t\h\á\n\g n \n\ă\m Y', $post->ID); // Ví dụ: ngày 4 tháng 1 năm 2023
            $reading_time = ceil(str_word_count(strip_tags(get_post_field('post_content', $post->ID))) / 200); // tính phút đọc
        ?>
            <div class="post-card">
                <a href="<?php the_permalink(); ?>" class="post-thumb">
                    <?php if ($image_url): ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
                    <?php endif; ?>
                    <?php if ($category_name): ?>
                        <span class="post-category"><?php echo esc_html($category_name); ?></span>
                    <?php endif; ?>
                </a>
                <div class="post-meta">
                    <span><?php echo $date_display; ?> • Đọc trong <?php echo $reading_time; ?> phút</span>
                </div>
                <h3 class="post-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="post-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '…'); ?></p>
            </div>
        <?php
        endforeach;

        wp_reset_postdata();
        ?>
    </div>
</div><!-- .msi-related-widget -->
</div>

