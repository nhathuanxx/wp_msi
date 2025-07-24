<div class="os-content-us-now-container">
    <div class="container">
        <div class="content-us-now-content row" style="padding: 200px 0px 80px 0px;">
            <div class="col-md-12 col-lg-7 content-us-now-content-1">
                <div class="on col-12">
                    <p>Contact us now to get started!</p>
                </div>
                <div class="bufterfly-mobile">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/icon_bufterfly.svg'); ?>">
                </div>
                <div class="under col-12">
                    <a class="under-btn" href="<?php bloginfo('wpurl'); ?>/drmarie/lien-he/">
                        <p>
                            <?php
                            if (pll_current_language('slug') == 'vi') {
                                echo 'Bắt đầu';
                            }
                            if (pll_current_language('slug') == 'en') {
                                echo 'Get started';
                            }
                            if (pll_current_language('slug') == 'zh') {
                                echo '开始';
                            }
                            ?>
                        </p>
                        <div class="get-started-icon">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/arrow_insert.svg'); ?>">

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-12 col-lg-5 content-us-now-content-2">
                <div class="content-2">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/icon_bufterfly.svg'); ?>">
                </div>
            </div>
        </div>
    </div>
    <style>
        .bufterfly-mobile {
            display: none;
        }

        .os-content-us-now-container {
            /* padding: 200px 0px 80px 0px; */
            background-color: white;
        }

        .os-content-us-now-container .content-us-now-content .on p {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 110px;
            font-weight: 500;
            line-height: 110px;
            text-align: left;
            color: #292929;
            margin: 0px;
        }

        .os-content-us-now-container .content-us-now-content .under .under-btn {
            width: 80%;
            height: 78px;
            padding: 15px 16px 15px 32px;
            margin-top: 64px;
            gap: 0px;
            border-radius: 100px;
            opacity: 0px;
            background-color: #F7F7F7;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
        }

        .os-content-us-now-container .content-us-now-content .under .under-btn p {
            font-family: 'Be Vietnam Pro', sans-serif;
            color: #000000;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            text-align: left;

            margin: 0px;
        }

        .os-content-us-now-container .content-us-now-content .under .under-btn .get-started-icon {
            width: 48px;
            height: 48px;
        }

        .content-us-now-content-2 .content-2 img {
            margin-left: 64px;
        }

        @media screen and (min-width: 767px){
.content-us-now-content-1,.content-us-now-content-2{
    padding: 0px;
}
.content-us-now-content-1 .on,.under{
    padding: 0px;
}
        }

        @media screen and (max-width: 767px) {
            .os-content-us-now-container .content-us-now-content .on {
                width: 70%;
            }

            .os-content-us-now-container .content-us-now-content .on p {
                font-family: 'Space Grotesk', sans-serif;
                font-size: 40px;
                font-weight: 500;
                line-height: 51.04px;
                text-align: left;
                color: #292929;
                margin: 0px;
            }

            .os-content-us-now-container .content-us-now-content .under .under-btn {
                width: 100%;
                height: 78px;
                padding: 15px 16px 15px 32px;
                margin-top: 40px;
                /* gap: 0px; */
                border-radius: 100px;
                /* opacity: 0px; */
                background-color: #F7F7F7;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 15px;
            }

            .content-us-now-content-2 .content-2 img {
                display: none;
            }

            .content-us-now-content {
                padding: 54px 16px 40px 16px !important;
            }

            .content-us-now-content-1 {
                padding: 0;
            }

            .on {
                padding: 0;
            }

            .under {
                padding: 0;
            }

            .bufterfly-mobile {
                display: block;
            }
            .bufterfly-mobile img{
                position: absolute;
                top: 0px;
                right: 0px;
                width: 32px;
                height: 32px;
            }
        }
    </style>