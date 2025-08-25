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
                <div class="col-12 col-lg-4 footer__item">
                    <div class="footer__menu">

                        <div class="footer_logo">
                            <a href="<?php echo pll_home_url(); ?>">
                                <?php
                                $logoUrl = get_field('logo_image', pll_current_language('slug'));
                                if (is_front_page()) {
                                ?>
                                    <h1 style="display: none;">MSI Choices Vietnam - Making Choices Possible</h1>
                                <?php
                                }
                                ?>
                                <img src="<?php echo $logoUrl; ?>" alt="<?php echo bloginfo(); ?>">
                            </a>
                        </div>
                        <div class="footer-logo-description">
                            <?php if (pll_current_language('slug') === 'vi') : ?>
                                MSI Reproductive Choices Vietnam: Nâng tầm Sức khỏe Sinh sản, Thúc đẩy Bình đẳng Giới và Phát triển Bền vững tại Việt Nam.
                            <?php else : ?>
                                MSI Reproductive Choices Vietnam: Advancing Reproductive Health, Promoting Gender Equality, and Fostering Sustainable Development in Vietnam.
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- <div class="sha-dmca" style="padding-top: 30px;">
                        <a href="//www.dmca.com/Protection/Status.aspx?ID=9f2412a9-2785-4d2b-ad28-55364d386aba" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=9f2412a9-2785-4d2b-ad28-55364d386aba"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                    </div> -->


                </div>
                <div class="col-12 col-lg-2 footer__item">
                    <div class="footer__menu">
                        <?php if (get_field('listing_1', pll_current_language('slug'))) : ?>
                            <?php while (the_repeater_field('listing_1', pll_current_language('slug'))) : ?>
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
                <div class="col-12 col-lg-2 footer__item">
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
                                      <li>
  <?php if ( function_exists('pll_current_language') ): ?>
    <?php if ( pll_current_language('slug') === 'vi' ): ?>
        <a href="https://msichoices.org.vn/lien-he">Liên hệ</a>
    <?php elseif ( pll_current_language('slug') === 'en' ): ?>
        <a href="https://msichoices.org.vn/en/contact">Contact</a>
    <?php endif; ?>
  <?php endif; ?>
</li>
                                </ul>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-4 footer__item">
                   <div style="font-family: 'Roboto', sans-serif;
    font-weight: 700;
    font-size: 20px;
    line-height: 32px;
    color: white;">
  <?php if ( function_exists('pll_current_language') ): ?>
    <?php if ( pll_current_language('slug') === 'vi' ): ?>
        ĐĂNG KÝ NHẬN THÔNG BÁO
    <?php elseif ( pll_current_language('slug') === 'en' ): ?>
        SUBSCRIBE TO UPDATES
    <?php endif; ?>
  <?php endif; ?>
</div>
<?php if ( function_exists('pll_current_language') ): ?>
  <?php if ( pll_current_language('slug') === 'vi' ): ?>
    <?php echo do_shortcode('[contact-form-7 id="6044" title="Form yêu cầu theo dõi vi"]'); ?>
  <?php else: ?>
    <?php echo do_shortcode('[contact-form-7 id="6046" title="Form yêu cầu theo dõi"]'); ?>
  <?php endif; ?>
