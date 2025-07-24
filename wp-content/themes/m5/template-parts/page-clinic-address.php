<?php
/**
 * Template Name: Page Clinic Address
 *
 * @since 1.0.0
 * @author Kenji
 */

get_header();
$url = get_template_directory_uri();
?>
<div class="page-clinic-address">
    <div class="clinic-nearby-u">
        <div class="container">
            <div class="clinic-nearby-u__header d-flex justify-content-between align-items-center">
                <div class="clinic-nearby-u__header_title">
                    <?php
                    if (pll_current_language('slug') == 'vi') {
                        echo 'Phòng Khám Gần Bạn';
                    }
                    if (pll_current_language('slug') == 'en') {
                        echo 'Clinic NearBy You';
                    }
                    if (pll_current_language('slug') == 'zh') {
                        echo '诊所科';
                    }
                    ?>
                </div>
            </div>
            <div class="clinic-nearby-u__select d-flex justify-content-between align-items-center">
                <span class="clinic-nearby-u__select-city">
                    <select id="city">
                        <option value="">Chọn 1 thành phố</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Nghệ An">Nghệ An</option>
                        <option value="Hà Tĩnh">Hà Tĩnh</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Nha Trang">Nha Trang</option>
                        <option value="Hồ Chí Minh">Tp Hồ Chí Minh</option>
                        <option value="Bình Dương">Bình Dương</option>
                        <option value="Đồng Nai">Đồng Nai</option>
                        <option value="Cần Thơ">Cần Thơ</option>
                    </select>
                </span>
            </div>
            <div class="row">
                <?php if (get_field('clinic_nearby_you_v2', pll_current_language('slug'))): ?>
                    <?php while (the_repeater_field('clinic_nearby_you_v2', pll_current_language('slug'))): ?>
                        <?php
                        $city = get_sub_field('city'); // Lấy thành phố
                        while (the_repeater_field('content')): ?>
                            <div class="clinic-nearby-u-slider col-12 col-sm-12 col-lg-6 col-xl-4"
                                data-city="<?php echo $city; ?>">
                                <div class="clinic-nearby-u-slider__item">
                                    <a href="#map_clinic" class="clinic-nearby-u-slider__item-map" data-map="<?php echo get_sub_field('map_embed'); ?>">
                                        <div
                                            class="clinic-nearby-u-slider__item_img">
                                            <figure>
                                                <img src="<?php echo esc_url(get_sub_field('image')); ?>"
                                                    alt="<?php echo get_sub_field('name'); ?>" />
                                            </figure>
                                        </div>
                                        <div
                                            class="clinic-nearby-u-slider__item_content">
                                            <div class="clinic-nearby-u-slider__item_title">
                                                <?php echo get_sub_field('name'); ?>
                                            </div>
                                            <div class="clinic-nearby-u-slider__item_subtitle">
                                                <div class="clinic-nearby-u-slider__item_info d-flex align-items-start">
                                                    <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon-marked.svg"
                                                        alt="icon-marked">
                                                    <span><?php echo get_sub_field('address'); ?></span>
                                                </div>
                                                <div class="clinic-nearby-u-slider__item_info d-flex align-items-start">
                                                    <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon-time.svg"
                                                        alt="icon-marked">
                                                    <span><?php echo get_sub_field('on_time'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="clinic-nearby-u-slider__item_action d-flex justify-content-start">
                                        <a href="tel:<?php echo get_sub_field('number_phone'); ?>"
                                            class="clinic-nearby-u-slider__item_action-item clinic-nearby-u-slider__item_action-call">
                                            <?php
                                            if (pll_current_language('slug') == 'vi') {
                                                echo 'Gọi điện';
                                            } elseif (pll_current_language('slug') == 'en') {
                                                echo 'Call now';
                                            } elseif (pll_current_language('slug') == 'zh') {
                                                echo '立即致电';
                                            }
                                            ?>
                                        </a>
                                        <a href="javascript:;"
                                            class="clinic-nearby-u-slider__item_action-item clinic-nearby-u-slider__item_action-book book-calendar" data-clinic="<?php echo get_sub_field('value_form_contact');?>" >
                                            <?php
                                            if (pll_current_language('slug') == 'vi') {
                                                echo 'Đặt lịch';
                                            } elseif (pll_current_language('slug') == 'en') {
                                                echo 'Book now';
                                            } elseif (pll_current_language('slug') == 'zh') {
                                                echo '立即预订';
                                            }
                                            ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>

    <div class="page-clinic-address__map" id="map_clinic">
        <div class="container">
            <div class="row">
                <div class="col-12 pl-0">
                    <iframe id="map_frame"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8250797010614!2d105.7894751506404!3d21.039683885923726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab379b922995%3A0x35dafdcd8bab9392!2sMarie%20Stopes%20Vi%E1%BB%87t%20Nam!5e0!3m2!1svi!2s!4v1595851822503!5m2!1svi!2s"
                        width="600" height="677" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <?php require get_template_directory() . '/template-parts/os-partner-logo-2.php'; ?>
    <?php require get_template_directory() . '/template-parts/content-us-now.php'; ?>
</div>
<?php get_footer(); ?>


<style>
    #pagetitle {
        display: none;
    }

    .clinic-nearby-u {
        padding-top: 64px;
        padding-bottom: 72px
    }

    .clinic-nearby-u-slider {
        margin-top: 72px;
    }

    .clinic-nearby-u-slider .clinic-nearby-u-slider__item {
        margin-left: 0px;
        margin-right: 0px;
    }

    .clinic-nearby-u-slider .clinic-nearby-u-slider__item {
        padding-left: 13px;
        padding-right: 13px;
    }

    .clinic-nearby-u-slider .clinic-nearby-u-slider__item .clinic-nearby-u-slider__item_img img {
        min-height: 280px;
    }

    .page-clinic-address__map {
        position: relative;
        background-color: #fff;
        margin-bottom: 160px;
    }

    @media screen and (min-width: 991px) and (max-width: 1199px) {
        .clinic-nearby-u {
            padding-top: 48px;
            padding-bottom: 48px
        }

        .clinic-nearby-u-slider {
            margin-top: 54px;
        }

        .clinic-nearby-u-slider .clinic-nearby-u-slider__item {
            margin-left: 0px;
            margin-right: 0px;
            padding-left: 5px;
            padding-right: 5px;
        }
    }

    @media screen and (max-width: 991px) {
        .clinic-nearby-u {
            padding-top: 24px;
            padding-bottom: 24px
        }

        .clinic-nearby-u-slider {
            margin-top: 40px;
        }

        .clinic-nearby-u-slider .clinic-nearby-u-slider__item .clinic-nearby-u-slider__item_content .clinic-nearby-u-slider__item_title {
            height: auto;
            max-height: 60px;
        }
    }

    @media screen and (max-width: 768px) {
        .clinic-nearby-u-slider .clinic-nearby-u-slider__item {
            padding-left: 0px;
            padding-right: 0px;
        }
        
        .page-clinic-address__map {
            margin-bottom: 40px;
        }
    }
</style>