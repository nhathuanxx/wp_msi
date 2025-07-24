<?php
/**
 * Template Name: Page Contact
 *
 * @since 1.0.0
 * @author Kenji
 */

get_header();
$url = get_template_directory_uri();
?>
<div class="page-contact">

    <div class="container contact-container">

        <div class="contact-content">
            <!-- <div class="ss1">
                <?php the_content(); ?>
            </div> -->


            <div class="row page-content-info__content">
                <div class="col-xs-12 col-xl-6">

                    <div class="w-info">
                        <div class="page-content-info__content-title">
                        <?php
                            if (pll_current_language('slug') == 'vi') {
                                echo 'Gửi thông tin cho chúng tôi với:';
                            }
                            if (pll_current_language('slug') == 'en') {
                                echo 'Send us a message by:';
                            }
                            if (pll_current_language('slug') == 'zh') {
                                echo '通过以下方式给我们留言';
                            }
                            ?>
                        </div>
                        <?php echo get_field('page_contact_infomation'); ?>
                    </div>
                </div>

                <div class="col-xs-12 col-xl-6">

                    <div class="w-form w-form-custom">
                        <?php
                        $page_contact_form_contact = get_field('page_contact_form_contact');
                        echo do_shortcode($page_contact_form_contact, false); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content-info">
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-info-title">
                                <?php
                                if (pll_current_language('slug') == 'vi') {
                                    echo 'Số điện thoại';
                                }
                                if (pll_current_language('slug') == 'en') {
                                    echo 'Support Hotline';
                                }
                                if (pll_current_language('slug') == 'zh') {
                                    echo '支持热线';
                                }
                                ?>
                            </div>
                            <a href="tel:1900 55 88 82" class="content-info-subtitle">
                                1900 55 88 82
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-info-title">
                                <?php
                                if (pll_current_language('slug') == 'vi') {
                                    echo 'Email';
                                }
                                if (pll_current_language('slug') == 'en') {
                                    echo 'Email';
                                }
                                if (pll_current_language('slug') == 'zh') {
                                    echo 'Email';
                                }
                                ?>
                            </div>
                            <a href="mailto:contactcenter" class="content-info-subtitle">
                                contactcenter@basimarie.vn
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-info-title">
                                <?php
                                if (pll_current_language('slug') == 'vi') {
                                    echo 'Địa chỉ trụ sở chính';
                                }
                                if (pll_current_language('slug') == 'en') {
                                    echo 'Headquarters Address';
                                }
                                if (pll_current_language('slug') == 'zh') {
                                    echo '总部地址';
                                }
                                ?>
                            </div>
                            <a href="tel:1900 55 88 82" class="content-info-subtitle">
                                1900 55 88 82
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require get_template_directory() . '/template-parts/clinic-address.php'; ?>

</div>
<?php require get_template_directory() . '/template-parts/content-us-now.php'; ?>

<?php
get_footer(); ?>


<style>
    #pagetitle, .clinic-nearby-u__nav {
        display: none;
    }
    .clinic-nearby-u .clinic-nearby-u__header_see-all {
        display: none;
    }
    .clinic-nearby-u .clinic-nearby-u__nav_custom {
        display: block;
    }

    .clinic-nearby-u__nav_custom button:first-child img {
        transform: rotate(180deg);
    }

    .clinic-nearby-u__nav_custom button:hover img {
        filter: opacity(0.5);
    }

    .page-contact {
        background-color: #fff;
    }

    .page-content-info__content {
        background-color: #F7F7F7;
        border-radius: 40px;
        padding: 64px;
    }

    .page-content-info__content-title {
        font-family: "Space Grotesk", sans-serif;
        font-size: 64px;
        font-weight: 500;
        line-height: 72px;
        text-align: left;
        color: #292929;
        margin-bottom: 40px;
    }

    .map_iframe {
        display: block;
        margin-top: 56px;
    }

    .clinic-nearby-u {
        padding-bottom: 0px;
    }

    .page-content-info {
        border-top: 1px solid #989898;
        padding-top: 64px;
        margin-top: 120px;
    }

    .content-info-title {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 24px;
        font-weight: 600;
        line-height: 30px;
        text-align: left;
        color: #292929;
        margin-bottom: 32px;
    }

    .w-info {
        margin-bottom: 40px;
    }

    .page-contact .contact-content .w-form {
        border: none;
    }

    .content-info-subtitle {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
        text-align: left;
        color: #292929;
    }

    /* css for form contact */
    .w-form-custom .form-group {
        margin-bottom: 32px;

    }

    .w-form-custom .form-group input:first-child {
        color: #989898;
        background-image: url(<?php bloginfo('wpurl'); ?>.'/wp-content/themes/m5/assets/images/os/icon-form-name.svg');
        background-position: right 10px center;
        background-repeat: no-repeat;
        padding-right: 30px;
    }

    .w-form-custom .form-action button {
        background-image: none;
        background-color: #E50C75;

    }

    .w-form-custom .form-group select {
        border-top: none;
        border-right: none;
        border-left: none;
        padding-left: 0;
        border-radius: 0;
    }

    .w-form-custom .form-group select.form-control:focus {
        box-shadow: none;
    }

    @media screen and (max-width: 1199px) {
        .w-info {
            margin-bottom: 40px;
        }

        .page-content-info {
            margin-top: 40px;
        }

        .page-content-info__content .page-content-info__content-title {
            font-size: 48px;
            margin-bottom: 32px;
            line-height: 60px;
        }
        .contact-content .page-content-info__content {
            padding: 48px;
        }
    }

    @media screen and (max-width: 991px) {
        .page-content-info__content .page-content-info__content-title {
            font-size: 40px;
            margin-bottom: 28px;
            margin-bottom: 48px;
        }
        .contact-content .page-content-info__content {
            padding: 40px;
        }
    }
    @media screen and (max-width: 767px) {
        .page-content-info__content .page-content-info__content-title {
            font-size: 32px;
            margin-bottom: 24px;
            line-height: 40px;
        }
        .content-info-title {
            margin-bottom: 16px;
        }
        .contact-content .page-content-info__content {
            padding: 16px;
        }
        .page-content-info {
            margin-top: 40px;
        }
    }

    @media screen and (max-width: 575px) {
        .page-content-info__content .page-content-info__content-title {
            font-size: 24px;
            margin-bottom: 24px;
            line-height: 30.62px;
        }
        .contact-content .page-content-info__content {
            padding: 16px 0;
        }
        .page-content-info {
            margin-top: 40px;
        }
    }
    /* end  css for form contact*/

</style>