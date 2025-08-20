<?php
/*
* Template Name: Tuyen Dung Page Template
*/
get_header();
?>

<div class="tuyen-dung-container">
    <div class="wp-block-msi-blocks-header-image-uk alignfull">
        <div class="right-image-block">
            <div class="container-wide">
                <div class="input-container">
                    <span> <?php
                            echo get_the_title();
                            ?></span>
                </div>
                <div class="container-image">
                    <div class="image-container">
                    <img decoding="async" class="header-image lazyloaded" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/anh-page.jpg" alt="page-image" >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php msi_breadcrumb(); ?>

    <!-- <div class="content">
        <?php the_content(); ?>
    </div> -->
    <main class="main-content service-page">
        <div class="service-intro">
            <div class="service-intro-container">
                <div class="service-intro__wrap">
                    <div class="service-intro__content">
                        <div class="margin-0">
                            <?php echo the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $lang = pll_current_language('slug'); ?>
      <?php
$base_url = site_url();
$job_link = ($lang === 'vi') ? $base_url . '/bai-viet-tuyen-dung' : $base_url . '/en/join-us-post';
?>

<div class="msi-join-us-wrapper">
    <div class="msi-join-us-text">
        <h2 class="msi-join-us-title">
            <?php echo ($lang === 'vi') ? 'Tìm việc làm' : 'Join Our Team'; ?>
        </h2>
        <p class="msi-join-us-desc">
            <?php echo ($lang === 'vi') 
                ? 'MSI Việt Nam luôn tìm kiếm những cá nhân tài năng và nhiệt huyết để cùng thực hiện sứ mệnh nâng cao sức khỏe sinh sản cho cộng đồng.'
                : 'MSI Vietnam is always looking for talented and passionate individuals to join our mission of improving reproductive health for the community.'; ?>
        </p>
    </div>

    <div class="msi-join-us-btn-wrapper">
        <a href="<?php echo esc_url($job_link); ?>" class="msi-join-us-btn">
            <?php echo ($lang === 'vi') ? 'CƠ HỘI HIỆN TẠI CỦA CHÚNG TÔI' : 'VIEW CURRENT OPPORTUNITIES'; ?>
        </a>
    </div>
</div>
        <h3 class="wp-block-heading has-text-align-center">
            <?php if ($lang === 'vi') : ?>
                Hãy lắng nghe chia sẻ của các đồng nghiệp tại MSIVN và các đối tác
            <?php else : ?>
                Listen to our staff’s opinions
            <?php endif; ?>
        </h3>
        <p class="has-text-align-center-p">
            <?php if ($lang === 'vi') : ?>
                Tìm hiểu sâu hơn về môi trường làm việc tại MSIVN bằng cách đọc những chia sẻ của các đồng nghiệp trong toàn tổ chức.
            <?php else : ?>
                Learn more about the working environment at MSIVN by reading colleagues’ stories across the organization.
            <?php endif; ?>
        </p>
        <!-- <?php require get_template_directory() . '/template-parts/post-list.php'; ?> -->

        <?php
        $lang = pll_current_language('slug');
        $category_slugs = [
            'vi' => 'bai-viet-tuyen-dung',
            'en' => 'join-us-post',
        ];
        $category_name = $category_slugs[$lang] ?? 'default-category';

        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'lang'           => $lang,
            'category_name' => $category_name,
            //    'suppress_filters' => true
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <div class="wp-block-columns alignwide is-layout-flex wp-container-core-columns-is-layout-4 wp-block-columns-is-layout-flex post-list-content">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:33.33%">
                        <div class="wp-block-msi-blocks-multi-column-feature-block">
                            <div class="box input-container">
                                <?php
                                $image = get_field('anh_bai_viet');
                                if ($image) :
                                    $image_url = !empty($image['sizes']['large']) ? esc_url($image['sizes']['large']) : esc_url($image['url']);
                                    $image_alt = !empty($image['alt']) ? esc_attr($image['alt']) : get_the_title();
                                ?>
                                    <img decoding="async" class="image" src="<?= $image_url ?>" alt="<?= $image_alt ?>">
                                <?php elseif (has_post_thumbnail()) : ?>
                                    <img decoding="async" class="image" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                                <div class="col-text">
                                    <h4 class="title limit-lines-1"><?php the_title(); ?></h4>
                                    <p class="limit-lines-2"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
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

    </main>

</div>

<?php
get_footer();
?>
<style>
    .post-list-content {
        max-width: 1335px;
        margin: 0px auto;
        display: flex;
        gap: 24px;
    }

    .is-layout-constrained>.alignwide {
        max-width: 1335px;
        margin: 0px auto;
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
        margin: 0px;
        font-style: normal;
        font-weight: 700;
        text-transform: none;
    }

    p {
        color: #283573;
        font-family: "Roboto", sans-serif;
        font-size: 18px;
        font-weight: 400;
        letter-spacing: normal;
        line-height: 28px;
    }

    .buttons-container .wp-block-button,
    .wp-block-buttons .wp-block-button,
    .wp-block-group .wp-block-button {
        align-items: center;
        background: #283573;
        border-radius: 6px;
        color: white;
        cursor: pointer;
        display: flex;
        font-size: 16px;
        height: auto;
        justify-content: center;
        letter-spacing: .16em;
        /* max-width: 366px; */
        min-height: 54px;
        text-decoration: none;
        text-transform: uppercase;
        width: 100%;
        margin-top: 20px;
    }

    .buttons-container .wp-block-button .wp-block-button__link,
    .wp-block-buttons .wp-block-button .wp-block-button__link,
    .wp-block-group .wp-block-button .wp-block-button__link {
        align-items: center;
        background-color: transparent;
        border-radius: 6px;
        color: inherit;
        display: flex;
        height: 100%;
        justify-content: center;
        padding: 13px 32px;
        width: 100%;
    }

    .wp-block-buttons-is-layout-flex {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wp-block-column-is-layout-flow {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .limit-lines-1 {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
    }

    .limit-lines-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
    }

    .limit-lines-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
    }

    .contact-content {
        max-width: 1335px;
        margin: 0px auto;
    }

    .has-text-align-center {
        max-width: 800px !important;
        margin-left: auto !important;
        margin-right: auto !important;
        color: #283573;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        font-weight: 700;
        text-transform: none;
        text-align: center;
    }

    .has-text-align-center-p {
        max-width: 800px !important;
        margin-left: auto !important;
        margin-right: auto !important;
        color: #283573;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        font-size: 18px;
        text-align: center;
    }
</style>