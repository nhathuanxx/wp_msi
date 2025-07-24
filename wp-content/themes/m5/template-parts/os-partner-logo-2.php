<div class="os-partner-container">
    <!-- <div class="mask_group_partner">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/mask_group_partner.svg'); ?>">

    </div> -->
    <div class="container os-partner-content">

        <!-- <div class="home__title">
            <h2>Đối tác MSI</h2>
        </div> -->
        <div class="row partner-row-header">
            <div class="col-md-6 col-lg-6 partner-row-header-1">
                <div>
                    <?php
                    if (pll_current_language('slug') == 'vi') {
                        echo 'Nhiều dịch vụ dành cho bạn';
                    }
                    if (pll_current_language('slug') == 'en') {
                        echo 'Many service for you';
                    }
                    if (pll_current_language('slug') == 'zh') {
                        echo '我们与最优秀的合作伙伴合作';
                    }
                    ?>
                </div>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/arrow_insert.svg'); ?>">
            </div>
            <div class="col-md-6 col-lg-6 partner-row-header-2">
                <div class="os-partner-2-btn-container">
                    <a class="os-btn-partner-2" href="tel:<?php echo get_field('hotline', pll_current_language('slug')); ?>">Liên hệ</a>
                    <a class="os-btn-partner-2 book-calendar" href="">Đặt lịch</a>
                    <a class="os-btn-partner-2" href="<?php bloginfo('wpurl'); ?>/phong-kham-gan-ban/">Tìm phòng khám</a>


                </div>
            </div>

        </div>
    </div>
</div>
<style>
    .os-partner-container {
        background: radial-gradient(74.84% 203.31% at 6.64% 11.82%, #FC1886 0%, #E50C75 36.15%, #FF3690 100%)
            /* warning: gradient uses a rotation that is not supported by CSS and may not behave as expected */
        ;
        /* padding: 100px 0px; */
    }

    .os-partner-content {
        padding: 100px 0px;
    }

    /* .partner-row-header {
        padding-bottom: 140px;
    } */

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
        align-items: start;
        margin: 0;
        gap: 40px;

    }

    .partner-row-header-2 {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
    }

    .partner-row-header-2 img {
        width: 40.68px;
        height: 48.25px;
        margin: 0;

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
        margin: 0;
    }

    .partner-row-header-4 {
        display: flex;
        justify-content: right;
        align-items: center;
        margin: 0;
    }

    .partner-row-header-4 img {
        width: 150px;
        height: 150px;
    }

    .os-slider-nav-img {
        width: 204px;
        height: 101px;
        border-radius: 16px;
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

    .os-partner-content .slick-next,
    .slick-prev {
        /* mất nút chuyển ở banner màn home */
        /* display: none !important; */
    }

    .os-partner-content .slick-slide img {
        background: white;
    }

    .os-partner-2-btn-container {
        display: flex;
        gap: 32px;
    }

    .os-btn-partner-2 {
        height: 48px;
        padding: 12px 24px 12px 24px;
        border-radius: 100px;
        opacity: 0px;
        background: var(--Alias-Text-White, #FFFFFF);
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
        text-align: left;
        color: var(--Alias-Text-Primary-DarkPink, #D40261);
        ;
    }

    @media screen and (max-width: 767px) {
        .os-partner-content {
            padding: 40px 16px;
        }

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

        .slick-dots {
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

        .os-slider-nav-img {
            width: 97.37px;
            height: 48.69px;
            gap: 0px;
            border-radius: 7.64px;
        }

        .partner-row-header-1 img {
            width: 32px;
            height: 32px;
        }

        .os-partner-2-btn-container {
            display: block;
        }

        .partner-row-header-2 {
            display: flex;
            justify-content: start;

        }

        .os-partner-2-btn-container {
            display: grid;
            gap: 16px;
        }
        .os-btn-partner-2{
            width: fit-content;
        }
    }

    /* .mask_group_partner {
        position: absolute;
        right: 0px;
        display: flex;
        align-items: end;
    } */
</style>