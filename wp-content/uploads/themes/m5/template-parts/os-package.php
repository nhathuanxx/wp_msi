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
                    <div class="box-package <?php echo $class_name; ?> <?php echo get_sub_field('template_name'); ?> swiper-slide" style="background-image: url('<?php echo esc_url($background_image); ?>'); background-size: cover; background-position: center;">
                        <a class="arrow-package" href=""><img class="" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/arrow_white_btn.svg'); ?>"></a>
                        <div class="package-content">
                            <div class="package-title">
                                <div class="package-title-main">
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                                <div class="package-title-sub">
                                    <?php echo get_sub_field('sub-title'); ?>
                                </div>
                            </div>
                            <div class="package-btn-group">
                                <a href="tel:<?php echo get_field('hotline', pll_current_language('slug')); ?>" class="book-now">
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

    .box-package {
        transition: all 0.3s ease;
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

    .box-package:hover {
        flex: 6;
    }

    .box-package:not(:hover) .primary-box {
        flex: 3;
    }

    .secondary-box:hover .primary-box {
        flex: 3 !important;
    }

    .box-package {
        border-radius: 40px;
        padding: 32px;
        text-align: left;
        display: flex;
        align-items: end;
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

    .package-content {
        gap: 16px;
        width: 100%;
    }

    .package-content .package-title-main {
        font-family: 'Be Vietnam Pro', sans-serif;
        color: white;
        font-size: 32px;
        font-weight: 600;
        line-height: 38px;
        text-align: left;

    }

    .package-content .package-title-sub {
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

    @media screen and (max-width: 767px) {
        .flex-container {
            display: grid;
            height: auto;
            gap: 24px;
        }

        .os-service-package {
            padding: 54px 0px;
        }

        .box-package {
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