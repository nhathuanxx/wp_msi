<?php
/*
* Template Name: Home Page
*/
get_header(); ?>

<main class="main-content home-page">
    <div class="slider-main">

        <div class="sun-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "fade": true, "autoplay": true, "autoplaySpeed": 6000}'>
            <?php if (get_field('banner', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('banner', pll_current_language('slug'))) : 
                    ?>
                    <div class="item">
                        <figure class="item__img aspect-ratio margin-0">
                            <a href="<?php echo get_sub_field('cta_link', pll_current_language('slug')); ?>">
                                <!-- <img src="<?php //echo get_sub_field('banner_image'); 
                                                ?>" alt="slider banner"> -->
                                <?php if (wp_is_mobile()){ ?>
                                    <img class="home_slider_banner_mobile" src="<?php echo get_sub_field('home_mobile_banner', pll_current_language('slug')); ?>" alt="slider banner">
                                <?php } else { ?>
                                    <img class="home_slider_banner_desktop" src="<?php echo get_sub_field('banner_image', pll_current_language('slug')); ?>" alt="slider banner">
                                <?php } ?>
                            </a>
                        </figure>

                    </div><!-- End .item -->
                <?php endwhile; ?>
            <?php endif; ?>

        </div>



    </div>

    <div class="introduce">
        <div class="container">
            <div class="introduce__wrap bg-color-light">
                <?php if (get_field('general_info', pll_current_language('slug'))) : ?>
                    <?php while (the_repeater_field('general_info', pll_current_language('slug'))) : ?>
                        <div class="item">
                            <div class="item__icon">
                                <i class="<?php echo get_sub_field('icon'); ?>"></i>
                            </div>
                            <div class="item__content">
                                <h4 class="item__title"><?php echo get_sub_field('title'); ?></h4>
                                <div class="item__desc">
                                    <?php echo get_sub_field('description'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="service">
        <div class="container">
            <div class="home__title">
                <h2>
                    <?php
                    if (pll_current_language('slug') == 'vi') {
                        echo 'Dịch vụ nổi bật';
                    }
                    if (pll_current_language('slug') == 'en') {
                        echo 'Our services';
                    }

                    if (pll_current_language('slug') == 'zh') {
                        echo '优质的服务';
                    }
                    ?>
                </h2>
            </div>
            <div class="service__content">
                <div class="row">
                    <?php if (get_field('featured_services', pll_current_language('slug'))) : ?>
                        <?php while (the_repeater_field('featured_services', pll_current_language('slug'))) : ?>
                            <div class="col-sm-6 col-md-4 col-lg-3 item <?php echo get_sub_field('main_color_class') ?>">
                                <div class="item__wrap">
                                    <div class="item__icon">
                                        <a href="<?php echo get_sub_field('url') ?>">
                                            <figure>
                                                <img src="<?php echo get_sub_field('icon_image') ?>" alt="<?php echo get_sub_field('title') ?>">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item__content">
                                        <h3 class="item__title">
                                            <a href="<?php echo get_sub_field('url') ?>">
                                                <?php echo get_sub_field('title') ?>
                                            </a>
                                        </h3>
                                        <div class="item__plus text-center">
                                            <i class="icon-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="col-sm-6 col-md-4 col-lg-3 item item--empty">
                        <div class="item__wrap display-flex-center justify-content-center">
                            <a href="#" class="text-center secondary-color-txt">
                                <i class="icon-three-dots display-block font-size-8"></i>
                                <span class="display-block">
                                    <?php
                                    if (pll_current_language('slug') == 'vi') {
                                        echo 'Xem thêm';
                                    }
                                    if (pll_current_language('slug') == 'en') {
                                        echo 'Read more';
                                    }

                                    if (pll_current_language('slug') == 'zh') {
                                        echo '看更多';
                                    }
                                    ?>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="service__banner margin-0">
                <?php if (get_field('docter_team', pll_current_language('slug'))) : ?>
                    <?php while (the_repeater_field('docter_team', pll_current_language('slug'))) : ?>
                        <a href="<?php echo get_sub_field('url'); ?>">
                            <img src="<?php echo get_sub_field('image'); ?>" alt="Dịch vụ nổi bật">
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </figure>
        </div>
    </div>
    <?php require get_template_directory() . '/template-parts/confirm.php'; ?>
    <?php require get_template_directory() . '/template-parts/feedback.php'; ?>

    <div class="schedule-book position-rel">
        <div class="schedule-book__data">
            <div class="container">
                <div class="schedule-book__wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="schedule-book__content">


                                <h2 class="schedule-book__title">
                                    <?php echo get_field('book_in_home_title', pll_current_language('slug')); ?></h2>
                                <p class="schedule-book__desc">
                                    <?php echo get_field('book_in_home_subTile', pll_current_language('slug')); ?></p>
                                <div class="schedule-book__btn display-inline-block">
                                    <a href="javascript:;" class="btn btn-secondary btn-secondary--gradient btn-h60 font-size-16 font-weight-bold text-uppercase book-calendar">
                                        <i class="icon-calendar"></i>
                                        <?php echo get_field('book_an_appointment', pll_current_language('slug')); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="schedule-book__banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-7">
                        <div class="schedule-book__img">
                            <figure class="margin-0">
                                <img src="<?php echo get_field('book_in_home_image', pll_current_language('slug')); ?>" alt="Đặt lịch khám">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news bg-f9">
        <div class="container">

            <?php if (get_field('news_section')) : ?>
                <?php
                while (the_repeater_field('news_section')) :
                    $home_select_category_tab_1 = get_sub_field('home_select_category_tab_1');
                    $home_select_category_tab_2 = get_sub_field('home_select_category_tab_2');


                ?>
                    <div class="home__title display-flex-center justify-content-between">
                        <h2><?php echo get_sub_field('title'); ?></h2>
                        <ul class="nav home-tab-menu" id="myTab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active btn btn-gray font-size-14 font-weight-bold border-rd-25" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <?php echo get_cat_name($home_select_category_tab_1); ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-gray font-size-14 font-weight-bold border-rd-25" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    <?php echo get_cat_name($home_select_category_tab_2); ?>
                                </a>
                            </li>
                        </ul>
                    </div><!-- End .home__title -->
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="news__list">
                                <?php

                                $post_args_tab_1 = array(
                                    'posts_per_page'      => 1,
                                    'category__in'         => $home_select_category_tab_1,
                                    'order'            => 'DESC',
                                    'post_type'        => 'post'
                                );
                                $news_query_tab_1 = new WP_Query($post_args_tab_1); ?>
                                <div class="news__list__big">
                                    <?php if ($news_query_tab_1->have_posts()) : ?>
                                        <?php while ($news_query_tab_1->have_posts()) : $news_query_tab_1->the_post(); ?>
                                            <div class="item">
                                                <div class="item__head">
                                                    <a href="<?php echo get_post_permalink(); ?>">
                                                        <figure>
                                                            <?php if (has_post_thumbnail()) : ?>
                                                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
                                                                <img class="" alt="<?php echo get_the_title(); ?>" src="<?php echo $image[0]; ?>">
                                                            <?php endif; ?>
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="item__body">
                                                    <h3 class="item__title">
                                                        <a href="<?php echo get_post_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                                    </h3>
                                                    <p class="item__date"><?php echo get_the_date(); ?></p>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div><!-- End .news__list__big -->
                                <?php
                                $post_args_tab_2 = array(
                                    'posts_per_page'      => 3,
                                    'category__in'         => $home_select_category_tab_1,
                                    'order'            => 'DESC',
                                    'post_type'        => 'post',
                                    'offset' => 1
                                );
                                $news_query_tab_2 = new WP_Query($post_args_tab_2);
                                // echo '<pre>';
                                // echo var_dump($news_query_tab_2);
                                // echo '</pre>';
                                ?>
                                <div class="news__list__small">
                                    <?php if ($news_query_tab_2->have_posts()) : ?>
                                        <?php while ($news_query_tab_2->have_posts()) : $news_query_tab_2->the_post(); ?>
                                            <div class="item">
                                                <div class="item__head">
                                                    <a href="<?php echo get_post_permalink(); ?>">
                                                        <figure>
                                                            <?php if (has_post_thumbnail()) : ?>
                                                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium'); ?>
                                                                <img class="" alt="<?php echo get_the_title(); ?>" src="<?php echo $image[0]; ?>">
                                                            <?php endif; ?>
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="item__body">
                                                    <h3 class="item__title">
                                                        <a href="<?php echo get_post_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                                    </h3>
                                                    <p class="item__date"><?php echo get_the_date(); ?></p>
                                                    <a href="<?php echo get_post_permalink(); ?>" class="item__readmore">
                                                        <?php
                                                        if (pll_current_language('slug') == 'vi') {
                                                            echo 'Xem chi tiết';
                                                        }
                                                        if (pll_current_language('slug') == 'en') {
                                                            echo 'Read more';
                                                        }

                                                        if (pll_current_language('slug') == 'zh') {
                                                            echo '看更多';
                                                        }
                                                        ?>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div><!-- End .news__list__small -->
                            </div><!-- End .news__list -->
                            <div class="news__more text-center">
                                <a href="<?php echo get_category_link($home_select_category_tab_1); ?>" class="third-color-txt font-size-14 text-uppercase">
                                    <i class="icon-three-dots"></i>
                                    <span>
                                        <?php
                                        if (pll_current_language('slug') == 'vi') {
                                            echo 'Xem tất cả';
                                        }
                                        if (pll_current_language('slug') == 'en') {
                                            echo 'View All';
                                        }

                                        if (pll_current_language('slug') == 'zh') {
                                            echo '看更多';
                                        }
                                        ?>
                                    </span>
                                </a>
                            </div><!-- End .news__more -->
                        </div><!-- End .tab-pane -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="news__list">
                                <?php

                                $post_args_tab_1 = array(
                                    'posts_per_page'      => 1,
                                    'category__in'         => $home_select_category_tab_2,
                                    'order'            => 'DESC',
                                    'post_type'        => 'post'
                                );
                                $news_query_tab_1 = new WP_Query($post_args_tab_1); ?>
                                <div class="news__list__big">
                                    <?php if ($news_query_tab_1->have_posts()) : ?>
                                        <?php while ($news_query_tab_1->have_posts()) : $news_query_tab_1->the_post(); ?>
                                            <div class="item">
                                                <div class="item__head">
                                                    <a href="<?php echo get_post_permalink(); ?>">
                                                        <figure>
                                                            <?php if (has_post_thumbnail()) : ?>
                                                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
                                                                <img class="" alt="<?php echo get_the_title(); ?>" src="<?php echo $image[0]; ?>">
                                                            <?php endif; ?>
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="item__body">
                                                    <h3 class="item__title">
                                                        <a href="<?php echo get_post_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                                    </h3>
                                                    <p class="item__date"><?php echo get_the_date(); ?></p>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div><!-- End .news__list__big -->
                                <?php
                                $post_args_tab_2 = array(
                                    'posts_per_page'      => 3,
                                    'category__in'         => $home_select_category_tab_2,
                                    'order'            => 'DESC',
                                    'post_type'        => 'post',
                                    'offset' => 1
                                );
                                $news_query_tab_2 = new WP_Query($post_args_tab_2);
                                ?>
                                <div class="news__list__small">
                                    <?php if ($news_query_tab_2->have_posts()) : ?>
                                        <?php while ($news_query_tab_2->have_posts()) : $news_query_tab_2->the_post(); ?>
                                            <div class="item">
                                                <div class="item__head">
                                                    <a href="<?php echo get_post_permalink(); ?>">
                                                        <figure>
                                                            <?php if (has_post_thumbnail()) : ?>
                                                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium'); ?>
                                                                <img class="" alt="<?php echo get_the_title(); ?>" src="<?php echo $image[0]; ?>">
                                                            <?php endif; ?>
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="item__body">
                                                    <h3 class="item__title">
                                                        <a href="<?php echo get_post_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                                    </h3>
                                                    <p class="item__date"><?php echo get_the_date(); ?></p>
                                                    <a href="<?php echo get_post_permalink(); ?>" class="item__readmore">
                                                        <?php
                                                        if (pll_current_language('slug') == 'vi') {
                                                            echo 'Xem chi tiết';
                                                        }
                                                        if (pll_current_language('slug') == 'en') {
                                                            echo 'Read more';
                                                        }

                                                        if (pll_current_language('slug') == 'zh') {
                                                            echo '看更多';
                                                        }
                                                        ?>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div><!-- End .news__list__small -->
                            </div><!-- End .news__list -->
                            <div class="news__more text-center">
                                <a href="<?php echo get_category_link($home_select_category_tab_2); ?>"" class=" third-color-txt font-size-14 text-uppercase">
                                    <i class="icon-three-dots"></i>
                                    <span>

                                        <?php
                                        if (pll_current_language('slug') == 'vi') {
                                            echo 'Xem tất cả';
                                        }
                                        if (pll_current_language('slug') == 'en') {
                                            echo 'View All';
                                        }

                                        if (pll_current_language('slug') == 'zh') {
                                            echo '看更多';
                                        }
                                        ?>
                                    </span>
                                </a>
                            </div><!-- End .news__more -->
                        </div><!-- End .tab-pane -->

                    </div><!-- End .tab-content -->
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- End .container -->
    </div><!-- End (news bg-f9) -->


    <?php require get_template_directory() . '/template-parts/package.php'; ?>
    <?php require get_template_directory() . '/template-parts/book-exam.php'; ?>
    <?php require get_template_directory() . '/template-parts/partner-logo.php'; ?>
    <?php require get_template_directory() . '/template-parts/address.php'; ?>
</main>

<?php get_footer(); ?>