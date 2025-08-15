<?php
/*
* Template Name: Home Page
*/
get_header(); ?>

<main class="main-content home-page">
    <div class="slider-main home-banner">
        <div class="sun-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "fade": true, "dots": false, "autoplay": true, "infinite": true, "autoplaySpeed": 3000}'>
            <?php if (get_field('banner', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('banner', pll_current_language('slug'))) :
                ?>
                    <div class="item">
                        <figure class="item__img margin-0 home-page-img">
                            <a href="<?php echo get_sub_field('cta_link', pll_current_language('slug')); ?>">
                                <img class="home_slider_banner_desktop" src="<?php echo get_sub_field('banner_image', pll_current_language('slug')); ?>" alt="slider banner">
                            </a>
                        </figure>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <img id="scrollBannerBtn" decoding="async" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODAiIGhlaWdodD0iODAiIHZpZXdCb3g9IjAgMCA4MCA4MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iNDAiIGN5PSI0MCIgcj0iNDAiIGZpbGw9IiMyODM1NzMiLz4KPHBhdGggZD0iTTQwIDMyVjQ4TTQwIDQ4TDQ2IDQyTTQwIDQ4TDM0IDQyIiBzdHJva2U9IiNENkU3RjciIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=" alt="Cuộn xuống" class="scroll-down-arrow">

        <div class="banner-home-page-content-left">
            <div class="banner-title">
                <?php the_field('banner_description', pll_current_language('slug')); ?>
            </div>
            <?php
            $lang = pll_current_language('slug');

            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 6,
                'lang'           => $lang,
            );
            $latest_posts = new WP_Query($args);
            ?>

            <div class="dropdown">
                <div class="select">
                    <p>
                        <?php if ($lang === 'vi') : ?>
                            Bạn không biết nên bắt đầu từ đâu?
                        <?php else : ?>
                            Not sure where to start?
                        <?php endif; ?>
                    </p>
                </div>
                <div class="options hide">
                    <?php if ($latest_posts->have_posts()) : ?>
                        <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                            <div class="wp-block-msi-blocks-dropdown-option-uk">
                                <a href="<?php the_permalink(); ?>" target="_self" rel="noopener">
                                    <p><?php the_title(); ?></p>
                                </a>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <div class="wp-block-msi-blocks-dropdown-option-uk">
                            <p>
                                <?php echo ($lang === 'vi') ? 'Không có bài viết nào.' : 'No posts found.'; ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php require get_template_directory() . '/template-parts/general-introduction.php'; ?>
    <div class="home-service-container" id="homeServiceContainer">
        <div class="home-service-content">
            <div class="home-service-title">
                <?php the_field('category_banner_title', pll_current_language('slug')); ?>
            </div>
            <?php if (have_rows('category_banner', pll_current_language('slug'))): ?>
                <?php
                $banners = [];
                while (have_rows('category_banner', pll_current_language('slug'))) : the_row();
                    $banners[] = [
                        'image' => get_sub_field('image'),
                        'title' => get_sub_field('title'),
                        'slug'  => get_sub_field('slug')
                    ];
                endwhile;
                ?>

                <?php if (count($banners) >= 3): ?>
                    <div class="home-service-top">
                        <div class="home-service-top-left" style="background-image: url('<?php echo esc_url($banners[0]['image']['url']); ?>');">
                            <div class="home-service-button">
                                <a href="<?php echo esc_url(home_url('/' . $banners[0]['slug'])); ?>">
                                    <?php echo esc_html($banners[0]['title']); ?>
                                </a>
                            </div>
                        </div>
                        <div class="home-service-top-right" style="background-image: url('<?php echo esc_url($banners[1]['image']['url']); ?>');">
                            <div class="home-service-button">
                                <a href="<?php echo esc_url(home_url('/' . $banners[1]['slug'])); ?>">
                                    <?php echo esc_html($banners[1]['title']); ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="home-service-bottom" style="background-image: url('<?php echo esc_url($banners[2]['image']['url']); ?>');">
                        <div class="home-service-button">
                            <a href="<?php echo esc_url(home_url('/' . $banners[2]['slug'])); ?>">
                                <?php echo esc_html($banners[2]['title']); ?>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php require get_template_directory() . '/template-parts/customer-story.php'; ?>

    <?php require get_template_directory() . '/template-parts/short-story.php'; ?>

    <div class="about-us-container">
        <div class="about-us-content">
            <div class="about-us-content-left">
                <div class="about-us-title">
                    <?php the_field('about_us_title', pll_current_language('slug')); ?>
                </div>
                <div class="about-us-subtitle">
                    <?php the_field('about_us_description', pll_current_language('slug')); ?>
                </div>
                <div class="about-us-read-more about-us-read-more-desktop">
                    <?php echo (pll_current_language('slug') === 'vi') ? 'ĐỌC THÊM' : 'READ MORE'; ?>
                </div>
            </div>
            <div class="about-us-content-right">
                <div class="about-us-img-1">
                    <!-- <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/about-us-1.webp"
                        alt="about-us-1"> -->
                    <?php
                    $image = get_field('about_us_banner_1', pll_current_language('slug'));
                    if ($image):
                    ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?: 'about us'); ?>">
                    <?php endif; ?>
                </div>
                <div class="about-us-img-2">
                    <!-- <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/about-us-2.webp"
                        alt="about-us-2"> -->
                    <?php
                    $image = get_field('about_us_banner_2', pll_current_language('slug'));
                    if ($image):
                    ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?: 'about us'); ?>">
                    <?php endif; ?>
                </div>
            </div>

        </div>
        <div class="about-us-read-more about-us-read-more-mobile">
            <?php echo (pll_current_language('slug') === 'vi') ? 'ĐỌC THÊM' : 'READ MORE'; ?>
        </div>
    </div>
    <?php require get_template_directory() . '/template-parts/os-partner-logo.php'; ?>

    <div class="intl-activity-container">
        <div class="intl-activity-content">
            <?php
            $lang_slug = pll_current_language('slug');

            if (have_rows('events', $lang_slug)) :
                while (have_rows('events', $lang_slug)) : the_row();
                    $title = get_sub_field('title');
                    $image = get_sub_field('image');
                    $slug  = get_sub_field('slug');

                    $image_url = is_array($image) ? $image['url'] : $image;
                    $url = esc_url(home_url($slug));
            ?>
                    <div class="intl-activity-item" style="background-image: url('<?php echo esc_url($image_url); ?>');">
                        <div class="home-service-button">
                            <a href="<?php echo $url; ?>">
                                <?php echo esc_html($title); ?>
                            </a>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>

    <!-- <div class="slider-main home-banner">
        <div class="sun-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "fade": true, "dots": false, "autoplay": true, "infinite": true, "autoplaySpeed": 5000}'>
            <?php if (get_field('banner', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('banner', pll_current_language('slug'))) :
                ?>
                    <div class="item">
                        <figure class="item__img margin-0 home-page-img">
                            <a href="<?php echo get_sub_field('cta_link', pll_current_language('slug')); ?>">
                                <?php if (wp_is_mobile()) { ?>
                                    <img class="home_slider_banner_mobile" src="<?php echo get_sub_field('home_mobile_banner', pll_current_language('slug')); ?>" alt="slider banner">
                                <?php } else { ?>
                                    <img class="home_slider_banner_desktop" src="<?php echo get_sub_field('banner_image', pll_current_language('slug')); ?>" alt="slider banner">
                                <?php } ?>
                            </a>
                        </figure>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div> -->

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
    <!-- <?php require get_template_directory() . '/template-parts/clinic-address.php'; ?> -->
    <!-- <?php require get_template_directory() . '/template-parts/care-service.php'; ?> -->

    <!-- <?php require get_template_directory() . '/template-parts/os-package.php'; ?> -->

    <!-- <div class="news bg-f9 os_news">
        <div class="container">

            <?php if (get_field('news_section', pll_current_language('slug'))) : ?>
                <?php
                while (the_repeater_field('news_section', pll_current_language('slug'))) :
                    $home_select_category_tab_1 = get_sub_field('home_select_category_tab_1');
                    $home_select_category_tab_2 = get_sub_field('home_select_category_tab_2');


                ?>
                    <div class="os_header_news">
                        <h2>
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
                    </div>
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
                                                        <img style="cursor:pointer" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/arrow_circle_right.svg'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div>
                                <?php
                                $post_args_tab_2 = array(
                                    'posts_per_page'      => 3,
                                    'category__in'         => $home_select_category_tab_1,
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
                                                        <img style="cursor:pointer" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/arrow_circle_right.svg'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
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
                                                        <img style="cursor:pointer" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/arrow_circle_right.svg'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div>
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
                                                        <img style="cursor:pointer" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/arrow_circle_right.svg'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                          
                        </div>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div> -->
    <!-- <?php require get_template_directory() . '/template-parts/address.php'; ?> -->
    <!-- <div class="accordion-group">
        <h2>Y tế từ xa</h2>
        <div class="accordion-item">
            <button class="accordion-header">Y tế từ xa</button>
            <div class="accordion-content">
                <p>Nội dung Y tế từ xa...</p>
            </div>
        </div>
    </div>

    <div class="accordion-group">
        <h2>Xử lý dữ liệu về bạn</h2>
        <div class="accordion-item">
            <button class="accordion-header">Chúng tôi thu thập thông tin gì?</button>
            <div class="accordion-content">
                <p>Nội dung...</p>
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-header">Chúng tôi thu thập thông tin ở đâu?</button>
            <div class="accordion-content">
                <p>Nội dung...</p>
            </div>
        </div>
    </div> -->
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
        display: flex;
        align-items: center;
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
        margin-bottom: 24px;
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
        align-items: center;
    }

    .os_btn_news_detail a {
        width: 137px;
        height: 48px;
        margin-right: 8px;
        align-items: center;
        border-radius: 100px;
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
        margin-right: 8px;
        align-items: center;
        border-radius: 100px;
        display: flex;
        color: #0072AB;
        z-index: 99;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
        text-align: left;
        color: var(--Alias-Button-Primary-DarkBlue, #0072AB);

    }

    .news__list__small .item__date {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
        color: #000000;
        padding: 8px 0px;
    }

    .os_btn_news_detail-2 img {
        z-index: 99;
    }

    .news__list__small {
        padding: 0px;
    }

    .os_news .news__list__small .item__title a {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 24px;
        font-weight: 600;
        line-height: 30px;
        text-align: left;
        color: #000000;
    }

    .os_news .news__list__big {
        padding: 0px;
    }

    .os_news .news__list {
        display: flex;
        gap: 32px;
    }

    .os_news .os_header_news h2 {
        margin: 0px;
    }

    .os_news .os_header_news .nav-item {
        margin: 0px;
    }

    .os_news .home-tab-menu {
        display: flex;
        gap: 24px
    }

    .os_news .os_header_news {
        margin-bottom: 56px;
    }

    .os_news .container {
        padding: 0px;
    }

    .os_news {
        padding: 0px 0px 200px 0px;
        /* margin-bottom: 200px; */
    }

    .os_news .news__list {
        margin: 0px;
    }

    .os_news .news__list__small .item:not(:last-child) {
        margin-bottom: 32px;
    }

    @media screen and (max-width: 767px) {
        .os_news {
            padding: 0px 16px 54px 16px;
        }

        .os_news .news__list {
            display: block;
        }

        .news__list__big {
            padding: 0;
            /* height: 420px; */
            margin-bottom: 32px;
        }

        .news__list__big .item {
            height: auto;
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
            padding: 0px;
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

        .footer__main .footer__item__title {
            font-size: 24px;
            line-height: 30px;
        }

        .os_header_news h2 {
            margin-bottom: 24px !important;
        }

        .os_header_news .nav {
            display: flex;
            gap: 16px;
        }

        .os_news .os_header_news {
            margin-bottom: 24px;
        }

        .os_btn_news_detail a {
            margin-right: 10px;
        }

        .os_btn_news_detail a {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
            text-align: left;

        }

        .news__list__small .item .item__head {
            margin-bottom: 40px;
        }

        .news__list__small .item__body {
            width: 100%;
        }
    }

    .os_btn_news_detail a {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
        text-align: left;

    }

    .os_news .os_header_news .nav-item .nav-link {
        height: 48px;
        gap: 10px;
        border-radius: 100px;
        opacity: 0px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 500 !important;
        line-height: 24px;
        text-align: left;

    }

    .aspect-ratio>* *,
    .news__list__small .item__head>* *,
    .experienced__list .item__head>* * {
        height: 100%;
    }

    .aspect-ratio>* *,
    .news__list__small .item__head:hover img {
        transform: scale(1.1);
        transition: all 0.3s;
    }

    figure {
        height: 100% !important;
    }

    figure img {
        height: 100% !important;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropdown = document.querySelector(".dropdown");
        const select = dropdown.querySelector(".select");
        const options = dropdown.querySelector(".options");

        select.addEventListener("click", function() {
            options.classList.toggle("hide");
            options.classList.toggle("show");
        });

        // Optional: Close dropdown if click outside
        document.addEventListener("click", function(e) {
            if (!dropdown.contains(e.target)) {
                options.classList.add("hide");
                options.classList.remove("show");
            }
        });
    });
</script>
<script>
    document.getElementById('scrollBannerBtn').addEventListener('click', function() {
        document.getElementById('homeServiceContainer').scrollIntoView({
            behavior: 'smooth'
        });
    });
</script>
<script>
document.querySelector('a[href="#msiPartnerLogo"]')
    .addEventListener('click', function (e) {
        e.preventDefault();
        document.getElementById('msiPartnerLogo').scrollIntoView({
            behavior: 'smooth'
        });
    });
</script>