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
                <div class="col-md-3 col-lg-3 footer__item">
                    <div class="footer__menu">
                        <?php if (get_field('listing_1', pll_current_language('slug'))) : ?>
                        <?php while (the_repeater_field('listing_1', pll_current_language('slug'))) : ?>
                        <h2 class="footer__item__title footer__item__wrap"><?php echo get_sub_field('title'); ?></h2>
                        <ul>
                            <?php while (the_repeater_field('listing')) : ?>
                            <li>
                                <a href="<?php echo get_sub_field('url'); ?>"><i class="icon-arrow-next"></i>
                                    <?php echo get_sub_field('title'); ?></a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-5 col-lg-6 footer__item">
                    <div class="footer__menu footer__menu--half footer__item__wrap">
                        <?php if (get_field('listing_2', pll_current_language('slug'))) : ?>
                        <?php while (the_repeater_field('listing_2', pll_current_language('slug'))) : ?>
                        <h2 class="footer__item__title"><?php echo get_sub_field('title'); ?></h2>
                        <ul>
                            <?php while (the_repeater_field('listing')) : ?>
                            <li>
                                <a href="<?php echo get_sub_field('url'); ?>"><i class="icon-arrow-next"></i>
                                    <?php echo get_sub_field('title'); ?></a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 footer__item">
                    <div class="footer__item__wrap footer__intro">
                        <?php if (get_field('footer_info', pll_current_language('slug'))) : ?>
                        <?php while (the_repeater_field('footer_info', pll_current_language('slug'))) : ?>
                        <h2 class="footer__item__title">
                            <?php echo get_sub_field('title'); ?>
                        </h2>
                        <div class="footer__intro__content">
                            <ul>
                                <li class="item">
                                    <?php echo get_sub_field('address'); ?>
                                </li>
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
                </div>
            </div>

            <div class="footer__socials text-center">
                <ul class="margin-0 p-0 text-center" style="display: flex; justify-content: center;">
                    <?php if (get_field('footer_social', pll_current_language('slug'))) : ?>
                    <?php while (the_repeater_field('footer_social', pll_current_language('slug'))) : ?>
                    <li><a href="<?php echo get_sub_field('url'); ?>" target="_blank"><i
                                class="<?php echo get_sub_field('Icon'); ?>"></i></a></li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <li><a href="https://zalo.me/211881704654906939/" target="_blank">
                            <img src="http://msi-clinics.vn/wp-content/uploads/2020/09/images_qtbn3AANd9GcRufXmQn3ubJvCVk029fRAwZ_1E2ni.png"
                                alt="zalo" style="border-radius: 100%; height: 56px; width: 56px;"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__bar">
        <div class="col-12">
            <div class="footer__bar__wrap display-flex-center justify-content-between display-sm-block">
                <div class="footer__copyright">
                    <p class="margin-0 p-0 font-size-14 secondary-color-txt">
                        ©2014 Copyright Công ty TNHH Dr.Marie
                    </p>
                </div>
                <div class="footer__brand">
                    <figre class="margin-0 p-0">
                        <!--<img src="<?php //echo esc_url(get_template_directory_uri() . '/assets/images/logo-bottom.jpg'); ?>"
                            alt="Logo">-->

                        <figre class="margin-0 p-0">
                            <img style="width: 120px" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/DrMarie_logo_vn.png'); ?>"
                                alt="marie">

                        </figre>
                    </figre>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__fixed">
        <div class="footer__fixed__left">
            <a href="javascript:;" class="footer__fixed__to-top">
                <figure class="margin-0 padding-0">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/to-top.svg'); ?>"
                        alt="Back to top">
                </figure>
            </a>
            <div class="footer__fixed__address">
                <div class="footer__fixed__address__wrap position-rel">
                    <a href="#position-rel" class="footer__fixed__address__icon">
                        <figure class="margin-0 padding-0">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/find-address.svg'); ?>"
                                alt="<?php
                            if (pll_current_language('slug') == 'vi') {
                                echo 'Tìm địa chỉ phòng khám gần bạn?';
                            }
                            if (pll_current_language('slug') == 'en') {
                                echo 'Find clinic address near you?';
                            }
                            if (pll_current_language('slug') == 'zh') {
                                echo '寻找您附近的诊所地址？';
                            }
                            ?>">
                        </figure>
                    </a>
                    <div class="footer__fixed__address__tooltip">
                        <div class="footer__fixed__address__tooltip__wrap">
                            <?php
                            if (pll_current_language('slug') == 'vi') {
                                echo 'Tìm địa chỉ phòng khám gần bạn?';
                            }
                            if (pll_current_language('slug') == 'en') {
                                echo 'Find clinic address near you?';
                            }
                            if (pll_current_language('slug') == 'zh') {
                                echo '寻找您附近的诊所地址？';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__fixed__right">
            <div class="footer__fixed__hotline">
                <a href="tel:1900 55 88 82">
                    <div class="footer__fixed__hotline__content border-rd-20">
                        <p class="footer__fixed__hotline__name font-size-14 color-light margin-0">Hotline</p>
                        <p class="footer__fixed__hotline__val font-size-18 font-weight-bold color-light">
                            <?php echo get_field('hotline', pll_current_language('slug')); ?></p>
                    </div>
                    <div class="footer__fixed__hotline__icon border-rd-50">
                        <i class="icon-phone1 color-light"></i>
                    </div>
                </a>
            </div>
            <!-- <div class="footer__fixed__zalo">
                <?php //if (get_field('zalo', pll_current_language('slug'))) : ?>
                    <?php //while (the_repeater_field('zalo', pll_current_language('slug'))) : ?>
                        <a href="<?php //echo get_sub_field('url') ?>">
                            <div class="footer__fixed__zalo__content border-rd-20">
                                <p class="footer__fixed__zalo__name font-size-14 color-light margin-0">Zalo</p>
                                <p class="footer__fixed__zalo__val font-size-18 font-weight-bold color-light"><?php //echo get_sub_field('phone_number') ?></p>
                                
                            </div>
                            <div class="footer__fixed__zalo__icon border-rd-50">
                                <span class="font-size-16 font-weight-bold color-light">Zalo</span>
                            </div>
                        </a>
                    <?php //endwhile; ?>
                <?php //endif; ?>
            </div> -->
            <div class="footer__fixed__facebook">
                <a href="https://m.me/sanphukhoadrmarie" target="_blank">
                    <div class="footer__fixed__facebook__content border-rd-20">
                        <p class="footer__fixed__facebook__name font-size-14 color-light margin-0">Facebook</p>
                        <p class="footer__fixed__facebook__val font-size-18 font-weight-bold color-light"></p>
                    </div>
                    <div class="footer__fixed__facebook__icon border-rd-50">
                        <i class="icon-messenger color-light"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_schedule_book" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header primary-bg-color display-flex-center justify-content-center">
                    <h5 class="modal-title font-size-30 font-weight-bold color-light margin-auto">
                        <i class="icon-calendar font-size-40"></i> Đặt lịch khám
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" class="color-light">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-book-exam">
                        <?php if (get_field('booking_form_setting', pll_current_language('slug'))) : ?>
                        <?php echo do_shortcode(get_field('booking_form_setting', pll_current_language('slug'))); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- End #page-->
<div id="msi-subBizChat-wrap">
<script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acrffeyejeltgjjndnwh");</script>
</div>
<div class="zalo-chat-widget" data-oaid="211881704654906939" data-welcome-message="Chúng tôi có thể giúp gì cho bạn?"
    data-autopopup="0" data-width="350" data-height="420"></div>

<script src="https://sp.zalo.me/plugins/sdk.js"></script>
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
</script>

</body>

</html>