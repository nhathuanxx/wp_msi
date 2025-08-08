<?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$query = new WP_Query($args);

if ($query->have_posts()) : ?>
    <div class="wp-block-columns alignwide is-layout-flex wp-container-core-columns-is-layout-4 wp-block-columns-is-layout-flex">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:33.33%">
                <div class="wp-block-msi-blocks-multi-column-feature-block">
                    <div class="box input-container">
                        <!-- <?php if (has_post_thumbnail()) : ?>
                            <img decoding="async" class="image" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?> -->
                        <div class="col-text">
                            <h4 class="title"><?php the_title(); ?></h4>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        </div>
                    </div>
                </div>

                <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
                    <div class="wp-block-button">
                        <a class="wp-block-button__link wp-element-button" href="<?php the_permalink(); ?>">Đọc thêm</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php
endif;
wp_reset_postdata();
?>
<style>
    .is-layout-constrained>.alignwide {
        max-width: 1335px;
    }

    .wp-block-msi-blocks-multi-column-feature-block .box {
        overflow: hidden;
        padding: 0;
    }

    .input-container {
        background-color: white;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding: 20px;
    }

    .wp-block-msi-blocks-multi-column-feature-block .image {
        border-radius: 8px;
        height: 256px;
        margin-bottom: 1rem;
        -o-object-fit: cover;
        object-fit: cover;
        width: -webkit-fill-available;
        width: -moz-available;
        width: stretch;
    }

    .wp-block-msi-blocks-multi-column-feature-block .col-text {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        width: 100%;
    }

    h4 {
        font-size: 24px;
        line-height: 32px;
        color: #283573;
        font-family: "Roboto", sans-serif;

        font-style: normal;
        font-weight: 700;
        text-transform: none;
    }
    p{
        color: #283573;
        font-family: "Roboto", sans-serif;
    font-size: 18px;
    font-weight: 400;
    letter-spacing: normal;
    line-height: 28px;
    }
    .buttons-container .wp-block-button, .wp-block-buttons .wp-block-button, .wp-block-group .wp-block-button {
    align-items: center;
    background: #283573;
    border-radius: 6px;
    color: white;
    cursor: pointer;
    display: flex
;
    font-size: 16px;
    height: auto;
    justify-content: center;
    letter-spacing: .16em;
    max-width: 366px;
    min-height: 54px;
    text-decoration: none;
    text-transform: uppercase;
    width: 100%;
}
.buttons-container .wp-block-button .wp-block-button__link, .wp-block-buttons .wp-block-button .wp-block-button__link, .wp-block-group .wp-block-button .wp-block-button__link
 {
    align-items: center;
    background-color: transparent;
    border-radius: 6px;
    color: inherit;
    display: flex
;
    height: 100%;
    justify-content: center;
    padding: 13px 32px;
    width: 100%;
}
</style>