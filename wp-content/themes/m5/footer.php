<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<footer class="footer">
    <div class="footer__main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 footer__item">
                    <div class="footer__menu">
                        <?php if (get_field('listing_1', pll_current_language('slug'))) : ?>
                            <?php while (the_repeater_field('listing_1', pll_current_language('slug'))) : ?>
                                <p class="footer__item__title footer__item__wrap"><?php echo get_sub_field('title'); ?></p>
                                <ul>
                                    <?php while (the_repeater_field('listing')) : ?>
                                        <li>
                                            <a rel="nofollow" href="<?php echo get_sub_field('url'); ?>">
                                                <!-- <i class="icon-arrow-next"></i> -->
                                                <?php echo get_sub_field('title'); ?></a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <!-- <div class="sha-dmca" style="padding-top: 30px;">
                        <a href="//www.dmca.com/Protection/Status.aspx?ID=9f2412a9-2785-4d2b-ad28-55364d386aba" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=9f2412a9-2785-4d2b-ad28-55364d386aba"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                    </div> -->


                </div>
                <div class="col-md-4 col-lg-4 footer__item">
                    <div class="footer__menu">
                        <?php if (get_field('listing_2', pll_current_language('slug'))) : ?>
                            <?php while (the_repeater_field('listing_2', pll_current_language('slug'))) : ?>
                                <p class="footer__item__title"><?php echo get_sub_field('title'); ?></p>
                                <ul>
                                    <?php while (the_repeater_field('listing')) : ?>
                                        <li>
                                            <a href="<?php echo get_sub_field('url'); ?>">
                                                <!--  <i class="icon-arrow-next"></i> -->
                                                <?php echo get_sub_field('title'); ?></a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 footer__item">
                    <div class="footer__menu">
                        <?php if (get_field('listing_3', pll_current_language('slug'))) : ?>
                            <?php while (the_repeater_field('listing_3', pll_current_language('slug'))) : ?>
                                <p class="footer__item__title"><?php echo get_sub_field('title'); ?></p>
                                <ul>
                                    <?php while (the_repeater_field('listing')) : ?>
                                        <li>
                                            <a href="<?php echo get_sub_field('url'); ?>">
                                                <!--  <i class="icon-arrow-next"></i> -->
                                                <?php echo get_sub_field('title'); ?></a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-lg-4 footer__item">
                    <div class="footer__item__wrap footer__intro">
                        <?php if (get_field('footer_info', pll_current_language('slug'))) : ?>
                            <?php while (the_repeater_field('footer_info', pll_current_language('slug'))) : ?>
                                <p class="footer__item__title">
                                    <?php echo get_sub_field('title'); ?>
                                </p>
                                <div class="os_footer_address">
                                    <p class="os_footer_address_title">
                                        Địa chỉ trụ sở chính:
                                    </p>
                                    <p class="os_footer_address_detail">
                                        Phòng 201-202, Nhà A1, Khu Ngoại Giao Đoàn Vạn Phúc, Số 298, Đường Kim Mã, Phường Kim Mã, Quận Ba Đình, Thành phố Hà Nội, Việt Nam
                                    </p>
                                </div>
                                <div class="footer__intro__content os_footer__intro__content">
                                    <ul>
                                        <li class="item">
                                            <?php echo get_sub_field('hotline'); ?>
                                        </li>
                                        <li class="item">
                                            <?php echo get_sub_field('email'); ?>
                                        </li>
                                        <li class="item">
                                            <?php echo get_sub_field('other'); ?>
                                        </li>
                                    </ul>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div> -->
            </div>
            <!-- 
            <div class="footer__socials text-center">
                <ul class="margin-0 p-0 text-center" style="display: flex; justify-content: center;">
                    <?php if (get_field('footer_social', pll_current_language('slug'))) : ?>
                        <?php while (the_repeater_field('footer_social', pll_current_language('slug'))) : ?>
                            <li><a href="<?php echo get_sub_field('url'); ?>" target="_blank" rel="nofollow"><i
                                        class="<?php echo get_sub_field('Icon'); ?>"></i></a></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <li><a href="<?php echo get_field('option_zalo', 'option') ? get_field('option_zalo', 'option') : '#'; ?>" target="_blank" rel="nofollow">
                            <img src="https://drmarie.com.vn/wp-content/uploads/2020/09/images_qtbn3AANd9GcRufXmQn3ubJvCVk029fRAwZ_1E2ni.png"
                                alt="zalo" style="border-radius: 100%; height: 56px; width: 56px;"></a></li>
                </ul>
            </div> -->
        </div>
    </div>
    <div class="footer__bar">
        <div class="footer__bar_container">

            <div class="footer-bar-top">
                <div class="nha-tai-tro">
                    <img class="nha-tai-tro-img"
                        src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/footer-1.svg"
                        alt="icon-calendar">
                    <img class="nha-tai-tro-img"
                        src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/footer-2.svg"
                        alt="icon-calendar">
                    <img class="nha-tai-tro-img"
                        src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/footer-3.webp"
                        alt="icon-calendar">
                </div>
                <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default is-content-justification-right is-nowrap is-layout-flex wp-container-core-social-links-is-layout-1 wp-block-social-links-is-layout-flex">
                    <li style="color: #ffffff; background-color: #283573; " class="wp-social-link wp-social-link-x has-white-color wp-block-social-link"><a rel="noopener nofollow" target="_blank" href="https://twitter.com/msichoices" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                <path d="M13.982 10.622 20.54 3h-1.554l-5.693 6.618L8.745 3H3.5l6.876 10.007L3.5 21h1.554l6.012-6.989L15.868 21h5.245l-7.131-10.378Zm-2.128 2.474-.697-.997-5.543-7.93H8l4.474 6.4.697.996 5.815 8.318h-2.387l-4.745-6.787Z"></path>
                            </svg><span class="wp-block-social-link-label screen-reader-text">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">X</font>
                                </font>
                            </span></a></li>

                    <li style="color: #ffffff; background-color: #283573; " class="wp-social-link wp-social-link-facebook has-white-color wp-block-social-link"><a rel="noopener nofollow" target="_blank" href="https://www.facebook.com/MSIchoicesUK" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                <path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"></path>
                            </svg><span class="wp-block-social-link-label screen-reader-text">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Facebook</font>
                                </font>
                            </span></a></li>

                    <li style="color: #ffffff; background-color: #283573; " class="wp-social-link wp-social-link-linkedin has-white-color wp-block-social-link"><a rel="noopener nofollow" target="_blank" href="https://www.linkedin.com/company/msi-reproductive-choices-uk/" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                <path d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z"></path>
                            </svg><span class="wp-block-social-link-label screen-reader-text">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">LinkedIn</font>
                                </font>
                            </span></a></li>

                    <li style="color: #ffffff; background-color: #283573; " class="wp-social-link wp-social-link-youtube has-white-color wp-block-social-link"><a rel="noopener nofollow" target="_blank" href="https://www.youtube.com/channel/UC4Slj8aKmS2A1d_Y9qPTWmQ" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                <path d="M21.8,8.001c0,0-0.195-1.378-0.795-1.985c-0.76-0.797-1.613-0.801-2.004-0.847c-2.799-0.202-6.997-0.202-6.997-0.202 h-0.009c0,0-4.198,0-6.997,0.202C4.608,5.216,3.756,5.22,2.995,6.016C2.395,6.623,2.2,8.001,2.2,8.001S2,9.62,2,11.238v1.517 c0,1.618,0.2,3.237,0.2,3.237s0.195,1.378,0.795,1.985c0.761,0.797,1.76,0.771,2.205,0.855c1.6,0.153,6.8,0.201,6.8,0.201 s4.203-0.006,7.001-0.209c0.391-0.047,1.243-0.051,2.004-0.847c0.6-0.607,0.795-1.985,0.795-1.985s0.2-1.618,0.2-3.237v-1.517 C22,9.62,21.8,8.001,21.8,8.001z M9.935,14.594l-0.001-5.62l5.404,2.82L9.935,14.594z"></path>
                            </svg><span class="wp-block-social-link-label screen-reader-text">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">YouTube</font>
                                </font>
                            </span></a></li>

                    <li style="color: #ffffff; background-color: #283573; " class="wp-social-link wp-social-link-instagram has-white-color wp-block-social-link"><a rel="noopener nofollow" target="_blank" href="https://www.instagram.com/msichoices/" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                <path d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z"></path>
                            </svg><span class="wp-block-social-link-label screen-reader-text">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Instagram</font>
                                </font>
                            </span></a></li>
                </ul>
            </div>
            <div class="footer-bar-text">MSI Reproductive Choices UK, 1 Conway Street, Fitzroy Square, London, W1T 6LP, Vương quốc Anh.</div>
            <div class="footer-bar-text">Tổ chức từ thiện đã đăng ký tại Anh và xứ Wales, mã số tổ chức từ thiện: 265543.</div>
            <div class="footer__bar__wrap display-flex-center justify-content-between display-sm-block">
                <div class="footer__copyright">
                    <p class="margin-0 p-0 font-size-14 secondary-color-txt footer-bar-text">
                        ©<?php echo date('Y'); ?> © 2024 Readdy. All rights reserved.
                    </p>
                    <a class="footer-bar-text" href="#">Chính sách bảo mật</a>
                    <a class="footer-bar-text" href="#">Chính sách cookie</a>
                    <a class="footer-bar-text" href="#">Chống chế độ nô lệ hiện đại</a>


                </div>
                <!-- <div class="footer__brand">
                    <div class="footer__socials os_footer__socials text-center">
                        <ul class="margin-0 p-0 text-center" style="display: flex; justify-content: left;gap: 12px;">
                            <?php if (get_field('footer_social', pll_current_language('slug'))) : ?>
                                <?php while (the_repeater_field('social_media', pll_current_language('slug'))) : ?>
                                    <li><a href="<?php echo get_sub_field('url'); ?>" target="_blank" rel="nofollow"> <img src="<?php echo esc_url(get_sub_field('image')); ?>"></a></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_schedule_book" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal_book-now__custom" role="document">
            <div class="modal-content book-now__custom">
                <!-- <div class="modal-header primary-bg-color display-flex-center justify-content-center">
                    <p class="modal-title font-size-30 font-weight-bold color-light margin-auto">
                        <i class="icon-calendar font-size-40"></i> Đặt lịch khám
                    </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" class="color-light">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body">
                    <div class="row justify-content-between">
                        <div class="form-book-exam col-12 col-lg-7">
                            <div class="book-now__custom-head">
                                <div class="book-now__custom-title">
                                    <?php
                                    if (pll_current_language('slug') == 'vi') {
                                        echo 'Đặt lịch khám';
                                    }
                                    if (pll_current_language('slug') == 'en') {
                                        echo 'Booking Service:';
                                    }
                                    if (pll_current_language('slug') == 'zh') {
                                        echo '预订服务:';
                                    }
                                    ?>
                                </div>
                                <img class="book-now__custom-head_icon"
                                    src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon_bufterfly.svg">
                            </div>
                            <div class="book-now__custom-subtitle">
                                <?php
                                if (pll_current_language('slug') == 'vi') {
                                    echo 'Đặt lịch khám sức khỏe ngay hôm nay';
                                }
                                if (pll_current_language('slug') == 'en') {
                                    echo "Book Your Women's Health Appointments Today";
                                }
                                if (pll_current_language('slug') == 'zh') {
                                    echo '立即预约女性健康';
                                }
                                ?>
                            </div>
                            <div class="book-now__custom-form">
                                <?php if (get_field('booking_form_setting', pll_current_language('slug'))): ?>
                                    <?php echo do_shortcode(get_field('booking_form_setting', pll_current_language('slug'))); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-0 col-lg-4 d-flex align-items-end">
                            <?php if (get_field('book_doctor_image', pll_current_language('slug'))): ?>
                                <img class="book-now__custom-img"
                                    src="<?php echo do_shortcode(get_field('book_doctor_image', pll_current_language('slug'))); ?>"
                                    alt="img-doctor">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</footer>