<?php endif; ?>
              
                            <div class="footer-bar-text">
                                <i class="fas fa-map-marker-alt" style="margin-right:6px;color:white;"></i>
                    <?php the_field('ten_dia_chi', 'option'); ?>
                            </div>
                            <div class="footer-bar-text">
                                <i class="fas fa-map-marker-alt" style="margin-right:6px;color:white;"></i>
                    <?php the_field('dia_chi', 'option'); ?>
                            </div>
                     

                    <div style="display:flex; gap:8px; align-items:center; font-family:'Roboto',sans-serif;">
                        <?php
                        $phone_raw = get_field('so_dien_thoai', 'option');
                        $phone = is_string($phone_raw) ? $phone_raw : '';
                        $phone_link = $phone ? 'tel:' . preg_replace('/\s+/', '', $phone) : '#';
                        ?>
                        <i class="fas fa-phone-alt" style="color:white;"></i>
                        <a href="<?php echo esc_attr($phone_link); ?>"
                            style="font-size:14px; font-weight:400; color:white; text-decoration:none;padding:0;line-height:24px;">
                            <?php echo esc_html($phone ?: 'Chưa có số'); ?>
                        </a>
                    </div>

                    <div style="display:flex; gap:8px; align-items:center;font-family:'Roboto',sans-serif;">
                        <i class="fas fa-envelope" style="color:white;"></i>
                        <?php $email = get_field('email', 'option'); ?>
                        <?php if ($email): ?>
                            <a href="mailto:<?php echo esc_attr($email); ?>"
                                style="font-size:14px; font-weight:400; color:white; text-decoration:none;padding:0;line-height:24px;">
                                <?php echo esc_html($email); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                      <div class="msi-footer-social">
                    <a href="<?php echo get_field('link_facebook', 'option')?>" target="_blank" class="msi-contact-social-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?php echo get_field('link_youtube', 'option')?>" target="_blank" class="msi-contact-social-link">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="<?php echo get_field('link_tiktok', 'option')?>" target="_blank" class="msi-contact-social-link">
                        <i class="fab fa-tiktok"></i>
                    </a>
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
    <div class="footer__bar__wrap display-flex-center justify-content-between display-sm-block">
        <div class="footer__copyright">
            <p class="margin-0 p-0 font-size-14 secondary-color-txt footer-bar-text">
                ©<?php echo date('Y'); ?> MSIVN. All rights reserved.
            </p>
            <!-- <a class="footer-bar-text" href="#">Chính sách bảo mật</a>
                    <a class="footer-bar-text" href="#">Chính sách cookie</a>
                    <a class="footer-bar-text" href="#">Chống chế độ nô lệ hiện đại</a> -->


        </div>
    </div>
    </div>
    <!-- <li class="book-calendar"><img width="50" height="50" src="<?php echo get_template_directory_uri(); ?>/assets/images/os/icon-book-now.svg" alt="book-now"></li>
            <li class="icon-center" id="toggleIcon"><img width="50" height="50" src="<?php echo get_template_directory_uri(); ?>/assets/images/os/icon-social.svg" alt="icon-social"></li>
            <li class="icon-satellite"><a href="<?php echo get_field('option_zalo', 'option') ? get_field('option_zalo', 'option') : '#'; ?>" target="_blank" rel="nofollow"><img width="42" height="42" src="<?php echo get_template_directory_uri(); ?>/assets/images/os/icon-zalo.svg" alt="icon-zalo"></a></li>
            <li class="icon-satellite"><a href="<?php echo get_field('option_link_fb_mes', 'option') ? get_field('option_link_fb_mes', 'option') : '#'; ?>" target="_blank" rel="nofollow"><img width="42" height="42" src="<?php echo get_template_directory_uri(); ?>/assets/images/os/icon-messenger.svg" alt="icon-messenger"></a></li>
            <li class="icon-satellite"><a href="<?php echo $option_phone_num_link; ?>" target="_blank" rel="nofollow"><img width="42" height="42" src="<?php echo get_template_directory_uri(); ?>/assets/images/os/icon-call.svg" alt="icon-call"></a></li>
            <li>
                <div class="back-to-top">
                    <a href="javascript:;" class="footer__fixed__to-top">
                        <figure class="margin-0 padding-0">
                            <img style="padding: 0;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/to-top.svg'); ?>"
                                alt="Back to top">
                        </figure>
                    </a>
                </div>
            </li> -->
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
                            <!-- <div class="book-now__custom-head">
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
                            </div> -->
                            <div class="book-now__custom-form">
                                <?php if (get_field('booking_form_setting', pll_current_language('slug'))): ?>
                                    <?php echo do_shortcode(get_field('booking_form_setting', pll_current_language('slug'))); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-end">
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


    <div id="contact-bar">
        <?php
        $option_phone_num = get_field('option_phone_num', 'option');
        $option_phone_num_link = '#';
        if ($option_phone_num) {

            $option_phone_num_link = $option_phone_num['url'];
        }
        ?>
        <ul>
            <!-- <li class="ctb-phone"><a href="<?php echo $option_phone_num_link; ?>" target="_blank" rel="nofollow"><img width="50" height="50" src="<?php echo get_template_directory_uri(); ?>/assets/images/call.png" alt="Gọi cho tôi"></a></li>
            <li class="ctb-fbm"><a href="<?php echo get_field('option_link_fb_mes', 'option') ? get_field('option_link_fb_mes', 'option') : '#'; ?>" target="_blank" rel="nofollow">
                    <img width="50" height="50" src="<?php echo get_template_directory_uri(); ?>/assets/images/messenger-icon.png" alt="Nhắn tin facebook"></a></li>
            <li class="ctb-mail"><a href="<?php echo get_field('option_zalo', 'option') ? get_field('option_zalo', 'option') : '#'; ?>" target="_blank" rel="nofollow"><img width="50" height="50" src="<?php echo get_template_directory_uri(); ?>/assets/images/zalo-logo.png" alt="Zalo"></a></li> -->
            <!-- <?php if (is_front_page()) : ?>
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
            <?php endif; ?> -->
            <li class="book-calendar-footer">
                <div class="cta-footer-container">
                    <i class="fas fa-calendar" style="font-size: 20px;"></i>
                </div>
            </li>
            <li class="icon-center" id="toggleIcon">
                <div class="cta-footer-container">
                    <i class="fas fa-comments" style="font-size: 20px;"></i>
                </div>
            </li>
            <li class="icon-satellite">
                <a target="_blank" href="<?php echo get_field('link_facebook', 'option') ? get_field('link_facebook', 'option') : 'https://www.facebook.com/profile.php?id=61572517763607'; ?>"
                    target="_blank" rel="nofollow">
                    <i class="fab fa-facebook-f" style="font-size: 20px;"></i>
                </a>
            </li>
            <li class="icon-satellite">
                <a target="_blank" href="<?php echo get_field('link_tiktok', 'option') ? get_field('link_tiktok', 'option') : 'https://www.tiktok.com/@msivn_corporate_health'; ?>"
                    target="_blank" rel="nofollow">
                    <i class="fab fa-tiktok" style="font-size: 20px;"></i>
                </a>
            </li>
            <li class="icon-satellite"><a href="<?php echo $option_phone_num_link; ?>" target="_blank" rel="nofollow"><i class="fas fa-phone" style="font-size: 20px;"></i></a></li>
            <li>
                <div class="back-to-top">
                    <a href="javascript:;" class="footer__fixed__to-top" style="padding:0px">
                        <figure class="margin-0 padding-0">
                            <img style="padding: 0;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/to-top.svg'); ?>"
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
        const modal = document.getElementById("popup-country-modal");
        let closeTimeout; // biến lưu timeout đóng

        function openPopup() {
            clearTimeout(closeTimeout); // nếu có hẹn giờ đóng thì hủy
            modal.style.display = "block";
            openBtn.classList.add("open");
        }

        function closePopup() {
            modal.style.display = "none";
            openBtn.classList.remove("open");
        }

        // Khi hover vào nút -> mở
        openBtn.addEventListener("mouseenter", openPopup);

        // Theo dõi khi chuột di chuyển
        document.addEventListener("mousemove", function(e) {
            if (modal.style.display === "block") {
                if (
                    !openBtn.contains(e.target) &&
                    !modal.contains(e.target)
                ) {
                    // hẹn giờ đóng sau 300ms
                    closeTimeout = setTimeout(closePopup, 300);
                } else {
                    // nếu quay lại modal hoặc nút -> hủy việc đóng
                    clearTimeout(closeTimeout);
                }
            }
        });
    });
