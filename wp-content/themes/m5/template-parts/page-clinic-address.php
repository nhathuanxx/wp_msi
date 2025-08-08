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
<div class="wp-block-msi-blocks-search-by-service-or-location-uk alignfull">
    <div class="container-wide">
        <div class="content-container">
            <h1>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Phòng khám của chúng tôi</font>
                </font>
            </h1>
            <p>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Để khám phá các phòng khám và dịch vụ của chúng tôi trên khắp Việt Ban, hãy chọn một thành phố </font>
                </font>
                <!-- <br>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">địa chỉ hoặc mã bưu điện và chọn một tùy chọn từ danh sách thả xuống.</font>
                </font> -->
            </p>
            <div class="search-section">
                <div class="input-section"><select id="city" fdprocessedid="i1owaj">
                        <!-- <option value="all">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Dịch vụ</font>
                            </font>
                        </option>
                        <option value="10" data-show-gest-calc="true">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Phá thai</font>
                            </font>
                        </option>
                        <option value="11" data-show-gest-calc="false">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Tránh thai</font>
                            </font>
                        </option>
                        <option value="89" data-show-gest-calc="false">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Thắt ống dẫn tinh</font>
                            </font>
                        </option> -->
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
                    <!-- <div class="input_box"><img decoding="async" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE5IDE5TDE0LjY1IDE0LjY1TTE3IDlDMTcgMTMuNDE4MyAxMy40MTgzIDE3IDkgMTdDNC41ODE3MiAxNyAxIDEzLjQxODMgMSA5QzEgNC41ODE3MiA0LjU4MTcyIDEgOSAxQzEzLjQxODMgMSAxNyA0LjU4MTcyIDE3IDlaIiBzdHJva2U9IiM4Njg1ODUiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=" alt="Tìm kiếm"><input type="text" placeholder="Mã bưu điện của bác sĩ đa khoa, bất kỳ địa điểm hoặc phòng khám nào" id="search-input" autocomplete="off" fdprocessedid="se327m" class="pac-target-input"><img decoding="async" id="reset-btn" class="hidden" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0IiByeD0iMTIiIGZpbGw9IiNGM0Y0RUYiLz4KPHBhdGggZD0iTTE1IDlMOSAxNU05IDlMMTUgMTUiIHN0cm9rZT0iIzI4MzU3MyIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg==" alt="Đặt lại đầu vào"></div><button id="map-search-button" onmouseover="document.getElementById(&quot;search-location-magnifier&quot;).src=&quot;data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE5IDE5TDE0LjY1IDE0LjY1TTE3IDlDMTcgMTMuNDE4MyAxMy40MTgzIDE3IDkgMTdDNC41ODE3MiAxNyAxIDEzLjQxODMgMSA5QzEgNC41ODE3MiA0LjU4MTcyIDEgOSAxQzEzLjQxODMgMSAxNyA0LjU4MTcyIDE3IDlaIiBzdHJva2U9IiMyODM1NzMiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=&quot;" onmouseout="document.getElementById(&quot;search-location-magnifier&quot;).src=&quot;data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE5IDE5TDE0LjY1IDE0LjY1TTE3IDlDMTcgMTMuNDE4MyAxMy40MTgzIDE3IDkgMTdDNC41ODE3MiAxNyAxIDEzLjQxODMgMSA5QzEgNC41ODE3MiA0LjU4MTcyIDEgOSAxQzEzLjQxODMgMSAxNyA0LjU4MTcyIDE3IDlaIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=&quot;" fdprocessedid="yqfm2"><img decoding="async" id="search-location-magnifier" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE5IDE5TDE0LjY1IDE0LjY1TTE3IDlDMTcgMTMuNDE4MyAxMy40MTgzIDE3IDkgMTdDNC41ODE3MiAxNyAxIDEzLjQxODMgMSA5QzEgNC41ODE3MiA0LjU4MTcyIDEgOSAxQzEzLjQxODMgMSAxNyA0LjU4MTcyIDE3IDlaIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=" alt="Tìm kiếm vị trí"><span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Tìm kiếm</font>
                            </font>
                        </span></button> -->
                </div>
                <!-- <p class="enter-message not-visible">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Vui lòng đảm bảo bạn đã chọn một vị trí từ danh sách thả xuống để xem các phòng khám ở khu vực của bạn.</font>
                    </font>
                </p> -->
            </div>
        </div><img decoding="async" class="bg-image lazyloaded" src="https://www.msichoices.org.uk/wp-content/uploads/2023/08/MSI-London-Clinic.png.webp" alt="Phòng khám MSI London" data-src="https://www.msichoices.org.uk/wp-content/uploads/2023/08/MSI-London-Clinic.png.webp" data-eio-rwidth="560" data-eio-rheight="1160" data-src-webp="https://www.msichoices.org.uk/wp-content/uploads/2023/08/MSI-London-Clinic.png.webp"><noscript><img decoding="async" class="bg-image" src="https://www.msichoices.org.uk/wp-content/uploads/2023/08/MSI-London-Clinic.png" alt="MSI London Clinic" data-eio="l" /></noscript>
    </div>