</div><!-- End #page-->
<div id="msi-subBizChat-wrap">
    <!-- <script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acrffeyejeltgjjndnwh");</script> -->
</div>
<!-- <div class="zalo-chat-widget" data-oaid="211881704654906939" data-welcome-message="Chúng tôi có thể giúp gì cho bạn?"
    data-autopopup="0" data-width="350" data-height="420"></div>

<script src="https://sp.zalo.me/plugins/sdk.js"></script> -->
<?php wp_footer(); ?>
<script>
    (function($) {
        // $(document).ready(function() {
        //     $(".footer__fixed__address__icon").click(function() {
        //         $('html, body').animate({
        //             scrollTop: $(".position-rel").offset().top
        //         }, 2000);
        //     });
        // });

        $(".footer__fixed__address__icon").click(function() {
            $('html, body').animate({
                scrollTop: $("#position-rel").offset().top
            }, 2000);
        });
    })(jQuery);
    jQuery(document).ready(function($) {
        $('.entry-content').attr("src", function(i, val) {
            return val + '&rel=0';
        });
    });

    // thanh search, khi nhập data thì ẩn text default
    jQuery("#search-data-input-val").on("input", function() {
        if (jQuery("#search-data-input-val").val()) {
            jQuery(".search-data label").css("opacity", 0);
            jQuery(".header__menu__mobile .search-data .search-data-label").css("opacity", 0);
        } else {
            jQuery(".search-data label").css("opacity", 1);
            jQuery(".header__menu__mobile .search-data .search-data-label").css("opacity", 1);

        }
    });

    jQuery(".header__search").on("click", function() {
        jQuery("#search-data-input-val").focus();
    });

    // event icon social với các vệ tinh
    jQuery('#toggleIcon').on('click', function(event) {
        jQuery(this).toggleClass('active');
        event.stopPropagation(); // Ngăn chặn sự kiện lan rộng
    });

    // Khi nhấp vào bất cứ đâu trên trang
    jQuery(document).on('click', function(event) {
        // Kiểm tra xem có nhấp vào ngoài icon trung tâm và icon vệ tinh
        if (!jQuery(event.target).closest('#toggleIcon').length && !jQuery(event.target).closest('.icon-satellite').length) {
            jQuery('#toggleIcon').removeClass('active'); // Xóa class 'active'
        }
    });

    document.getElementById('city').addEventListener('change', function() {
        var selectedCity = this.value;
        var clinics = document.querySelectorAll('.clinic-nearby-u-slider');

        const mapFrame = document.getElementById('map_frame');

        clinics.forEach(function(clinic) {
            const clinicCity = clinic.getAttribute('data-city');
            if (selectedCity === "" || clinicCity === selectedCity) {
                clinic.style.display = "block";

                const mapLink = clinic.querySelector('.clinic-nearby-u-slider__item-map');
                if (mapLink && clinicCity === selectedCity) {
                    const mapUrl = mapLink.getAttribute('data-map');
                    mapFrame.src = mapUrl;
                }

            } else {
                clinic.style.display = "none";
            }
        });
    });
