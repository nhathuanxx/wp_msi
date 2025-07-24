<div class="msi-related-widget">
    <h4 class="msi-widget-title">
        <?php
        if (pll_current_language('slug') == 'vi') {
            echo 'Bài viết liên quan';
        }
        if (pll_current_language('slug') == 'en') {
            echo 'Related Posts';
        }

        if (pll_current_language('slug') == 'zh') {
            echo '相关文章';
        }
        ?>
    </h4>
    <ul class="msi-widget-post-list nav">
        <?php
        // Default arguments
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5, // How many items to display
            'post__not_in'   => array(get_the_ID()), // Exclude current post
            'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
        );

        // Check for current post category and add tax_query to the query arguments
        $cats = wp_get_post_terms(get_the_ID(), 'category');
        $cats_ids = array();
        foreach ($cats as $wpex_related_cat) {
            $cats_ids[] = $wpex_related_cat->term_id;
        }
        if (!empty($cats_ids)) {
            $args['category__in'] = $cats_ids;
        }

        $single_post_select_post = get_field('single_post_select_post');
        if( $single_post_select_post ) {
            $args['post__in'] = $single_post_select_post;
        }

        // Query posts
        $wpex_query = new wp_query($args);

        // Loop through posts
        foreach ($wpex_query->posts as $post) : setup_postdata($post); ?>
            <li>
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </li>

        <?php
        // End loop
        endforeach;

        // Reset post data
        wp_reset_postdata(); ?>

    </ul>
</div><!-- .msi-related-widget -->