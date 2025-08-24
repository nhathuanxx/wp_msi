<?php

/**
 * Template Name: Page Contact
 *
 * @since 1.0.0
 * @author Kenji
 */

get_header();
$url = get_template_directory_uri();
$lang = pll_current_language('slug');
?>
<div class="wp-block-msi-blocks-header-image-uk alignfull">
    <div class="right-image-block" style="background-image: url('<?php echo get_bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/anh-page.jpg'); 
            background-size: cover; 
            background-position: center; 
            width: 100%; 
            ">
        <div class="container-wide">
            <div class="input-container">
                <span style="color:white;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);"><?php echo get_the_title(); ?></span>
            </div>
            <!-- <div class="container-image">
                <div class="image-container">
                    <img decoding="async" class="header-image lazyloaded" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/anh-page.jpg" alt="page-image">
                </div>
            </div> -->
        </div>
    </div>
</div>

<div class="page-contact">
    <?php msi_breadcrumb(); ?>

    <div class="contact-container">

        <div class="contact-content">
            <div class="ss1">
                <?php the_content(); ?>
            </div>
        </div>

        <div class="msi-contact-container">

            <!-- Left: Contact Form -->
            <div class="msi-contact-form">
                <?php
                if ($lang === 'vi') {
                    echo do_shortcode('[contact-form-7 id="5667" title="Form liên hệ"]');
                } else {
                    echo do_shortcode('[contact-form-7 id="5668" title="Contact form"]');
                }
                ?> </div>

            <!-- Right: Office Info + Map -->
            <div class="msi-contact-info">
                <h2 class="msi-contact-title">
                    <?php echo ($lang === 'vi') ? 'MSI Reproductive Choices tại Việt Nam' : 'MSI Reproductive Choices in Vietnam'; ?>
                </h2>
                <p class="msi-contact-description">
                    <?php
                    if ($lang === 'vi') {
                        echo 'Để biết thông tin chung và các thắc mắc về MSI Reproductive Choices tại Việt Nam, vui lòng liên hệ với chúng tôi qua điện thoại hoặc email.';
                    } else {
                        echo 'For general information and enquiries about MSI Reproductive Choices in Vietnam, please contact us by phone or email.';
                    }
                    ?>
                </p>

                <!-- Google Map -->
                <div class="msi-contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3724.038132324194!2d105.81553046126574!3d21.031160180537913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zUGjDsm5nIDIwMy0yMDUsIE5ow6AgQTEvMjk4IFAuIEtpbSBNw6MsIEtodSBOZ2_huqFpIGdpYW8gxJFvw6BuIFbhuqFuIFBow7pjLCBCYSDEkMOsbmgsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1755111763281!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Address & Contact -->
                <div class="msi-contact-details">
                    <?php
                    $phone_raw = get_field('so_dien_thoai', 'option');
                    $phone = is_string($phone_raw) ? $phone_raw : '';
                    $phone_link = $phone ? 'tel:' . preg_replace('/\s+/', '', $phone) : '#';
                    $email = get_field('email', 'option');
                    ?>

                    <p><strong><?php echo ($lang === 'vi') ? 'Địa chỉ:' : 'Address:'; ?></strong> <?php the_field('dia_chi', 'option'); ?>
                    </p>
                    <p><strong><?php echo ($lang === 'vi') ? 'Hotline:' : 'Hotline:'; ?></strong> <a href="<?php echo esc_attr($phone_link); ?>"
                            style="color:#283573;font-size:20px;margin:0">
                            <?php echo esc_html($phone ?: 'Chưa có số'); ?>
                        </a></p>
                    <p><strong><?php echo ($lang === 'vi') ? 'Email:' : 'Email:'; ?></strong> <a href="mailto:<?php echo esc_attr($email); ?>"
                            style="color:#283573;font-size:20px;margin:0">
                            <?php echo esc_html($email); ?>
                        </a></p>
                </div>

                <!-- Social Links -->
                <div class="msi-contact-social">
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

        </div>
    </div>
    <h3 class="wp-block-heading has-text-align-center">
        <?php if ($lang === 'vi') : ?>
            Tìm hiểu thêm về MSI Việt Nam
        <?php else : ?>
            Learn more about MSI Vietnam
        <?php endif; ?>
    </h3>
    <p class="has-text-align-center-p">
        <?php if ($lang === 'vi') : ?>
            Tìm hiểu sâu hơn về MSI Việt Nam bằng cách đọc những câu chuyện, tin tức của chúng tôi.
        <?php else : ?>
            Explore more about MSI Vietnam by reading our stories and news.
        <?php endif; ?>
    </p>
    <?php require get_template_directory() . '/template-parts/post-list.php'; ?>

    <?php get_footer(); ?>


    <style>
        #pagetitle,
        .clinic-nearby-u__nav {
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

        /* .w-form-custom .form-group input:first-child {
            color: #989898;
            background-image: url(<?php bloginfo('wpurl'); ?>.'/wp-content/themes/m5/assets/images/os/icon-form-name.svg');
            background-position: right 10px center;
            background-repeat: no-repeat;
            padding-right: 30px;
        } */

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
    <style>
        .msi-contact-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            max-width: 1335px;
            margin: 0px auto;
            padding: 40px 0px;
        }

        /* Left: Contact Form */

        .msi-contact-form p,
        .msi-contact-form h2 {
            color: white;

        }

        .msi-contact-form input,
        .msi-contact-form textarea,
        .msi-contact-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .msi-contact-form button {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        /* Right: Contact Info */
        .msi-contact-info {
            flex: 1;
            min-width: 300px;
        }

        .msi-contact-title {
            margin-bottom: 10px;
        }

        .msi-contact-map {
            margin: 20px 0;
        }

        .msi-contact-map iframe {
            width: 100%;
            height: 300px;
            border: 0;
            border-radius: 8px;
        }

        .msi-contact-social {
            display: flex;
            gap: 10px;
        }

        .msi-contact-social-link {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: #ddd;
            color: #000;
            text-align: center;
            line-height: 40px;
            border-radius: 6px;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;

        }
    </style>