</script>
<script>
    jQuery(function($) {
        const CLOSE_DELAY = 300;
        const TOP_OFFSET = 90;
        const panels = {};
        const timers = {};
        const subTimers = {};

        function cancelClose(id) {
            if (timers[id]) {
                clearTimeout(timers[id]);
                timers[id] = null;
            }
        }

        function scheduleClose(id) {
            cancelClose(id);
            timers[id] = setTimeout(function() {
                const p = panels[id];
                if (!p) return;
                p.$btn.removeClass('active');
                p.$panel.stop(true, true).slideUp(200);
            }, CLOSE_DELAY);
        }

        function closeAllExcept(keepId) {
            $.each(panels, function(id, p) {
                if (id === keepId) return;
                cancelClose(id);
                p.$btn.removeClass('active');
                p.$panel.stop(true, true).slideUp(200);
            });
        }

        function openPanel(id) {
            const p = panels[id];
            if (!p) return;
            closeAllExcept(id);
            p.$btn.addClass('active');
            p.$panel.css({
                    top: TOP_OFFSET + 'px'
                })
                .stop(true, true).slideDown(200);
            p.$panel.find('.menu-description, .submenu').show();
        }

        // Ghép menu cấp 1 và panel cấp 2
        $('.menu-item-1[data-menu-id]').each(function() {
            const id = $(this).data('menu-id');
            const $panel = $(`.menu-item-2[data-menu-id="${id}"]`);
            if ($panel.length) {
                $panel.hide(); // Ẩn mặc định
                panels[id] = {
                    $btn: $(this),
                    $panel
                };
            }
        });

        // Hover cấp 1
        $.each(panels, function(id, p) {
            p.$btn.on('mouseenter', function() {
                cancelClose(id);
                openPanel(id);
            });
            p.$btn.on('mouseleave', function() {
                scheduleClose(id);
            });
            p.$panel.on('mouseenter', function() {
                cancelClose(id);
            });
            p.$panel.on('mouseleave', function() {
                scheduleClose(id);
            });
        });

        // Hover cấp 2 → cấp 3
        $('.custom-menu').on('mouseenter', '.submenu-item', function() {
            const $item = $(this);
            const $lv3 = $item.children('.submenu-lv3');

            $item.siblings('.submenu-item')
                .removeClass('open')
                .children('.submenu-lv3').stop(true, true).slideUp(200);

            if ($lv3.length) {
                $item.addClass('open');
                $lv3.stop(true, true).slideDown(200);
            }
        });

        $('.custom-menu').on('mouseleave', '.submenu-item', function() {
            const $item = $(this);
            const $lv3 = $item.children('.submenu-lv3');
            if ($lv3.length) {
                subTimers[$item.index()] = setTimeout(function() {
                    $item.removeClass('open');
                    $lv3.stop(true, true).slideUp(200);
                }, CLOSE_DELAY);
            }
        });

        // Khi trỏ vào menu cấp 3 thì giữ cấp 2 mở
        $('.custom-menu').on('mouseenter', '.submenu-lv3', function() {
            const $parentItem = $(this).closest('.submenu-item');
            clearTimeout(subTimers[$parentItem.index()]);
        });
        $('.custom-menu').on('mouseleave', '.submenu-lv3', function() {
            const $parentItem = $(this).closest('.submenu-item');
            subTimers[$parentItem.index()] = setTimeout(function() {
                $parentItem.removeClass('open');
                $parentItem.children('.submenu-lv3').stop(true, true).slideUp(200);
            }, CLOSE_DELAY);
        });

        // Tắt click-toggle cũ
        $('.custom-menu > .menu-item > .menu-item-1 > .menu-toggle').off('click');
        $('.submenu').off('click', '.menu-toggle');
        $('.custom-menu').on('click', '.menu-toggle', function(e) {
            // e.preventDefault();
            e.stopPropagation();
        });

        //   Click ra ngoài -> đóng tất cả
        $(document).on('click', function(e) {
            if ($(e.target).closest('.custom-menu').length === 0) {
                $.each(panels, function(id, p) {
                    cancelClose(id);
                    p.$btn.removeClass('active');
                    p.$panel.stop(true, true).slideUp(200);
                });
                $('.submenu-item.open').removeClass('open')
                    .children('.submenu-lv3').stop(true, true).slideUp(200);
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('msi-mobile-menu-btn');
        const menu = document.getElementById('msi-mobile-menu');

        if (!btn || !menu) return;

        btn.addEventListener('click', () => {
            const expanded = btn.getAttribute('aria-expanded') === 'true';
            btn.setAttribute('aria-expanded', !expanded);
            menu.classList.toggle('open');
            btn.classList.toggle('active');
            menu.setAttribute('aria-hidden', expanded);
        });

        const toggles = menu.querySelectorAll('.msi-mobile-menu-toggle');
        toggles.forEach(toggleBtn => {
            toggleBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const expanded = toggleBtn.getAttribute('aria-expanded') === 'true';
                toggleBtn.setAttribute('aria-expanded', !expanded);

                const submenu = toggleBtn.nextElementSibling;
                if (submenu && (submenu.classList.contains('msi-mobile-menu-level-2') || submenu.classList.contains('msi-mobile-menu-level-3'))) {
                    submenu.classList.toggle('open');
                }
            });
        });
    });
</script>
<script>
    jQuery(function($) {
        let page = 2;
        let category = '';
        let search = '';

        // Click filter category
        $('.template-blog-filter-btn').on('click', function() {
            category = $(this).data('category');
            $('.template-blog-filter-btn').removeClass('template-blog-filter-btn-active');
            $(this).addClass('template-blog-filter-btn-active');
            page = 1;
            $('#template-blog-post-list').html('');
            $('#template-blog-load-more-btn').show();
            loadPosts();
        });

        // Toggle hiển thị input tìm kiếm khi click icon tìm kiếm
        $('#template-blog-search-toggle').on('click', function() {
            $('.template-blog-search-box').toggle();
            $('#template-blog-search-key').focus();
            $(this).hide();
        });

        // Clear text input khi click nút x
        $('#template-blog-search-clear').on('click', function() {
            $('#template-blog-search-key').val('');
            search = '';
            page = 1;
            $('#template-blog-post-list').html('');
            $('#template-blog-load-more-btn').show();
            loadPosts();
        });

        // Tìm kiếm khi nhấn Enter
        $('#template-blog-search-key').on('keypress', function(e) {
            if (e.which === 13) {
                search = $(this).val();
                page = 1;
                $('#template-blog-post-list').html('');
                $('#template-blog-load-more-btn').show();
                loadPosts();
            }
        });

        // Nút tải thêm
        $('#template-blog-load-more-btn').on('click', function() {
            category = $('#template-blog-load-more-btn').data('category') || '';
            loadPosts();
        });

        function loadPosts() {
            $.post(msi_ajax.url, {
                action: 'msi_load_more',
                page: page,
                category: category,
                search: search
            }, function(data) {
                const posts = $(data).filter('.post-card');
                if (posts.length == 0) {
                    debugger
                    $('#template-blog-load-more-btn').hide();
                } else {
                    if (posts.length < 3) {
                        $('#template-blog-load-more-btn').hide();

                    }
                    $('#template-blog-post-list').append(data);
                    page++;
                }
            });
        }
    });
</script>
<script>
    document.getElementById("msi-copy-link-btn").addEventListener("click", function(e) {
        e.preventDefault();

        const url = window.location.href;
        navigator.clipboard.writeText(url).then(() => {
            const btn = document.getElementById("msi-copy-link-btn");
            const text = document.getElementById("post_copy_link_text");

            // Ẩn icon, hiện chữ
            btn.style.display = "none";
            text.style.display = "block";

            // Sau 2 giây thì hiện lại icon, ẩn chữ
            setTimeout(() => {
                btn.style.display = "inline-block";
                text.style.display = "none";
            }, 2000);
        }).catch(err => {
            console.error("Không thể sao chép: ", err);
        });
    });
</script>
<script>
    document.getElementById("msi-fb-share").addEventListener("click", function(e) {
        e.preventDefault();
        const currentUrl = encodeURIComponent(window.location.href);
        const fbUrl = `https://www.facebook.com/sharer/sharer.php?u=${currentUrl}`;
        window.open(fbUrl, "_blank", "width=600,height=400");
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".accordion-header").forEach(header => {
            header.addEventListener("click", function() {
                const item = this.parentElement;
                const content = item.querySelector(".accordion-content");

                // Đóng tất cả accordion khác trên toàn trang
                document.querySelectorAll(".accordion-item").forEach(other => {
                    if (other !== item) {
                        other.classList.remove("active");
                        other.querySelector(".accordion-content").style.maxHeight = null;
                    }
                });

                // Toggle item hiện tại
                item.classList.toggle("active");
                if (item.classList.contains("active")) {
                    content.style.maxHeight = content.scrollHeight + "px";
                } else {
                    content.style.maxHeight = null;
                }
            });
        });
    });
