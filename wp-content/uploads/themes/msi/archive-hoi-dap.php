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
?>
<div class="about-count">
    <div class="page-breadcrumb">
        <div class="container">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<div id="breadcrumbs" class="margin-0 padding-0 text-center">', '</div>');
            }
            ?>
        </div>
    </div>
    <div class="container">
        <header class="page-header text-center">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            ?>
        </header>
    </div>
</div>
<div class="msi-post-tab-module">
    <div class="container">
        <ul class="nav nav-pills msi-post-tab-nav" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="msi-post-cat-1-tab" data-toggle="pill" href="#msi-post-cat-1" role="tab" aria-controls="msi-post-cat-1" aria-selected="true">Sức khỏe sinh sản</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="msi-post-cat-2-tab" data-toggle="pill" href="#msi-post-cat-2" role="tab" aria-controls="msi-post-cat-2" aria-selected="false">Biện pháp tránh thai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="msi-post-cat-3-tab" data-toggle="pill" href="#msi-post-cat-3" role="tab" aria-controls="msi-post-cat-3" aria-selected="false">Đình chỉ thai</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="msi-post-cat-1" role="tabpanel" aria-labelledby="msi-post-cat-1-tab">
                <div class="msi-post-tab-head">
                    <div class="row">
                        <h2 class="msi-post-tab-head-title">Sức khỏe sinh sản</h2>
                    </div>
                </div><!-- .msi-post-tab-head -->
                <div class="row msi-post-tab-content">
                    <div class="col-md-8 msi-post-tab-content-left">
                        <div class="msi-post-list">

                            <?php
                            $args = array(
                                'post_type' => 'hoi-dap',
                                'orderby' => 'post_date',
                                'posts_per_page' => 6,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'hoi-dap-cat',
                                        'terms' => 12,
                                        'field' => 'term_id',
                                    )
                                ),
                            );
                            $query = new WP_Query($args); ?>

                            <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <div class="msi-post-item">
                                        <div class="row">
                                            <div class="col-md-5 post-thumbnail-img">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                                                        <img class="" alt="Post Thumbnail" src="<?php echo $image[0]; ?>">
                                                    <?php endif; ?>
                                                    <img class="" alt="Post Thumbnail" src="https://dummyimage.com/600x400/dddddd/fff.jpg&text=FAQ">
                                                </a>
                                            </div>
                                            <div class="col-md-7 post-item-content">
                                                <h3 class="post-item-title">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h3>
                                                <div class="msi-post-created">
                                                    <?php the_date(); ?>
                                                </div>
                                                <div class="post-item-description">
                                                    <?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
                                                </div>
                                                <div class="msi-read-more">
                                                    <a href="<?php the_permalink(); ?>">Xem chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End .msi-post-item -->
                                <?php endwhile; ?>
                                <div class="text-center mt-5 mb-5">
                                    <a href="<?php echo get_category_link(4); ?>">
                                        <b>Xem thêm <i class="fas fa-angle-double-right"></i></b>
                                    </a>
                                </div>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4  msi-post-tab-sidebar-right">
                        <?php require get_template_directory() . '/inc/sidebar-right.php'; ?>
                    </div>
                </div><!-- .msi-post-tab-content -->
            </div>
            <div class="tab-pane fade" id="msi-post-cat-2" role="tabpanel" aria-labelledby="msi-post-cat-2-tab">
                <div class="msi-post-tab-head">
                    <div class="row">
                        <h2 class="msi-post-tab-head-title">Biện pháp tránh thai</h2>
                    </div>
                </div><!-- .msi-post-tab-head -->
                <div class="row msi-post-tab-content">
                    <div class="col-md-8 msi-post-tab-content-left">
                        <div class="msi-post-list">

                            <?php
                            $args = array(
                                'post_type' => 'hoi-dap',
                                'orderby' => 'post_date',
                                'posts_per_page' => 6,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'hoi-dap-cat',
                                        'terms' => 11,
                                        'field' => 'term_id',
                                    )
                                ),
                            );
                            $query = new WP_Query($args); ?>

                            <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <div class="msi-post-item">
                                        <div class="row">
                                            <div class="col-md-5 post-thumbnail-img">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                                                        <img class="" alt="Post Thumbnail" src="<?php echo $image[0]; ?>">
                                                    <?php endif; ?>
                                                    <img class="" alt="Post Thumbnail" src="https://dummyimage.com/600x400/dddddd/fff.jpg&text=FAQ">
                                                </a>
                                            </div>
                                            <div class="col-md-7 post-item-content">
                                                <h3 class="post-item-title">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h3>
                                                <div class="msi-post-created">
                                                    <?php the_date(); ?>
                                                </div>
                                                <div class="post-item-description">
                                                    <?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
                                                </div>
                                                <div class="msi-read-more">
                                                    <a href="<?php the_permalink(); ?>">Xem chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End .msi-post-item -->
                                <?php endwhile; ?>
                                <div class="text-center mt-5 mb-5">
                                    <a href="<?php echo get_category_link(6); ?>">
                                        <b>Xem thêm <i class="fas fa-angle-double-right"></i></b>
                                    </a>
                                </div>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>

                        </div><!-- End .msi-post-list -->
                    </div>
                    <div class="col-md-4 msi-post-tab-sidebar-right">
                        <?php require get_template_directory() . '/inc/sidebar-right.php'; ?>
                    </div>
                </div><!-- .msi-post-tab-content -->
            </div>
            <div class="tab-pane fade" id="msi-post-cat-3" role="tabpanel" aria-labelledby="msi-post-cat-3-tab">
                <div class="msi-post-tab-head">
                    <div class="row">
                        <h2 class="msi-post-tab-head-title">Đình chỉ thai</h2>
                    </div>
                </div><!-- .msi-post-tab-head -->
                <div class="row msi-post-tab-content">
                    <div class="col-md-8 msi-post-tab-content-left">
                        <div class="msi-post-list">

                            <?php
                            $args = array(
                                'post_type' => 'hoi-dap',
                                'orderby' => 'post_date',
                                'posts_per_page' => 6,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'hoi-dap-cat',
                                        'terms' => 10,
                                        'field' => 'term_id',
                                    )
                                ),
                            );
                            $query = new WP_Query($args); ?>

                            <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <div class="msi-post-item">
                                        <div class="row">
                                            <div class="col-md-5 post-thumbnail-img">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                                                        <img class="" alt="Post Thumbnail" src="<?php echo $image[0]; ?>">
                                                    <?php endif; ?>
                                                    <img class="" alt="Post Thumbnail" src="https://dummyimage.com/600x400/dddddd/fff.jpg&text=FAQ">
                                                </a>
                                            </div>
                                            <div class="col-md-7 post-item-content">
                                                <h3 class="post-item-title">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h3>
                                                <div class="msi-post-created">
                                                    <?php the_date(); ?>
                                                </div>
                                                <div class="post-item-description">
                                                    <?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
                                                </div>
                                                <div class="msi-read-more">
                                                    <a href="<?php the_permalink(); ?>">Xem chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End .msi-post-item -->
                                <?php endwhile; ?>
                                <div class="text-center mt-5 mb-5">
                                    <a href="<?php echo get_category_link(6); ?>">
                                        <b>Xem thêm <i class="fas fa-angle-double-right"></i></b>
                                    </a>
                                </div>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>

                        </div><!-- End .msi-post-list -->
                    </div>
                    <div class="col-md-4 msi-post-tab-sidebar-right">
                        <?php require get_template_directory() . '/inc/sidebar-right.php'; ?>
                    </div>
                </div><!-- .msi-post-tab-content -->
            </div>
        </div>

    </div>
</div>
<div class="confirm home-confirm msi-main-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="confirm__content">
                    <h2 class="confirm__title">Bạn đã sẵn sàng</h2>
                    <p class="confirm__desc">
                        Chúng tôi luôn đồng hành cùng bạn trên chặng đường an toàn
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="confirm__btns display-flex-center">
                    <a href="tel:1900 55 88 82" class="btn btn-main btn-main--gradient btn-h60 font-size-18 font-weight-bold text-uppercase">
                        <i class="icon-phone"></i> 1900 55 88 82
                    </a>
                    <a href="javascript:;" class="btn btn-secondary btn-secondary--gradient btn-h60 font-size-16 font-weight-bold book-calendar text-uppercase">
                        <i class="icon-calendar"></i> Đặt lịch khám
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