</script>


</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const openBtn = document.getElementById("popup-country-open");
        const closeBtn = document.getElementById("popup-country-close");
        const modal = document.getElementById("popup-country-modal");

        function openPopup() {
            modal.style.display = "block";
            openBtn.classList.add("open");
        }

        function closePopup() {
            modal.style.display = "none";
            openBtn.classList.remove("open");
        }

        openBtn.addEventListener("click", function() {
            // Toggle: nếu đang mở thì đóng, nếu đang đóng thì mở
            if (modal.style.display === "block") {
                closePopup();
            } else {
                openPopup();
            }
        });

        closeBtn.addEventListener("click", closePopup);

        window.addEventListener("click", function(e) {
            if (e.target === modal) {
                closePopup();
            }
        });
    });
</script>
<script>
    jQuery(document).ready(function($) {
        // Đóng tất cả menu
        function closeAllMenus() {
            $('.menu-toggle').removeClass('active');
            $('.menu-item-2').slideUp();
            $('.menu-toggle').removeClass('active');
            $('.menu-item-2').css('display', 'none')
                .find('.menu-description, .submenu').css('display', 'none');
        }

        // Mở menu tương ứng
        $('.custom-menu > .menu-item > .menu-item-1 > .menu-toggle').on('click', function(e) {
            const $this = $(this);
            const $menuItem1 = $this.closest('.menu-item-1');
            const menuId = $menuItem1.data('menu-id');
            const $menu2 = $('.menu-item-2[data-menu-id="' + menuId + '"]');

            const isOpen = $this.hasClass('active');

            closeAllMenus();

            if (!isOpen) {
                // Set lại vị trí top
                const offset = $menuItem1.offset();
                const height = $menuItem1.outerHeight();
                const top = offset.top + height;
                $menu2.css({
                    top: 218 + 'px',
                    display: 'flex'
                });
                $menu2.find('.menu-description, .submenu').css('display', 'block');

                $this.addClass('active');
                $menu2.stop(true, true).slideDown();
            }
        });

        // Toggle cấp 2 (submenu-item)
        $('.submenu').on('click', '.menu-toggle', function() {
            const $this = $(this);
            const $item = $this.closest('.submenu-item');

            $item.siblings('.submenu-item').removeClass('open')
                .find('.submenu-lv3').slideUp()
                .end().find('.menu-toggle').removeClass('active');

            $item.toggleClass('open');
            $item.find('.submenu-lv3').first().slideToggle();
            $this.toggleClass('active');
        });

        // Active link thường
        $('.custom-menu a').on('click', function() {
            $('.custom-menu a').removeClass('active');
            $(this).addClass('active');
            closeAllMenus();
        });
    });
