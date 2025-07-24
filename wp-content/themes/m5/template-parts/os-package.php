<div class="os-service-package bg-f9">
    <div class="container">
        <?php if (get_field('package_item', pll_current_language('slug'))) : ?>
            <div class="flex-container">
                <?php
                $counter = 0;
                while (the_repeater_field('package_item', pll_current_language('slug'))) :
                    $background_image = get_sub_field('background_image');
                    $class_name = ($counter == 0) ? 'primary-box' : 'secondary-box';
                ?>
                    <div class="os-box-package <?php echo $class_name; ?> <?php echo get_sub_field('template_name'); ?> swiper-slide" style="background-image: url('<?php echo esc_url($background_image); ?>'); background-size: cover; background-position: center;">
                    <div class="os-overlay" style="display: none;"></div>
                        <a class="arrow-package" href=""><img class="" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/arrow_white_btn.svg'); ?>"></a>
                        <div class="os-package-content">
                            <div class="package-title">
                                <div class="package-title-main">
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                                <div class="package-title-sub">
                                    <?php echo get_sub_field('sub-title'); ?>
                                </div>
                            </div>
                            <div class="package-btn-group">
                                <a href="tel:<?php echo get_field('hotline', pll_current_language('slug')); ?>" class="book-now book-calendar">
                                    <?php
                                    if (pll_current_language('slug') == 'vi') {
                                        echo 'Đặt ngay';
                                    }
                                    if (pll_current_language('slug') == 'en') {
                                        echo 'Book now';
                                    }
                                    if (pll_current_language('slug') == 'zh') {
                                        echo '立即预订';
                                    }
                                    ?>
                                </a>
                                <a href="tel:<?php echo get_field('hotline', pll_current_language('slug')); ?>" class="learn-more">
                                    <?php
                                    if (pll_current_language('slug') == 'vi') {
                                        echo 'Xem thêm';
                                    }
                                    if (pll_current_language('slug') == 'en') {
                                        echo 'Learn more';
                                    }
                                    if (pll_current_language('slug') == 'zh') {
                                        echo '查看更多';
                                    }
                                    ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                    $counter++;
                endwhile;
                ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<style>
    .os-service-package {
        padding: 200px 0px;
        background-color: white;
    }


    .flex-container {
        display: flex;
        gap: 24px;
        height: 700px;
    }

    .os-box-package {
        transition: all 0.5s ease;
        padding: 10px;
        text-align: center;
        background-color: lightgray;
    }

    .primary-box {
        flex: 6;
    }

    .secondary-box {
        flex: 3;
    }

    .os-box-package:hover {
        flex: 6;
    }

    .os-box-package:not(:hover) .primary-box {
        flex: 3;
    }

    .secondary-box:hover .primary-box {
        flex: 3 !important;
    }

    .os-box-package {
        border-radius: 40px;
        padding: 0px;
        text-align: left;
        display: flex;
        align-items: end;
        overflow: hidden;
    }

    .arrow-package {
        position: absolute;
        top: 32px;
        right: 32px;
    }

    .arrow-package img {
        width: 44px;
        height: 44px;
    }

    .os-package-content {
        gap: 16px;
        width: 100%;
        padding: 32px;
        z-index: 99;
    }

    .os-package-content .package-title-main {
        font-family: 'Be Vietnam Pro', sans-serif;
        color: white;
        font-size: 32px;
        font-weight: 600;
        line-height: 38px;
        text-align: left;

    }

    .os-package-content .package-title-sub {
        font-family: 'Be Vietnam Pro', sans-serif;
        color: white;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;


    }

    .package-btn-group {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        margin-top: 16px;
    }

    .book-now,
    .learn-more {
        width: 50%;
        height: 48px;
        border-radius: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Be Vietnam Pro', sans-serif;
        color: white !important;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
        cursor: pointer;
    }

    .book-now {
        background: var(--Alias-Button-Primary-Blue, #00ACEE);
    }

    .learn-more {
        background: var(--Alias-Button-Primary-Pink, #E50C75);

    }
    .os-box-package .os-overlay{
        position: absolute;
    }

    .os-box-package:hover .os-overlay{
        display: block !important;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        transition: 0.5s;
    }

    @media screen and (min-width: 1200px) {
        .secondary-box .os-package-content .package-title-sub{
            display: none;
        }
        .os-box-package:hover .package-title-sub{
            display: block;
            transition: 0.5s;
        }

    }

    @media screen and (max-width: 767px) {
        .flex-container {
            display: grid;
            height: auto;
            gap: 24px;
        }

        .os-service-package {
            padding: 54px 0px;
        }

        .os-box-package {
            height: 500px;
        }

        .package-title-main {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-size: 32px;
            font-weight: 600;
            line-height: 38px;
            text-align: left;

        }
        .package-title-sub{
            display: none;
        }
    }
</style>