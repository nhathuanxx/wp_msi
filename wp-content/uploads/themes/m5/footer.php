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

                    <div class="footer__socials os_footer__socials text-center">
                        <ul class="margin-0 p-0 text-center" style="display: flex; justify-content: left;gap: 12px;">
                            <?php if (get_field('footer_social', pll_current_language('slug'))) : ?>
                                <?php while (the_repeater_field('social_media', pll_current_language('slug'))) : ?>
                                    <li><a href="<?php echo get_sub_field('url'); ?>" target="_blank" rel="nofollow"> <img src="<?php echo esc_url(get_sub_field('image')); ?>"
                                                style="border-radius: 100%; height: 40px; width: 40px;"></a></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <li><a href="<?php echo get_field('option_zalo', 'option') ? get_field('option_zalo', 'option') : '#'; ?>" target="_blank" rel="nofollow">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/twitter_icon.svg'); ?>"
                                        alt="zalo" style="border-radius: 100%; height: 40px; width: 40px;"></a></li>
                        </ul>
                    </div>
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
                    <div class="footer__item__wrap footer__intro">
                        <?php if (get_field('footer_info', pll_current_language('slug'))) : ?>
                            <?php while (the_repeater_field('footer_info', pll_current_language('slug'))) : ?>
                                <p class="footer__item__title">
                                    <?php echo get_sub_field('title'); ?>
                                </p>
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
        <div class="col-12">
            <div class="footer__bar__wrap display-flex-center justify-content-between display-sm-block">
                <div class="footer__copyright">
                    <p class="margin-0 p-0 font-size-14 secondary-color-txt">
                        ©<?php echo date('Y'); ?> Copyright Công ty TNHH Dr.Marie
                    </p>
                </div>
                <div class="footer__brand">
                    <figre class="margin-0 p-0">
                        <!--<img src="<?php //echo esc_url(get_template_directory_uri() . '/assets/images/logo-bottom.jpg'); 
                                        ?>"
                            alt="Logo">-->

                        <!-- <figre class="margin-0 p-0">
                            <img style="width: 120px" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/DrMarie_logo_vn.png'); ?>"
                                alt="marie">

                        </figre> -->
                    </figre>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_schedule_book" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header primary-bg-color display-flex-center justify-content-center">
                    <p class="modal-title font-size-30 font-weight-bold color-light margin-auto">
                        <i class="icon-calendar font-size-40"></i> Đặt lịch khám
                    </p>
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

    <div id="contact-bar">
        <?php
        $option_phone_num = get_field('option_phone_num', 'option');
        $option_phone_num_link = '#';
        if ($option_phone_num) {

            $option_phone_num_link = $option_phone_num['url'];
        }
        ?>
        <ul>
            <li class="ctb-phone"><a href="<?php echo $option_phone_num_link; ?>" target="_blank" rel="nofollow"><img width="50" height="50" src="<?php echo get_template_directory_uri(); ?>/assets/images/call.png" alt="Gọi cho tôi"></a></li>
            <li class="ctb-fbm"><a href="<?php echo get_field('option_link_fb_mes', 'option') ? get_field('option_link_fb_mes', 'option') : '#'; ?>" target="_blank" rel="nofollow">
                    <img width="50" height="50" src="<?php echo get_template_directory_uri(); ?>/assets/images/messenger-icon.png" alt="Nhắn tin facebook"></a></li>
            <li class="ctb-mail"><a href="<?php echo get_field('option_zalo', 'option') ? get_field('option_zalo', 'option') : '#'; ?>" target="_blank" rel="nofollow"><img width="50" height="50" src="<?php echo get_template_directory_uri(); ?>/assets/images/zalo-logo.png" alt="Zalo"></a></li>
            <?php if (is_front_page()) : ?>
                <li>
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
                </li>
            <?php endif; ?>

            <li>
                <div class="back-to-top">
                    <a href="javascript:;" class="footer__fixed__to-top">
                        <figure class="margin-0 padding-0">
                            <img style="padding: 0;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/to-top.svg'); ?>"
                                alt="Back to top">
                        </figure>
                    </a>
                </div>
            </li>
        </ul>
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
    	if(jQuery("#search-data-input-val").val()){
            jQuery(".search-data label").css("opacity",0);
        } else {
             jQuery(".search-data label").css("opacity",1);
        }
    });

    jQuery(".header__search").on("click", function() {
        jQuery("#search-data-input-val").focus();
    });
    
</script>
<style>
    .footer__main {
        background: white;
        padding: 50px 0;
    }

    .footer__main .footer__item__title {
        font-family: 'Be Vietnam Pro', sans-serif;
        color: #292929 !important;
        font-size: 32px;
        font-weight: 600;
        line-height: 38px;
        text-align: left;
    }

    .footer__main ul li {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
        color: #292929 !important;
    }

    .footer__main ul li a {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
        color: #292929 !important;
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
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
    }

    .footer__bar {
        background-color: white;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
        padding: 24px 0 20px;
        border-top: 1px solid #DCDCDC;
    }

    .os_footer__socials ul li img {
        width: 40px !important;
        height: 40px !important;
        border-radius: 100px;
    }

    .footer__socials ul li {
        margin: 0;
    }

    .footer__socials ul li a {
        width: 40px;
        height: 40px;
    }

    .os-phone,
    .os-mail {
        font-weight: 600 !important;
        color: #000000 !important;
    }

    @media screen and (max-width: 767px) {
        .footer__bar {
            display: none;
        }
    }
</style>

</body>

</html>