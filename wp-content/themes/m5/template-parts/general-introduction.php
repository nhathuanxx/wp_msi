<div class="msi-intro-section">
    <!-- Bên trái -->
    <div class="msi-intro-left">
        <?php if (pll_current_language('slug') === 'vi') : ?>
            <h2 class="msi-intro-title">GIỚI THIỆU CHUNG</h2>
            <p class="msi-intro-text">
                Với gần năm thập kỷ đồng hành cùng phụ nữ toàn cầu, Tổ chức MSI Reproductive Choices (MSI), tiền thân là Marie Stopes International đã khẳng định vị thế tiên phong trong lĩnh vực chăm sóc sức khỏe sinh sản tại 36 quốc gia. Từ những bước chân đầu tiên đến Việt Nam vào năm 1989, MSI Reproductive Choices tại Việt Nam (MSIVN) đã kiến tạo nên mạng lưới hợp tác bền vững giữa các tổ chức phi chính phủ và cơ quan chính phủ, mang đến những giải pháp toàn diện về chăm sóc sức khỏe sinh sản và kế hoạch hóa gia đình cho hàng triệu người dân từ đồng bằng châu thổ đến miền núi xa xôi.
                Với kim chỉ nam “Cơ thể của bạn – Lựa chọn của bạn – Tương lai của bạn”, MSIVN không ngừng nỗ lực với khát vọng về một Việt Nam hạnh phúc – nơi mỗi lựa chọn về sức khỏe sinh sản đều trở nên an toàn, dễ tiếp cận và không còn rào cản, để mỗi đứa trẻ sinh ra đều là đứa trẻ được chào đón và mỗi gia đình đều có thể tự tin vun đắp hạnh phúc trọn vẹn.
            </p>
            <a href="/ve-chung-toi" class="msi-intro-btn">XEM THÊM</a>
        <?php else : ?>
            <h2 class="msi-intro-title">ABOUT US</h2>
            <p class="msi-intro-text">
                With nearly five decades of accompanying women around the world, MSI Reproductive Choices (MSI), formerly known as Marie Stopes International, has affirmed its pioneering position in the field of reproductive healthcare across 36 countries. Since its first steps into Vietnam in 1989, MSI Reproductive Choices in Vietnam (MSIVN) has built a sustainable network of collaboration between non-governmental organizations and government agencies, bringing comprehensive solutions in reproductive healthcare and family planning to millions of people, from fertile deltas to remote mountainous areas.

                Guided by the principle “Your body – Your choice – Your future”, MSIVN continues to strive with the aspiration of a happy Vietnam – where every reproductive health choice is safe, accessible, and barrier-free, so that every child born is a welcomed child, and every family can confidently nurture a fulfilling happiness.
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
                $lang = pll_current_language('slug');
                $text = ($lang === 'vi') ? 'Khách hàng' : 'Customers';
                echo do_shortcode('[msi_circle size="260" target="2000000" initial_rotation="40" text="' . $text . '"]');
                ?>

            </div>
            <div class="msi-circle-container-2">
                <img class="nen-3" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/nen1.png"
                    alt="about-us-1">
                <?php
                $lang = pll_current_language('slug');
                $text = ($lang === 'vi') ? 'Đối tác' : 'Partners';
                echo do_shortcode('[msi_circle size="220" target="200" initial_rotation="120" text="' . $text . '"]');
                ?>
            </div>
        </div>
        <div class="msi-intro-right-2">
            <div class="msi-circle-container-3">
                <img class="nen-4" src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/msi/nen1.png"
                    alt="about-us-1">
                <?php
                $lang = pll_current_language('slug');
                $text = ($lang === 'vi') ? 'Tỉnh thành' : 'Province';
                echo do_shortcode('[msi_circle size="200" target="12" initial_rotation="150" text="' . $text . '"]');
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

    .msi-intro-text {
        font-size: 20px;
        line-height: 1.7;
        color: #283573;
        margin-bottom: 28px;
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