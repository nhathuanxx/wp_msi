<div class="os-partner-container">

    <!-- <div class="mask_group_partner">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/mask_group_partner.svg'); ?>">
        

    </div> -->
    <img class="mask_group_partner" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/mask_group_partner.svg'); ?>" alt="">

    <div class="container os-partner-content">
        <!-- <div class="home__title">
            <h2>Đối tác MSI</h2>
        </div> -->
        <div class="row partner-row-header">
            <div class="col-md-8 col-lg-4 partner-row-header-1">
                <div>
                    <?php
                    if (pll_current_language('slug') == 'vi') {
                        echo 'Chúng tôi làm việc với những đối tác tốt nhất';
                    }
                    if (pll_current_language('slug') == 'en') {
                        echo 'We work with the best Partners';
                    }
                    if (pll_current_language('slug') == 'zh') {
                        echo '我们与最优秀的合作伙伴合作';
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4 col-lg-1 partner-row-header-2">
                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/star_icon.svg'); ?>">

                </div>
            </div>
            <div class="col-md-9 col-lg-5 partner-row-header-3">
                <div>
                    <?php
                    if (pll_current_language('slug') == 'vi') {
                        echo 'Dựa trên chuyên môn của chúng tôi trong các dự án thiết kế-xây dựng và sự hiểu biết sâu sắc về các phương pháp thực hiện khác nhau, bạn có thể tin tưởng chúng tôi để xác định phương pháp phù hợp nhất với mục tiêu của bạn và dẫn đến kết quả thành công. Đội ngũ của chúng tôi cam kết tìm ra chiến lược đúng đắn cho bạn, đảm bảo kết quả tích cực mỗi lần.';
                    }
                    if (pll_current_language('slug') == 'en') {
                        echo 'Drawing on our expertise in design-build projects and a deep understanding of different delivery methods, you can trust us to pinpoint the approach that perfectly matches your objectives and leads to successful results. Our team is dedicated to finding the right strategy for you, guaranteeing a positive outcome every time.
';
                    }
                    if (pll_current_language('slug') == 'zh') {
                        echo '凭借我们在设计建造项目方面的专业知识以及对不同交付方式的深刻理解，您可以信任我们为您找到最适合您目标的方法，并取得成功的结果。我们的团队致力于为您找到正确的策略，确保每次都能获得积极的结果';
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-3 col-lg-2 partner-row-header-4">
                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/arrow_insert.svg'); ?>">

                </div>
            </div>
        </div>

        <div id="msi-partner-logo-carousel" class="slider slider-nav">
            <?php if (get_field('partner_logo_list', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('partner_logo_list', pll_current_language('slug'))) : ?>
                    <div>
                        <div class="os-slider-nav-img-container">
                        <img class="os-slider-nav-img" src="<?php echo get_sub_field('logo_image'); ?>" alt="Partner logo" />
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<style>
    .os-partner-container {
        background: radial-gradient(74.84% 203.31% at 6.64% 11.82%, #FC1886 0%, #E50C75 36.15%, #FF3690 100%)
            /* warning: gradient uses a rotation that is not supported by CSS and may not behave as expected */
        ;
        /* padding: 100px 0px; */
        position: relative;
        overflow: hidden;
    }

    .os-partner-content {
        padding: 100px 0px;
    }

    .partner-row-header {
        padding-bottom: 140px;
    }

    .partner-row-header {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .partner-row-header-1 {
        font-family: 'Space Grotesk', sans-serif;
        font-size: 56px;
        font-weight: 500;
        line-height: 67px;
        text-align: left;
        color: #FFFFFF;
        display: flex;
        justify-content: left;
        align-items: center;
    }

    .partner-row-header-2 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .partner-row-header-2 img {
        width: 40.68px;
        height: 48.25px;

    }

    .partner-row-header-3 {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #FFFFFF;
    }

    .partner-row-header-4 {
        display: flex;
        justify-content: right;
        align-items: center;
    }

    .partner-row-header-4 img {
        width: 150px;
        height: 150px;
    }

    .os-slider-nav-img-container{
        width: 180px;
        height: 90px;
        border-radius: 16px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
        overflow: hidden;
    }

    .os-slider-nav-img {
        /* width: 204px;
        height: 101px; */
        /* border-radius: 16px; */
    }

    .slick-dots li button:before {
        width: 10px;
        height: 10px;
        gap: 0px;
        opacity: 0px;
        background: var(--Alias-Button-Primary-Pinkex, #FFE4F4);
        border-radius: 50%;

    }

    .slick-dots li.slick-active button:before {
        color: transparent;
    }

    .slick-dots li button:before {
        color: transparent;
    }

    .os-partner-content .slick-next {
        /* mất nút chuyển ở banner màn home */
        display: none !important;
    }
    .os-partner-content .slick-prev {
        /* mất nút chuyển ở banner màn home */
        display: none !important;
    }
    .os-partner-content .slick-slide img{
        background: white;
        height: 100%;
        width: 100%;
        /* padding: 20px; */
    }
    .mask_group_partner{
        position: absolute;
        right: 0px;
        bottom: -350px;
    }

    .os-partner-content .slick-dots{
bottom: -66px;
    }

    @media screen and (min-width: 767px) {
        .partner-row-header-1,.partner-row-header-1,.partner-row-header-1,.partner-row-header-1{
            padding: 0px;
        }
    }

    @media screen and (max-width: 767px) {

        .os-partner-content .slick-slide img{
        background: white;
        height: 100%;
        width: 100%;
        /* padding: 12px; */
    }        .os-partner-content {
            padding: 40px 16px;
        }

        .partner-row-header-2,
        .partner-row-header-4 {
            display: none;
        }

        .partner-row-header-1 {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-size: 24px;
            font-weight: 500;
            line-height: 30px;
            text-align: left;
            margin-bottom: 24px;

        }
        .slick-dots{
            display: none !important;
        }

        .partner-row-header-3 {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            text-align: left;
            margin-bottom: 32px;

        }

        .partner-row-header {
            padding-bottom: 0;
        }

        .os-slider-nav-img-container{
            width: 97.37px;
            height: 48.69px;
            gap: 0px;
            border-radius: 7.64px;
    }

        /* .os-slider-nav-img {
            width: 97.37px;
            height: 48.69px;
            gap: 0px;
            border-radius: 7.64px;
        } */
    }

    /* .mask_group_partner {
        position: absolute;
        right: 0px;
        display: flex;
        align-items: end;
    } */
</style>