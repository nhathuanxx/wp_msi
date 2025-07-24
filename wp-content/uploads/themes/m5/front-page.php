<?php
/*
* Template Name: Home Page
*/
get_header(); ?>

<main class="main-content home-page">
    <div class="slider-main home-banner">
        <div class="sun-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "fade": true, "autoplay": true, "autoplaySpeed": 6000}'>
            <?php if (get_field('banner', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('banner', pll_current_language('slug'))) :
                ?>
                    <div class="item">
                        <figure class="item__img aspect-ratio margin-0">
                            <a href="<?php echo get_sub_field('cta_link', pll_current_language('slug')); ?>">
                                <!-- <img src="<?php //echo get_sub_field('banner_image'); 
                                                ?>" alt="slider banner"> -->
                                <?php if (wp_is_mobile()) { ?>
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

    <!-- <div class="introduce">
        <div class="container">
            <div class="introduce__wrap bg-color-light">
                <?php if (get_field('general_info', pll_current_language('slug'))) : ?>
                    <?php while (the_repeater_field('general_info', pll_current_language('slug'))) : ?>
                        <div class="item">
                            <div class="item__icon">
                                <i class="<?php echo get_sub_field('icon'); ?>"></i>
                            </div>
                            <div class="item__content">
                                <p class="item__title"><?php echo get_sub_field('title'); ?></p>
                                <div class="item__desc">
                                    <?php echo get_sub_field('description'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div> -->
    <?php require get_template_directory() . '/template-parts/clinic-address.php'; ?>
    <!-- <div class="service">
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
    </div> -->
    <?php require get_template_directory() . '/template-parts/care-service.php'; ?>
    <?php require get_template_directory() . '/template-parts/msi-doctors.php'; ?>

    <?php require get_template_directory() . '/template-parts/os-package.php'; ?>

    <div class="news bg-f9 os_news">
        <div class="container">

            <?php if (get_field('news_section')) : ?>
                <?php
                while (the_repeater_field('news_section')) :
                    $home_select_category_tab_1 = get_sub_field('home_select_category_tab_1');
                    $home_select_category_tab_2 = get_sub_field('home_select_category_tab_2');


                ?>
                    <div class="os_header_news">
                        <h2>
                            <!-- <?php echo get_sub_field('title'); ?> -->
                            <?php
                            if (pll_current_language('slug') == 'vi') {
                                echo 'Tin tức';
                            }
                            if (pll_current_language('slug') == 'en') {
                                echo 'News';
                            }

                            if (pll_current_language('slug') == 'zh') {
                                echo '新闻';
                            }
                            ?>
                        </h2>
                        <ul class="nav home-tab-menu" id="myTab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active btn btn-gray font-size-14 font-weight-bold border-rd-25 os-btn-disable" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <?php echo get_cat_name($home_select_category_tab_1); ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-gray font-size-14 font-weight-bold border-rd-25 os-btn-disable" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    <?php echo get_cat_name($home_select_category_tab_2); ?>
                                </a>
                            </li>
                        </ul>
                    </div><!-- End .home__title -->
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="news__list" style="box-shadow:none">
                                <?php

                                $post_args_tab_1 = array(
                                    'posts_per_page'      => 1,
                                    'category__in'         => $home_select_category_tab_1,
                                    'order'            => 'DESC',
                                    'post_type'        => 'post'
                                );
                                $news_query_tab_1 = new WP_Query($post_args_tab_1); ?>
                                <div class="news__list__big col-md-12 col-lg-5">
                                    <?php if ($news_query_tab_1->have_posts()) : ?>
                                        <?php while ($news_query_tab_1->have_posts()) : $news_query_tab_1->the_post(); ?>
                                            <div class="item">
                                                <div class="item__head">
                                                    <a href="<?php echo get_permalink(); ?>">
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
                                                        <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                                    </h3>
                                                    <!-- <p class="item__date"><?php echo get_the_date(); ?></p> -->
                                                    <div class="os_btn_news_detail">
                                                        <a href="<?php echo get_permalink(); ?>">
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
                                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/arrow_circle_right.svg'); ?>">
                                                    </div>
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
                                <div class="news__list__small col-md-12 col-lg-7">
                                    <?php if ($news_query_tab_2->have_posts()) : ?>
                                        <?php while ($news_query_tab_2->have_posts()) : $news_query_tab_2->the_post(); ?>
                                            <div class="item">
                                                <div class="item__head">
                                                    <a href="<?php echo get_permalink(); ?>">
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
                                                        <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                                    </h3>
                                                    <p class="item__date"><?php echo get_the_date(); ?></p>
                                                    <!-- <a href="<?php echo get_permalink(); ?>" class="item__readmore">
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
                                                    </a> -->
                                                    <div class="os_btn_news_detail-2">
                                                        <a href="<?php echo get_permalink(); ?>">
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
                                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/arrow_circle_right.svg'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div><!-- End .news__list__small -->
                            </div><!-- End .news__list -->
                            <!-- <div class="news__more text-center">
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
                            </div> -->
                            <!-- End .news__more -->
                        </div><!-- End .tab-pane -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="news__list" style="box-shadow:none">
                                <?php

                                $post_args_tab_1 = array(
                                    'posts_per_page'      => 1,
                                    'category__in'         => $home_select_category_tab_2,
                                    'order'            => 'DESC',
                                    'post_type'        => 'post'
                                );
                                $news_query_tab_1 = new WP_Query($post_args_tab_1); ?>
                                <div class="news__list__big col-md-12 col-lg-5">
                                    <?php if ($news_query_tab_1->have_posts()) : ?>
                                        <?php while ($news_query_tab_1->have_posts()) : $news_query_tab_1->the_post(); ?>
                                            <div class="item">
                                                <div class="item__head">
                                                    <a href="<?php echo get_permalink(); ?>">
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
                                                        <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                                    </h3>
                                                    <div class="os_btn_news_detail">
                                                        <a href="<?php echo get_permalink(); ?>">
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
                                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/arrow_circle_right.svg'); ?>">
                                                    </div>
                                                    <!-- <p class="item__date"><?php echo get_the_date(); ?></p> -->
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
                                <div class="news__list__small col-md-12 col-lg-7">
                                    <?php if ($news_query_tab_2->have_posts()) : ?>
                                        <?php while ($news_query_tab_2->have_posts()) : $news_query_tab_2->the_post(); ?>
                                            <div class="item">
                                                <div class="item__head">
                                                    <a href="<?php echo get_permalink(); ?>">
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
                                                        <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                                    </h3>
                                                    <p class="item__date"><?php echo get_the_date(); ?></p>
                                                    <!-- <a href="<?php echo get_permalink(); ?>" class="item__readmore">
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
                                                    </a> -->
                                                    <div class="os_btn_news_detail-2">
                                                        <a href="<?php echo get_permalink(); ?>">
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
                                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/arrow_circle_right.svg'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div><!-- End .news__list__small -->
                            </div><!-- End .news__list -->
                            <!-- <div class="news__more text-center">
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
                            </div> -->
                            <!-- End .news__more -->
                        </div><!-- End .tab-pane -->

                    </div><!-- End .tab-content -->
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- End .container -->
    </div><!-- End (news bg-f9) -->

    <?php require get_template_directory() . '/template-parts/os-partner-logo.php'; ?>
    <?php require get_template_directory() . '/template-parts/content-us-now.php'; ?>
    <!-- <?php require get_template_directory() . '/template-parts/address.php'; ?> -->
</main>

<?php get_footer(); ?>

<style>
    .os_header_news {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .os_header_news h2 {
        font-family: 'Space Grotesk', sans-serif;
        font-size: 56px;
        font-weight: 500;
        line-height: 67px;
        text-align: left;

    }

    .home-tab-menu li a.active {
        background-color: #00ACEE;
        color: white;
    }

    .os-btn-disable {
        background-color: #DEF3FF;
        color: #0072AB;
    }

    .os_news {
        background-color: white;
    }

    .news__list__big .item {
        height: 100%;
        border-radius: 40px;
    }

    .item__head img {
        max-width: none;
    }

    .news__list__small .item__head {
        width: 40%;
    }

    .news__list__small .item__body {
        width: 60%;
    }

    .news__list__small .item {
        padding: 16px;
        background: var(--Alias-Button-Primary-Bluex, #DEF3FF);
        border-radius: 40px;
    }

    .news__list__small .item .item__head {
        border-radius: 24px;
    }

    .news__list__big .item .item__head {
        height: 100%;
        border-radius: 40px;
    }

    .news__list__big .item .item__body .item__title {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 32px;
        font-weight: 600;
        line-height: 38px;
        text-align: left;
        color: white;

    }

    .news__list__small .item .item__head .item__title {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 24px;
        font-weight: 600;
        line-height: 30px;
        text-align: left;
        color: #000000;
    }

    .news__list__small .item .item__head .item__date {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
        color: #000000;
    }

    .os_btn_news_detail {
        display: flex;
        /* justify-content: center; */
        align-items: center;
    }

    .os_btn_news_detail-2 {
        display: flex;
        /* justify-content: center; */
        align-items: center;
    }

    .os_btn_news_detail a {
        width: 137px;
        height: 48px;
        margin-right: 8px;
        align-items: center;
        /* padding: 12px 24px 12px 24px; */
        /* gap: 10px; */
        border-radius: 100px;
        /* opacity: 0px; */
        background: var(--Alias-Button-Primary-Bluex, #DEF3FF);
        display: flex;
        justify-content: center;
        color: #0072AB;
        z-index: 99;
    }

    .os_btn_news_detail img {
        z-index: 99;
    }

    .os_btn_news_detail-2 a {
        /* width: 137px;
        height: 48px; */
        margin-right: 8px;
        align-items: center;
        /* padding: 12px 24px 12px 24px; */
        /* gap: 10px; */
        border-radius: 100px;
        /* opacity: 0px; */
        /* background: var(--Alias-Button-Primary-Bluex, #DEF3FF); */
        display: flex;
        /* justify-content: center; */
        color: #0072AB;
        z-index: 99;
    }

    .os_btn_news_detail-2 img {
        z-index: 99;
    }

    .news__list__small {
        padding: 0px;
    }

    @media screen and (max-width: 767px) {
        .news__list__big {
            padding: 0;
            /* height: 420px; */
            margin-bottom: 32px;
        }

        .news__list__big .item__body {
            padding: 32px;
        }

        .news__list__small .item {
            display: block;
        }

        .news__list__small .item__head {
            width: 100%;
            height: 283px;
        }

        .news__list__small .item__head img {
            height: 100%;
        }

        .aspect-ratio>* *,
        .news__list__small .item__head>* *,
        .experienced__list .item__head>* * {
            max-height: 100%;
            height: 100%;
            /* margin-bottom: 40px */
        }

        .news__list__small .item__body .item__title {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-size: 24px;
            font-weight: 600;
            line-height: 30px;
            text-align: left;
            margin-bottom: 16px;
        }

        .news__list__small .item__body .item__date {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            text-align: left;
            margin-bottom: 16px;

        }

        .os_header_news {
            display: block;
        }

        .os_header_news .nav {
            display: block;
            width: 60%;
            margin-bottom: 24px;
        }

        .os_header_news h2 {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-size: 24px;
            font-weight: 500;
            line-height: 30px;

        }
    }
</style>