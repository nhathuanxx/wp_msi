<div class="msi-intro-section">
    <!-- Bên trái -->
    <div class="msi-intro-left">
        <?php if (pll_current_language('slug') === 'vi') : ?>
            <h2 class="msi-intro-title">GIỚI THIỆU CHUNG</h2>
            <p class="msi-intro-text">
                Với gần năm thập kỷ đồng hành cùng phụ nữ toàn cầu, Tổ chức MSI Reproductive Choices (MSI),
                tiền thân là Marie Stopes International đã khẳng định vị thế tiên phong trong lĩnh vực chăm sóc
                sức khỏe sinh sản tại 36 quốc gia.
            </p>
            <a href="/ve-chung-toi" class="msi-intro-btn">XEM THÊM</a>
        <?php else : ?>
            <h2 class="msi-intro-title">ABOUT US</h2>
            <p class="msi-intro-text">
                With nearly five decades of supporting women worldwide, MSI Reproductive Choices (MSI),
                formerly known as Marie Stopes International, has established its pioneering position in the field
                of reproductive healthcare across 36 countries.
            </p>
            <a href="/about-us" class="msi-intro-btn">READ MORE</a>
        <?php endif; ?>
    </div>
    <div class="msi-intro-right">
        <div class="msi-intro-right-1">
            <div class="msi-circle-container-1">
                <img class="nen-1" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/nen1.png"
                    alt="about-us-1">
                <img class="nen-2" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/nen1.png"
                    alt="about-us-1">
                <?php
                echo do_shortcode('[msi_circle size="260" target="2000000" initial_rotation="0" text="Khách hàng"]');
                ?>

            </div>
            <div class="msi-circle-container-2">
                <img class="nen-3" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/nen1.png"
                    alt="about-us-1">
                <?php
                echo do_shortcode('[msi_circle size="220" target="200" initial_rotation="120" text="Đối tác"]');
                ?>
            </div>
        </div>
        <div class="msi-intro-right-2">
            <div class="msi-circle-container-3">
                <img class="nen-4" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/nen1.png"
                    alt="about-us-1">
                <?php
                echo do_shortcode('[msi_circle size="200" target="12" initial_rotation="240" text="Tỉnh thành"]');
                ?>
            </div>
        </div>
    </div>
</div>
<style>
    .msi-intro-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        max-width: 1335px;
        margin: 0 auto;
        padding-top: 40px;
        box-sizing: border-box;
    }

    .msi-intro-left {
        flex: 1;
        max-width: 40%;
        font-family: "Roboto", sans-serif;
    }

    .msi-intro-title {
        font-size: 22px;
        font-weight: 800;
        color: #283573;
        margin-bottom: 20px;
        font-family: "Roboto", sans-serif;
    }

    .msi-intro-text {
        font-size: 16px;
        line-height: 1.7;
        color: #283573;
        margin-bottom: 28px;
        font-family: "Roboto", sans-serif;
    }

    .msi-intro-btn {
        display: inline-block;
        padding: 10px 20px;
        border: 2px solid #283573;
        color: #283573;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        font-family: "Roboto", sans-serif;
    }

    .msi-intro-btn:hover {
        background-color: #283573;
        color: #fff;
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

        .msi-intro-text {
            font-size: 15px;
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