</div>
<div class="phong-kham-container">
    <div class="phong-kham-content">
<div class="phong-kham-left">
  <div class="danh-sach-phong-kham">
     <?php if (get_field('clinic_nearby_you_v2', pll_current_language('slug'))): ?>
                    <?php while (the_repeater_field('clinic_nearby_you_v2', pll_current_language('slug'))): ?>
                        <?php
                        $city = get_sub_field('city');
                        while (the_repeater_field('content')): ?>
                            <div class="clinic-nearby-u-slider col-12"
                                data-city="<?php echo $city; ?>">
                                <div class="clinic-nearby-u-slider__item">
                                    <a href="#map_clinic" class="clinic-nearby-u-slider__item-map" data-map="<?php echo get_sub_field('map_embed'); ?>">
                                        <div
                                            class="clinic-nearby-u-slider__item_img">
                                            <!-- <figure>
                                                <img src="<?php echo esc_url(get_sub_field('image')); ?>"
                                                    alt="<?php echo get_sub_field('name'); ?>" />
                                            </figure> -->
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
                                    <!-- <div class="clinic-nearby-u-slider__item_action d-flex justify-content-start">
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
                                            class="clinic-nearby-u-slider__item_action-item clinic-nearby-u-slider__item_action-book book-calendar" data-clinic="<?php echo get_sub_field('value_form_contact'); ?>">
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
                                    </div> -->
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
  </div>
    </div>
    <div class="phong-kham-right">
    <iframe id="map_frame"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8250797010614!2d105.7894751506404!3d21.039683885923726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab379b922995%3A0x35dafdcd8bab9392!2sMarie%20Stopes%20Vi%E1%BB%87t%20Nam!5e0!3m2!1svi!2s!4v1595851822503!5m2!1svi!2s"
                        width="600" height="677" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
    </div>
    </div>

</div>
<!-- <div class="page-clinic-address">
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
                                            class="clinic-nearby-u-slider__item_action-item clinic-nearby-u-slider__item_action-book book-calendar" data-clinic="<?php echo get_sub_field('value_form_contact'); ?>">
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
</div> -->
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

