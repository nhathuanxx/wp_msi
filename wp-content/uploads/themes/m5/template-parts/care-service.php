<div class="care-service">
    <div class="container">
        <div class="care-service-title text-center">
            <?php
            if (pll_current_language('slug') == 'vi') {
                echo 'Dịch vụ nổi bật';
            }
            if (pll_current_language('slug') == 'en') {
                echo 'Care Service';
            }
            if (pll_current_language('slug') == 'zh') {
                echo '护理服务';
            }
            ?>
        </div>

        <div class="row care-service-item justify-content-center">
            <?php if (get_field('featured_services', pll_current_language('slug'))): ?>
                <?php while (the_repeater_field('featured_services', pll_current_language('slug'))): ?>
                    <div class="col-6 col-sm-6 col-md-4 col-xl-3 row care-service-item__container">
                        <div href="<?php echo get_sub_field('url') ?>" class="care-service-item__container-content">
                            <img class="care-service-item__container_img" src="<?php echo get_sub_field('icon_image') ?>"
                                alt="" />
                            <a href="<?php echo get_sub_field('url') ?>" class="care-service-item__container_label">
                                <?php echo get_sub_field('title') ?>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div
                class="col-6 col-sm-6 col-md-4 col-xl-3 row care-service-item__container <?php echo get_sub_field('main_color_class') ?>">
                <div class="care-service-item__container-content">
                    <a href="#" class="care-service-item__container_label text-center">
                        <?php
                        if (pll_current_language('slug') == 'vi') {
                            echo 'Xem thêm';
                        }
                        if (pll_current_language('slug') == 'en') {
                            echo 'Read more';
                        }

                        if (pll_current_language('slug') == 'zh') {
                            echo '看更多';
                        }
                        ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>