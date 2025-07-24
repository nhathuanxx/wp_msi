<?php
$term = get_queried_object();

$children = get_terms($term->taxonomy, array(
    'parent'    => $term->term_id,
    'hide_empty' => false
));

?>
<?php if ($children) :
    // echo "<pre>";
    // echo var_dump($children);
    // echo "</pre>";
?>
    <div class="msi-related-widget">

        <h2 class="msi-widget-title"><?php echo $term->name; ?></h2>
        <ul class="msi-widget-post-list nav">
            <?php foreach ($children as $children_item) : ?>
                <li>
                    <a href="<?php echo get_category_link($children_item->term_id); ?>"><?php echo $children_item->name; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>

    </div><!-- .msi-related-widget -->
<?php endif; ?>
<div class="msi-related-widget">
    <?php if (get_field('featured_post_widget', 'option')) : ?>
        <?php while (the_repeater_field('featured_post_widget', 'option')) : ?>
            <h2 class="msi-widget-title"><?php echo get_sub_field('title'); ?></h2>
            <ul class="msi-widget-post-list nav">
                <?php
                $featured_posts = get_sub_field('select_featured_post');
                foreach ($featured_posts as $post_item) :
                ?>
                    <li>
                        <a href="<?php echo get_permalink($post_item->ID); ?>"><?php echo $post_item->post_title; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endwhile; ?>
    <?php endif; ?>
</div><!-- .msi-related-widget -->
<div class="msi-tags-widget">
    <?php if (get_field('tag_widget', 'option')) : ?>
        <?php while (the_repeater_field('tag_widget', 'option')) : ?>
            <h2 class="msi-widget-title"><?php echo get_sub_field('title'); ?></h2>
            <div class="msi-widget-tags-list">
                <?php
                $featured_tags = get_sub_field('select_featured_tags');
                foreach ($featured_tags as $tag_item) :
                ?>
                    <div class="msi-widget-tags-item">
                        <a href="<?php echo get_term_link($tag_item->term_id); ?>">#<?php echo $tag_item->name; ?></a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div><!-- End .msi-tags-widget -->