<style>
    /* .has-global-padding > .alignfull {
    margin-right: calc(var(--wp--style--root--padding-right) * -1);
    margin-left: calc(var(--wp--style--root--padding-left) * -1);
} */
    .wp-block-msi-blocks-search-by-service-or-location-uk .container-wide {
        display: flex;
        justify-content: center;
        padding: 0 !important;
        width: 100%;
    }

    .container-wide {
        max-width: 1335px;
        margin: 0 auto;
    }

    .wp-block-msi-blocks-search-by-service-or-location-uk .container-wide .content-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 40px 0;
        row-gap: 1rem;
        width: 100%;
    }

    .wp-block-msi-blocks-search-by-service-or-location-uk h1,
    .wp-block-msi-blocks-search-by-service-or-location-uk p {
        max-width: 800px;
    }

    h1 {
        font-size: 48px;
        line-height: 56px;
        color: #283573;
        font-family: 'Roboto', sans-serif;
        font-style: normal;
        font-weight: 700;
        text-transform: none;
    }

    .wp-block-msi-blocks-search-by-service-or-location-uk p {
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        line-height: 32px;
        color: #283573;
    }

    .wp-block-msi-blocks-search-by-service-or-location-uk {
        background-color: #EDF7FD;
        color: #283573;
        display: flex;
        gap: 2rem;
        justify-content: center;
        min-height: 500px;
        position: relative;
    }

    .wp-block-msi-blocks-search-by-service-or-location-uk .search-section select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #FFFFFF;
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iOCIgdmlld0JveD0iMCAwIDE0IDgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xIDFMNyA3TDEzIDEiIHN0cm9rZT0iIzI4MzU3MyIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg==) !important;
        background-position: calc(100% - 25px) 50% !important;
        background-repeat: no-repeat !important;
        background-size: unset !important;
        border: 1px solid #283573;
        border-radius: 4px;
        cursor: pointer;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
        padding: 16px 72px 16px 24px;
    }

    .wp-block-msi-blocks-search-by-service-or-location-uk .bg-image {
        height: 100%;
        max-width: 250px;
        -o-object-fit: cover;
        object-fit: cover;
    }
    .phong-kham-container{
        background-color: white;
        padding: 40px 0px;
    }
    .phong-kham-content{
        max-width: 1335px;
        margin: 0 auto;
        display: flex;
        gap: 24px;
        align-items: center;
    }
    .phong-kham-content .phong-kham-left{
        width: 50%;

    }
    .phong-kham-content .phong-kham-right{
width: 50%;
    position: relative;
    overflow: hidden;
        border-radius: 10px;
    height: 800px;
    }
    .phong-kham-content .phong-kham-right iframe{
        width: 100%;
        height: 100%;
        border: none;
    }
.danh-sach-phong-kham{
    height: 800px;
    overflow-y: scroll;
}

/* tiep tuc */
.clinic-nearby-u-slider__item{
    border: 1px solid #D7D7D7;
    border-radius: 10px;
    display: flex
;
padding: 20px 24px;
    flex-direction: column;
}
.clinic-nearby-u-slider .clinic-nearby-u-slider__item .clinic-nearby-u-slider__item_content{
    margin: 0px;
}
.clinic-nearby-u-slider{
    margin: 0px;
    margin-bottom:32px
}
.clinic-nearby-u-slider__item_title{
    font-size: 24px;
    line-height: 32px;
        color: #283573 !important
;
    font-family: "Roboto", sans-serif;
    font-style: normal;
    font-weight: 700;
    text-transform: none;
}
.clinic-nearby-u-slider .clinic-nearby-u-slider__item .clinic-nearby-u-slider__item_content .clinic-nearby-u-slider__item_subtitle .clinic-nearby-u-slider__item_info span {
        color: #283573 !important;
    font-family: "Roboto", sans-serif;
    font-size: 18px;
    font-weight: 400;
    letter-spacing: normal;
    line-height: 28px;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const citySelect = document.getElementById('city');
        const clinicItems = document.querySelectorAll('.clinic-nearby-u-slider');

        if (!citySelect || clinicItems.length === 0) return;

        function filterClinics(city) {
            clinicItems.forEach(function(item) {
                if (!city || item.dataset.city === city) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        function updateURLParam(city) {
            const url = new URL(window.location.href);
            if (city) {
                url.searchParams.set('thanh-pho', city);
            } else {
                url.searchParams.delete('thanh-pho');
            }
            window.history.replaceState({}, '', url.toString());
        }

        // 1. Khi trang được tải: đọc từ query string và lọc
        const params = new URLSearchParams(window.location.search);
        const cityFromURL = params.get('thanh-pho');
        if (cityFromURL) {
            citySelect.value = cityFromURL;
            filterClinics(cityFromURL);
        } else {
            filterClinics(''); // Hiển thị tất cả nếu không có param
        }

        // 2. Khi người dùng chọn thành phố
        citySelect.addEventListener('change', function() {
            const selectedCity = this.value;
            filterClinics(selectedCity);
            updateURLParam(selectedCity);
        });
    });
</script>