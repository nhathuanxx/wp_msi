<div class="os-partner-container" id="msiPartnerLogo">
    <div class=" os-partner-content" style="background-image: url('<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/hompage-banner.jpg'); 
            background-size: cover; 
           ">
         <div class="row partner-row-header" id="doi-tac-chien-luoc">
            <div class="col-8 partner-row-header-1">

                <?php
                if (pll_current_language('slug') == 'vi') {
                    echo 'Đối tác chiến lược';
                }
                if (pll_current_language('slug') == 'en') {
                    echo 'Strategic Partners';
                }
                ?>

            </div>
        </div>
             <div id="msi-partner-logo-carousel-2" class="slider slider-nav">
            <?php if (get_field('partner_logo_list_2', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('partner_logo_list_2', pll_current_language('slug'))) : ?>
                    <div>
                        <div class="os-slider-nav-img-container">
                            <img class="os-slider-nav-img" src="<?php echo get_sub_field('logo_image'); ?>" alt="Partner logo" />
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="row partner-row-header" id="doi-tac-cong-tu">
            <div class="col-8 partner-row-header-1">

                <?php
                if (pll_current_language('slug') == 'vi') {
                    echo 'Đối tác Công tư';
                }
                if (pll_current_language('slug') == 'en') {
                    echo 'Public-Private Partnership';
                }
                ?>

            </div>
        </div>

        <div id="msi-partner-logo-carousel-3" class="slider slider-nav">
            <?php if (get_field('partner_logo_list_3', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('partner_logo_list_3', pll_current_language('slug'))) : ?>
                    <div>
                        <div class="os-slider-nav-img-container">
                            <img class="os-slider-nav-img" src="<?php echo get_sub_field('logo_image'); ?>" alt="Partner logo" />
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

         <div class="row partner-row-header" id="doi-tac-doanh-nghiep">
            <div class="col-8 partner-row-header-1">

                <?php
                if (pll_current_language('slug') == 'vi') {
                    echo 'Đối tác Doanh nghiệp';
                }
                if (pll_current_language('slug') == 'en') {
                    echo 'Business Partner';
                }
                ?>

            </div>
        </div>

        <div id="msi-partner-logo-carousel-4" class="slider slider-nav">
            <?php if (get_field('partner_logo_list_4', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('partner_logo_list_4', pll_current_language('slug'))) : ?>
                    <div>
                        <div class="os-slider-nav-img-container">
                            <img class="os-slider-nav-img" src="<?php echo get_sub_field('logo_image'); ?>" alt="Partner logo" />
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

         <div class="row partner-row-header" id="doi-tac-quoc-te">
            <div class="col-8 partner-row-header-1">

                <?php
                if (pll_current_language('slug') == 'vi') {
                    echo 'Đối tác Tổ chức Quốc tế';
                }
                if (pll_current_language('slug') == 'en') {
                    echo 'Global Partner';
                }
                ?>

            </div>
        </div>

        <div id="msi-partner-logo-carousel-5" class="slider slider-nav">
            <?php if (get_field('partner_logo_list_5', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('partner_logo_list_5', pll_current_language('slug'))) : ?>
                    <div>
                        <div class="os-slider-nav-img-container">
                            <img class="os-slider-nav-img" src="<?php echo get_sub_field('logo_image'); ?>" alt="Partner logo" />
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

         <div class="row partner-row-header" id="doi-tac-to-chuc-xa-hoi-dan-su">
            <div class="col-8 partner-row-header-1">

                <?php
                if (pll_current_language('slug') == 'vi') {
                    echo 'Đối tác Tổ chức Xã hội Dân sự (CSO)';
                }
                if (pll_current_language('slug') == 'en') {
                    echo 'Partner Civil Society Organization (CSO)';
                }
                ?>

            </div>
        </div>

        <div id="msi-partner-logo-carousel-6" class="slider slider-nav">
            <?php if (get_field('partner_logo_list_6', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('partner_logo_list_6', pll_current_language('slug'))) : ?>
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

        /* padding: 100px 0px; */
        position: relative;
        overflow: hidden;
        margin-bottom: 40px;
    }

    .os-partner-content {
        padding: 80px 24px;
    }

    .partner-row-header {
        padding-bottom: 40px;
    }

    .partner-row-header {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .partner-row-header-1 {
        font-family: 'Roboto', sans-serif;
        font-size: 40px;
        font-weight: 700;
        line-height: 67px;
        text-align: left;
        color: #FFFFFF;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
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
        font-family: 'Roboto', sans-serif;
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

    .os-slider-nav-img-container {
        /* width: 180px;
        height: 90px; */
        width: 100%;
        height: 100%;
        border-radius: 16px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: transparent;
        overflow: hidden;
    }

    .os-slider-nav-img {
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

    .os-partner-content .slick-slide img {
        background: white;
        height: 100%;
        width: 100%;
        object-fit: contain;
        padding: 4px;
        width: 180px;
        height: 90px;
        border-radius: 16px;
        /* padding: 20px; */
    }

    .mask_group_partner {
        position: absolute;
        right: 0px;
        bottom: -350px;
    }

    .os-partner-content .slick-dots {
        bottom: -66px;
    }

    @media screen and (min-width: 767px) {

        .partner-row-header-1,
        .partner-row-header-1,
        .partner-row-header-1,
        .partner-row-header-1 {
            padding: 0px;
        }
    }

    @media screen and (max-width: 767px) {

        .os-partner-content .slick-slide img {
            background: white;
            height: 100%;
            width: 100%;
            object-fit: contain;
            padding: 4px;
            /* padding: 12px; */
        }

        .os-partner-content {
            padding: 40px 16px;
        }

        .partner-row-header-2,
        .partner-row-header-4 {
            display: none;
        }

        .partner-row-header-1 {
            font-family: 'Roboto', sans-serif;
            font-size: 24px;
            font-weight: 700;
            line-height: 30px;
            text-align: center;
            margin-bottom: 24px;

        }

        .slick-dots {
            display: none !important;
        }

        .partner-row-header-3 {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            text-align: left;
            margin-bottom: 32px;

        }

        .partner-row-header {
            padding-bottom: 0;
        }

        .os-slider-nav-img-container {
            width: 97.37px;
            height: 48.69px;
            gap: 0px;
            border-radius: 7.64px;
        }
    }
</style>