<div class="msi-intro-section">
    <!-- Bên trái -->
    <div class="msi-intro-left">
        <h2 class="msi-intro-title"><?php if (pll_current_language('slug') === 'vi') : ?>
                GIỚI THIỆU CHUNG <?php else : ?>
                GENERAL INTRODUCTION
            <?php endif; ?></h2>

        <p class="msi-intro-text">
        <div class="msi-intro-text">
            <?php the_field('general_introduction_1', pll_current_language('slug')); ?>
        </div>
        <div class="msi-intro-text">
            <?php the_field('general_introduction_2', pll_current_language('slug')); ?>
        </div>
        <div class="msi-intro-text">
            <?php the_field('general_introduction_3', pll_current_language('slug')); ?>
        </div>
        </p>
        <a href="<?php echo (pll_current_language('slug') === 'vi') ? '/ve-chung-toi' : '/about-us'; ?>" class="msi-intro-btn"><?php if (pll_current_language('slug') === 'vi') : ?>
                XEM THÊM <?php else : ?>
                READ MORE
            <?php endif; ?></a>
    </div>
    <div class="msi-intro-right">
        <div class="msi-intro-right-1">
            <div class="msi-circle-container-1">
                <img class="nen-1" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/nen1.png"
                    alt="about-us-1">
                <img class="nen-2" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/nen1.png"
                    alt="about-us-1">
                <?php
                $text1 = get_field('mo_ta_so_lieu_1', pll_current_language('slug'));
                $so_lieu1 = get_field('so_lieu_1', pll_current_language('slug'));
                echo do_shortcode('[msi_circle size="260" target="' . $so_lieu1 . '" initial_rotation="40" text="' . $text1 . '"]');
                ?>
            </div>
            <div class="msi-circle-container-2">
                <img class="nen-3" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/nen1.png"
                    alt="about-us-1">
                <?php
                $text2 = get_field('mo_ta_so_lieu_2', pll_current_language('slug'));
                $so_lieu2 = get_field('so_lieu_2', pll_current_language('slug'));
                echo do_shortcode('[msi_circle size="220" target="' . $so_lieu2 . '" initial_rotation="120" text="' . $text2 . '"]');
                ?>
            </div>
        </div>
        <div class="msi-intro-right-2">
            <div class="msi-circle-container-3">
                <img class="nen-4" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/nen1.png"
                    alt="about-us-1">
                <?php
                $text3 = get_field('mo_ta_so_lieu_3', pll_current_language('slug'));
                $so_lieu3 = get_field('so_lieu_3', pll_current_language('slug'));
                echo do_shortcode('[msi_circle size="200" target="' . $so_lieu3 . '" initial_rotation="150" text="' . $text3 . '"]');
                ?>
            </div>
        </div>
    </div>
</div>
<style>
    /* .msi-intro-left {
        flex: 1;
        max-width: 40%;
        font-family: "Roboto", sans-serif;
    } */

    .msi-intro-title {
        font-size: 28px;
        font-weight: 800;
        color: #283573;
        margin-bottom: 20px;
        font-family: "Roboto", sans-serif;
    }

    /* Bên phải giữ nguyên */
    .msi-intro-right {
        display: flex;
        flex-direction: column;
        gap: 24px;
        border-radius: 12px;
    }

    .msi-intro-right-1 {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .msi-intro-right-2 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .msi-circle-container-1,
    .msi-circle-container-2,
    .msi-circle-container-3 {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px;
    }

    .msi-circle-container-2 {
        bottom: 32px;
        right: 24px;
    }

    .msi-circle-container-3 {
        bottom: 100px;
    }

    .msi-circle-container-1 img,
    .msi-circle-container-2 img,
    .msi-circle-container-3 img {
        position: absolute;
    }

    .msi-circle-container-1 .nen-1 {
        bottom: 0px;
        left: 0px;
    }

    .msi-circle-container-1 .nen-2 {
        top: 0px;
        right: 0px;
    }

    .msi-circle-container-2 .nen-3 {
        bottom: 0px;
        right: 0px;
    }

    .msi-circle-container-3 .nen-4 {
        bottom: 0px;
        left: 0px;
    }

    @media (max-width: 1335px) {
        .msi-intro-section {
            padding: 40px 24px;

        }
    }

    /* Mobile */
    @media (max-width: 1080px) {
        .msi-intro-section {
            flex-direction: column;
            /* xếp chồng */
            align-items: center;
            /* căn giữa toàn bộ */
            gap: 30px;

        }

        /* Bên trái full width */
        .msi-intro-left {
            max-width: 100%;
            text-align: center;
            /* căn giữa nội dung nếu muốn */
        }

        .msi-intro-title {
            font-size: 20px;
        }

        /* Bên phải full width */
        .msi-intro-right {
            flex-direction: column;
            align-items: center;
            gap: 20px;
            padding: 0;
        }

        /* Các vòng tròn xếp dọc */
        .msi-intro-right-1 {
            flex-direction: column;
            gap: 20px;
        }

        .msi-intro-right-2 {
            justify-content: center;
        }

        /* Xóa các dịch chuyển để căn giữa */
        .msi-circle-container-1,
        .msi-circle-container-2,
        .msi-circle-container-3 {
            bottom: unset;
            right: unset;
            padding: 20px;
        }

        /* Hình nền vẫn giữ đúng vị trí */
        .msi-circle-container-1 img,
        .msi-circle-container-2 img,
        .msi-circle-container-3 img {
            max-width: 100%;
            height: auto;
        }
    }
</style>