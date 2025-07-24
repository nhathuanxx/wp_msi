<div class="clinic-nearby-u">
    <div class="container">
        <div class="clinic-nearby-u__header d-flex justify-content-between align-items-center">
            <div class="clinic-nearby-u__header_title">
                <?php
                if (pll_current_language('slug') == 'vi') {
                    echo 'Phòng Khám Gần Bạn';
                }
                if (pll_current_language('slug') == 'en') {
                    echo 'Clinic NearBy You';
                }
                if (pll_current_language('slug') == 'zh') {
                    echo '诊所科';
                }
                ?>
            </div>
            <a href="#" class="clinic-nearby-u__header_see-all">
                <span>
                    <?php
                    if (pll_current_language('slug') == 'vi') {
                        echo 'Tất cả phòng khám';
                    }
                    if (pll_current_language('slug') == 'en') {
                        echo 'See all Clinics';
                    }
                    if (pll_current_language('slug') == 'zh') {
                        echo '诊所科';
                    }
                    ?>
                </span>
                <img class="clinic-nearby-u__header_see-all__icon"
                    src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon-see-all.svg"
                    alt="icon-see-all">
            </a>
        </div>
        <div class="clinic-nearby-u__select d-flex justify-content-between align-items-center">
            <span class="clinic-nearby-u__select-city">
                <select id="city">
                    <option value="">Chọn 1 thành phố</option>
                    <option value="hanoi">Hà Nội</option>
                    <option value="vinh">Vinh</option>
                    <option value="hcm">Tp Hồ Chí Minh</option>
                </select>
            </span>
        </div>

        <div class="sun-slider sun-slider--center"
            data-slick='{"slidesToShow": 3, "nextArrow": ".clinic-nearby-u__next", "prevArrow": ".clinic-nearby-u__prev", "centerPadding": "20px", "dots": false, "autoplay": true, "infinite": true, "autoplaySpeed": 2000, "responsive": [ { "breakpoint": 1200, "settings": { "centerMode": false, "slidesToShow": 2 } }, { "breakpoint": 776, "settings": { "centerMode": false, "slidesToShow": 1 } } ]}'>
            <?php if (get_field('clinic_nearby_you', pll_current_language('slug'))): ?>
                <?php while (the_repeater_field('clinic_nearby_you', pll_current_language('slug'))): ?>
                    <div class="clinic-nearby-u-slider">
                        <div class="clinic-nearby-u-slider__item">
                            <div class="clinic-nearby-u-slider__item_img">
                                <figure>
                                    <img src="<?php echo get_sub_field('image') ?>" alt="<?php echo get_sub_field('name') ?>" />
                                </figure>
                            </div>
                            <div class="clinic-nearby-u-slider__item_content">
                                <div class="clinic-nearby-u-slider__item_title">
                                    <?php echo get_sub_field('name') ?>
                                </div>
                                <div class="clinic-nearby-u-slider__item_subtitle">
                                    <div class="clinic-nearby-u-slider__item_info d-flex align-items-start">
                                        <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon-marked.svg"
                                            alt="icon-marked">
                                        <span><?php echo get_sub_field('address') ?></span>
                                    </div>
                                    <div class="clinic-nearby-u-slider__item_info d-flex align-items-start">
                                        <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon-time.svg"
                                            alt="icon-marked">
                                        <span>
                                            <?php echo get_sub_field('on_time') ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="clinic-nearby-u-slider__item_action d-flex justify-content-start">
                                    <div
                                        class="clinic-nearby-u-slider__item_action-item clinic-nearby-u-slider__item_action-call">
                                        <?php
                                        if (pll_current_language('slug') == 'vi') {
                                            echo 'Gọi điện';
                                        }
                                        if (pll_current_language('slug') == 'en') {
                                            echo 'Call now';
                                        }
                                        if (pll_current_language('slug') == 'zh') {
                                            echo '立即致电';
                                        }
                                        ?>
                                    </div>
                                    <div
                                        class="clinic-nearby-u-slider__item_action-item clinic-nearby-u-slider__item_action-book">

                                        <?php
                                        if (pll_current_language('slug') == 'vi') {
                                            echo 'Đặt lịch';
                                        }
                                        if (pll_current_language('slug') == 'en') {
                                            echo 'Book now';
                                        }
                                        if (pll_current_language('slug') == 'zh') {
                                            echo '立即预订';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="clinic-nearby-u__nav">
            <button type="button" class="bg-transparent border-0 clinic-nearby-u__prev">
                <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon-next.svg"
                    alt="icon-next" />
            </button>
            <button type="button" class="bg-transparent border-0 clinic-nearby-u__next">
                <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/icon-next.svg"
                    alt="icon-next" />
            </button>
        </div>
    </div>
</div>