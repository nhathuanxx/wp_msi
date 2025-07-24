<?php
/*
* Template Name: About Page
*/
get_header(); ?>

<main class="main-content about-page">
    <div class="about-banner">
        <div class="container">
            <figure class="margin-0 padding-0">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctores.png'); ?>" alt="Giới thiệu">
            </figure>
        </div>
    </div>
    <div class="about-intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <figure class="about-intro__banner margin-0">
                        <img src="https://via.placeholder.com/390x390" alt="Giới thiệu MSI">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="about-intro__content">
                        <div class="home__title about-intro__title">
                            <h2>Giới Thiệu <span class="primary-color">MSI</span></h2>
                        </div>
                        <div class="about-intro__desc">
                            <p class="secondary-color-txt">
                                Các phòng khám Marie Stopes chú trọng xây dựng một môi trường cung cấp dịch vụ thân thiện, chuyên nghiệp, chu đáo và đáng tin cậy dành cho mọi khách hàng trong độ tuổi sinh sản. Hiểu được tầm quan trọng của công tác tư vấn, chúng tôi luôn luôn lắng nghe nhu cầu khách hàng và chia sẻ với chị em những thông tin đầy đủ và cập nhật nhất trong lĩnh vực SKSS.
                            </p>
                            <ul class="margin-0 padding-0">
                                <li>
                                    <i class="icon-check primary-color"></i>
                                    <span class="secondary-color-txt">Lấy khách hàng là trọng tâm: sự an toàn về sức khỏe và sự hài lòng của bạn là ưu tiên hàng đầu.</span>
                                </li>
                                <li>
                                    <i class="icon-check primary-color"></i>
                                    <span class="secondary-color-txt">Môi trường dịch vụ thân thiện</span>
                                </li>
                                <li>
                                    <i class="icon-check primary-color"></i>
                                    <span class="secondary-color-txt">Tập trung vào hiệu quả thiết thực với khách hàng thay vì giới thiệu kỹ thuật phức tạp, tốn kém.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-rule rule">
        <div class="container">
            <div class="rule__head">
                <div class="home__title rule__title">
                    <h2>Nguyên tắc tại Marie Stopes Việt Nam </h2>
                </div>
            </div>
            <div class="rule__body">
                <div class="row">
                    <div class="col-md-4 col-sm-6 item">
                        <div class="item__wrap">
                            <figure class="item__icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/khach-hang-la-trong-tam.png'); ?>" alt="Khách hàng là trọng tâm">
                            </figure>
                            <h3 class="item__title">
                                Khách hàng là trọng tâm
                            </h3>
                            <p class="item__desc">
                                Sự an toàn về sức khỏe và sự hài lòng của bạn là ưu tiên hàng đầu
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item">
                        <div class="item__wrap">
                            <figure class="item__icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/dich-vu-than-thien.png'); ?>" alt="Dịch vụ thân thiện">
                            </figure>
                            <h3 class="item__title">
                                Dịch vụ thân thiện
                            </h3>
                            <p class="item__desc">
                                Sự an toàn về sức khỏe và sự hài lòng của bạn là ưu tiên hàng đầu
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item">
                        <div class="item__wrap">
                            <figure class="item__icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/hieu-qua.png'); ?>" alt="Hiệu quả thiết thực ">
                            </figure>
                            <h3 class="item__title">
                                Hiệu quả thiết thực
                            </h3>
                            <p class="item__desc">
                                Sự an toàn về sức khỏe và sự hài lòng của bạn là ưu tiên hàng đầu
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="timeline">
        <div class="container">
            <div class="timeline__wrap position-rel">
                <div class="timeline__head">
                    <div class="home__title timeline__title">
                        <h2>Hành trình phát triển MSI</h2>
                    </div>
                    <div class="timeline__head__desc">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <p class="margin-0">Các phòng khám Marie Stopes chú trọng xây dựng một môi trường cung cấp dịch vụ thân thiện, chuyên nghiệp, chu đáo và đáng tin cậy dành cho mọi khách hàng trong độ tuổi sinh sản.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline__body">
                    <figure>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/timeline.svg'); ?>" alt="Hành trình phát triển MSI">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="about-staff position-rel">
        <div class="about-staff__prev"><i class="icon-arrow-back"></i></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-staff__big">
                        <figure class="about-staff__big__img margin-0">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/doctor.png'); ?>" alt="Chuyên viên">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-staff__info">
                        <h3 class="about-staff__name">Ts. Delia Mitchell</h3>
                        <span class="about-staff__position">Nguyên giám đốc hệ thống phòng khám Marie Stopes</span>
                        <p class="about-staff__desc margin-0">Các phòng khám Marie Stopes chú trọng xây dựng một môi trường cung cấp dịch vụ thân thiện, chuyên nghiệp, chu đáo và đáng tin cậy dành cho mọi khách hàng trong độ tuổi sinh sản.</p>
                    </div>
                    <div class="about-staff__slider">
                        <div class="sun-slider sun-slider--2" data-slick='{"slidesToShow": 3, "nextArrow": ".about-staff__next", "prevArrow": ".about-staff__prev", "centerMode": true, "centerPadding": "15px", "autoplay": true, "autoplaySpeed": 8000, "responsive": [{"breakpoint": 575, "settings": {"centerMode": false, "slidesToShow": 2 } } ]}'>
                            <div class="item" data-info='{"name": "Ronald Zimmerman", "position": "Chuyên viên", "avatar": "<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/doctor.png'); ?>", "desc": "Các phòng khám Marie Stopes chú trọng xây dựng một môi trường cung cấp dịch vụ thân thiện, chuyên nghiệp, chu đáo và đáng tin cậy"}'>
                                <div class="item__wrap">
                                    <figure class="item__head">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/doctor.png'); ?>" alt="Ronald Zimmerman">
                                    </figure>
                                    <div class="item__body">
                                        <h5 class="item__name">Ronald Zimmerman</h5>
                                        <p class="item__position">Chuyên viên</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-info='{"name": "Lucille Little", "position": "Chuyên viên", "avatar": "<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/doctor.png'); ?>", "desc": "Dịch vụ thân thiện, chuyên nghiệp, chu đáo và đáng tin cậy dành cho mọi khách hàng trong độ tuổi sinh sản."}'>
                                <div class="item__wrap">
                                    <figure class="item__head">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/doctor.png'); ?>" alt="Ronald Zimmerman">
                                    </figure>
                                    <div class="item__body">
                                        <h5 class="item__name">Lucille Little</h5>
                                        <p class="item__position">Chuyên viên</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-info='{"name": "Kate Schmidt", "position": "Chuyên viên", "avatar": "<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/doctor.png'); ?>", "desc": "thân thiện, chuyên nghiệp, chu đáo và đáng tin cậy dành cho mọi khách hàng."}'>
                                <div class="item__wrap">
                                    <figure class="item__head">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/doctor.png'); ?>" alt="Kate Schmidt">
                                    </figure>
                                    <div class="item__body">
                                        <h5 class="item__name">Kate Schmidt</h5>
                                        <p class="item__position">Chuyên viên</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-info='{"name": "Delia Mitchell", "position": "Chuyên viên", "avatar": "<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/doctor.png'); ?>", "desc": "thân thiện, chuyên nghiệp, chu đáo và đáng tin cậy dành cho mọi khách hàng trong độ tuổi sinh sản."}'>
                                <div class="item__wrap">
                                    <figure class="item__head">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/doctor.png'); ?>" alt="Delia Mitchell">
                                    </figure>
                                    <div class="item__body">
                                        <h5 class="item__name">Delia Mitchell</h5>
                                        <p class="item__position">Chuyên viên</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-staff__next"><i class="icon-arrow-next"></i></div>
    </div>
    <?php require get_template_directory() . '/template-parts/gallery.php'; ?>
    <div class="award">
        <div class="container">
            <div class="award__head">
                <div class="home__title award____title">
                    <h2>Giải thưởng & Chứng nhận</h2>
                </div>
            </div>
            <div class="award__body">
                <figure>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/giai-thuong.png'); ?>" alt="Giải thưởng & Chứng nhận">
                </figure>
            </div>
        </div>
    </div>
    <div class="about-count counter-box">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 item">
                    <div class="item__wrap">
                        <figure class="item__icon margin-0">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/icon-chi-nhanh.png'); ?>" alt="Chi nhánh">
                        </figure>
                        <h4 class="item__number counter-number">09</h4>
                        <p class="margin-0 item__name">Chi nhánh</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <div class="item__wrap">
                        <figure class="item__icon margin-0">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/icon-khach-hang.png'); ?>" alt="Khách Hàng">
                        </figure>
                        <h4 class="item__number counter-number">2300</h4>
                        <p class="margin-0 item__name">Khách Hàng</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <div class="item__wrap">
                        <figure class="item__icon margin-0">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/introduce/icon-chuyen-vien.png'); ?>" alt="Chuyên viên">
                        </figure>
                        <h4 class="item__number counter-number">128</h4>
                        <p class="margin-0 item__name">Chuyên viên</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require get_template_directory() . '/template-parts/address.php'; ?>
</main>

<?php get_footer(); ?>