</script>
<style>
    .footer__main {
        background: white;
        padding: 50px 0;
    }

    .footer__main .footer__item__title {
        font-family: 'Roboto', sans-serif;
        font-weight: 600;
        font-style: normal;
        font-size: 16px;
        line-height: 24px;
        letter-spacing: 0;
        color: #000000;
        text-align: left;
        /* margin-bottom: 32px; */
    }

    .footer__main ul li {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
        color: #292929 !important;
        margin-bottom: 16px;
    }

    .footer__main ul li a {
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 16px;
        line-height: 24px;
        letter-spacing: 0;
        text-align: left;
        color: #272727 !important;
    }

    .footer__main ul li a:hover {
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
        text-align: left;
        font-family: 'Be Vietnam Pro', sans-serif;
        color: #00ACEE !important;
    }

    .footer__main .footer__copyright p {
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 16px;
        line-height: 24px;
        letter-spacing: 0;
        color: #9CA3AF;
    }

    .footer__copyright {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .footer__bar {
        /* background-color: white;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
        padding: 24px 0 20px;
        border-top: 1px solid #DCDCDC; */
        /* height: 107px; */
        width: 100%;
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* padding: 0px 80px; */
    }

    .os_footer__socials ul li img {
        width: 16px !important;
        height: 16px !important;
        /* border-radius: 100px; */
    }

    .footer__socials ul li {
        margin: 0;
    }

    /* .footer__socials ul li a {
        width: 40px;
        height: 40px;
    } */

    .os-phone,
    .os-mail {
        font-weight: 600 !important;
        color: #000000 !important;
    }

    /* custom css book now */
    .modal_book-now__custom {
        /* width: 1200px; */
        max-width: 1200px;
        /* height: 749px; */
        /* max-height: 749px; */
        border-radius: 40px;
        /* box-shadow: 0px 9px 30px 0px #00000012; */
        /* background-color: #fff; */
    }

    .book-now__custom {
        border: none;
        background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/os/booking-now-bgr.png");
        padding: 64px 64px 0 64px;
        background-size: cover;
        background-position: left;
        background-repeat: no-repeat;
        border-radius: 40px;
        box-shadow: 0px 9px 30px 0px #00000012;
    }

    .book-now__custom .modal-body {
        padding: 0;
    }

    .book-now__custom-head {
        display: flex;
        justify-content: space-between;
    }

    .book-now__custom-title {
        font-family: "Space Grotesk", sans-serif;
        font-size: 56px;
        font-weight: 500;
        line-height: 67px;
        text-align: left;
    }

    .book-now__custom-head_icon {
        width: 64px;
        height: 64px;
        margin-left: -16px;
    }

    .book-now__custom-subtitle {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
        text-align: left;
        margin-top: 8px;
        margin-bottom: 40px;
    }

    .book-now__custom-form {
        background-color: #fff;
        padding: 32px;
        border-radius: 24px;
        margin-bottom: 64px;
    }

    .book-now__custom-form .form-control {
        border-top: none;
        border-right: none;
        border-left: none;
        border-radius: 0px;
        padding-left: 0px;
    }

    .book-now__custom-form .form-control:focus {
        box-shadow: none;
    }

    .book-now__custom-form .form-group {
        margin-bottom: 32px;
    }

    .form-book-exam .book-now__custom-form .form-action button {
        min-width: 100%;
        background-color: #E50C75;
        background-image: none;
    }

    .book-now__custom-img {
        max-width: 328px;
        object-fit: cover;
    }

    /* .os_listing_1 ul li a {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
        text-align: left;
        color: var(--Alias-Text-Primary-blue, #00ACEE) !important;

    } */


    @media screen and (max-width: 991px) {
        .book-now__custom {
            padding: 40px;
        }

        .book-now__custom-title {
            font-size: 48px;
            line-height: 56px;
        }

        .book-now__custom-head_icon {
            width: 48px;
            height: 48px;
        }

        .book-now__custom-subtitle {
            margin-bottom: 32px;
        }

        .book-now__custom-img {
            display: none;
        }

        .book-now__custom-form {
            margin-bottom: 48px;
        }

        .book-now__custom .form-book-exam {
            padding: 0px;
        }
    }

    @media screen and (max-width: 767px) {
        .book-now__custom {
            padding: 24px;
        }

        .book-now__custom-title {
            font-size: 40px;
            line-height: 48px;
        }

        .book-now__custom-head_icon {
            width: 40px;
            height: 40px;
        }

        .book-now__custom-subtitle {
            margin-bottom: 24px;
        }

        .book-now__custom-form {
            margin-bottom: 32px;
        }
    }

    @media screen and (max-width: 575px) {
        .book-now__custom {
            padding: 16px;
        }

        .book-now__custom-title {
            font-size: 28px;
            line-height: 35.73px;
        }

        .book-now__custom-head_icon {
            width: 32px;
            height: 32px;
        }

        .book-now__custom-subtitle {
            margin-bottom: 16px;
        }

        .book-now__custom-form {
            margin-bottom: 0px;
        }
    }

    /* end custom css book now */

    /* custom contact bar */

    #contact-bar {
        bottom: 0px;
        right: 75px;
        top: auto;
    }

    #contact-bar li {
        margin: 24px 0;
    }

    #contact-bar img {
        padding: 0px;
        cursor: pointer;
        max-width: 48px;
    }

    #contact-bar ul li.icon-center {
        position: relative;
        cursor: pointer;
        z-index: 10;
        /* Đảm bảo icon trung tâm luôn trên cùng */
    }

    #contact-bar ul li.icon-satellite {
        position: absolute;
        opacity: 0;
        transform: scale(0);
        /* Thu nhỏ icon vệ tinh khi ẩn */
        transition: all 0.3s ease;
    }

    #contact-bar ul li.icon-center.active~.icon-satellite {
        opacity: 1;
        transform: scale(1);
        /* Phóng to icon vệ tinh khi hiện */
    }

    #contact-bar ul li.icon-satellite:nth-child(2) {
        top: -80px;
        /* Điều chỉnh vị trí cho icon vệ tinh 1 */
        left: 0;
    }

    #contact-bar ul li.icon-satellite:nth-child(3) {
        top: 124px;
        left: -40px;
    }

    #contact-bar ul li.icon-satellite:nth-child(4) {
        top: 75px;
        left: -60px;
    }

    #contact-bar ul li.icon-satellite:nth-child(5) {
        top: 28px;
        left: -40px;
    }

    /* end custom contact bar */

    @media screen and (max-width: 767px) {
        .footer__bar {
            display: none;
        }
    }

    .os_footer__intro__content ul li {
        margin-bottom: 8px;
    }

    .os_footer_address {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
        color: var(--Alias-Text-Neutral, #292929);

    }

    .os_footer_address p {
        margin: 0px;
    }

    .os_footer_address {
        margin-bottom: 32px;
    }

    .os_footer__intro__content ul li {
        display: flex;
        gap: 4px;
    }

    .disabled-link {
        pointer-events: none;
        cursor: default;
    }

    .footer__brand {
        display: flex;
        align-items: center;
    }

    .footer__main {
        max-width: 1335px;
        margin: 0 auto;
        width: 100%;
        padding: 88px 0px 54px 0px;
        border-bottom: 1px solid #e0e0e0;
    }

    .footer {
        background-color: white;
    }

    .footer__main .footer__item__title {
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        font-size: 22px;
        line-height: 32px;
        color: #283573;
    }

    .footer__main .footer__item__title ul li a {
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        font-size: 22px;
        line-height: 32px;
        color: #283573;
    }

    .footer__bar_container {
        max-width: 1335px;
        margin: 0px auto;
        width: 100%;
    }

    .footer-bar-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0px 0px 40px 0px;
    }

    .nha-tai-tro {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .wp-block-social-links {
        display: flex;
        gap: 24px;
    }

    .wp-block-social-links li {
        width: 36px;
        height: 36px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .wp-block-social-links .wp-social-link svg {
        width: 24px;
        height: 24px;
    }

    .footer-bar {
        padding: 40px 0px;
    }

    .footer-bar-text {
        font-size: 14px;
        line-height: 24px;
        color: #283573;
        font-family: "Roboto", sans-serif;
        font-size: 14px;
        font-weight: 400;
        letter-spacing: normal;
    }
    .footer__copyright a {
        text-decoration: underline;
    }
</style>

</body>

</html>