</script>
<style>
    .footer__main {
        background: #459BDA;
        padding: 40px 0;
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
  font-family: "Roboto", sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
        color: white !important;
        margin-bottom: 6px;
    }

    .footer__main ul li a {
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 14px;
        line-height: 24px;
        letter-spacing: 0;
        text-align: left;
        padding: 0px;
        color: white !important;
    }

    .footer__main ul li a:hover {
        font-weight: 700;
        line-height: 24px;
        text-align: left;
        font-family: 'Roboto', sans-serif;
        text-decoration: underline;
        color: white !important;
    }

    .footer__main .footer__copyright p {
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 20px;
        line-height: 24px;
        color: white;
        letter-spacing: 0;
        color: #9CA3AF;
    }

    .footer__copyright {
        display: flex;
        gap: 20px;
        align-items: center;
        justify-content: center;
        padding: 8px 0px;
        text-align: center;
        width: 100%;
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
        max-width: 1000px;
        height: 80%;
        /* height: 749px; */
        /* max-height: 749px; */
        border-radius: 40px;
        /* box-shadow: 0px 9px 30px 0px #00000012; */
        /* background-color: #fff; */
    }

    .book-now__custom {
        border: none;
        background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/os/booking-now-bgr.png");
        /* padding: 64px 64px 0 64px; */
        background-size: cover;
        background-position: left;
        background-repeat: no-repeat;
        border-radius: 40px;
        box-shadow: 0px 9px 30px 0px #00000012;
        /* max-width: 1000px;
        height: 80%; */
    }

    .modal-open .modal {
        overflow: hidden !important;
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
        /* margin-bottom: 64px; */
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
        background-color: #283573;
        background-image: none;
        border-radius: 8px;
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
            /* margin-bottom: 48px; */
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
            /* margin-bottom: 32px; */
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
        left: -52px;
    }

    #contact-bar ul li.icon-satellite:nth-child(4) {
        top: 75px;
        left: -88px;
    }

    #contact-bar ul li.icon-satellite:nth-child(5) {
        top: 28px;
        left: -52px;
    }

    .icon-satellite a {
        width: 48px;
        height: 48px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 3px 10px #888;
        border-radius: 50%;
    }

    .cta-footer-container i {
        color: #459BDA;
        font-size: 20px;
    }

    .cta-footer-container {
        width: 48px;
        height: 48px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 3px 10px #888;
        border-radius: 50%;
    }

    /* end custom contact bar */

    /* @media screen and (max-width: 767px) {
        .footer__bar {
            display: none;
        }
    } */

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
        padding: 60px 0px 40px 0px;
        border-bottom: 1px solid white;
    }

    .footer__main .footer__item__title {
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        font-size: 20px;
        line-height: 32px;
        color: white;
    }

    .footer__main .footer__item__title ul li a {
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        font-size: 20px;
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
        line-height: 24px;
        color: white;
        font-family: "Roboto", sans-serif;
        font-size: 14px;
        font-weight: 400;
        letter-spacing: normal;
    }

    .footer__copyright a {
        text-decoration: underline;
    }
    .footer_logo a{
        padding: 0;
    }

    .footer_logo a img {
        width: 132px;
        border-radius: 8px;
    }

    .footer__menu .footer-logo-description {
        font-family: 'Roboto', sans-serif;
        margin-top: 20px;
        font-size: 16px;
        color: white;
    }
    .newsletter-form {
  display: flex;
  align-items: center;
  gap: 8px;
  /* border: 1px solid #fff;
  border-radius: 24px;
  overflow: hidden;
  background: white;
  padding: 2px;
  max-width: 350px; */
  padding: 8px 0px;
}

.newsletter-form input[type="email"] {
  display: flex;
  align-items: center;
  border: 1px solid #fff;
  border-radius: 24px;
  overflow: hidden;
  background: white;
  width: 100%;
  padding: 10px 16px;
}

/* .newsletter-form input[type="email"]::placeholder {
  color: rgba(255,255,255,0.8);
} */

.newsletter-submit {
  background: #f44336; /* màu đỏ */
  border: none;
  padding: 10px 16px;
  border-radius: 20px;
  color: #fff;
  font-size: 14px;
  font-weight: bold;
  display: flex;
  align-items: center;
  cursor: pointer;
}

.newsletter-submit i {
  margin-right: 6px;
}
.footer__main .wpcf7 form.failed .wpcf7-response-output, .wpcf7 form.aborted .wpcf7-response-output{
    color: white !important;
}
</style>
</body>

</html>