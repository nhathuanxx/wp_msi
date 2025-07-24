<div class="service-package bg-f9 only-desktop">
    <div class="container">

        <div class="home__title">
            <?php if (get_field('package_title', pll_current_language('slug'))) : ?>
                <h2><?php echo get_field('package_title', pll_current_language('slug')); ?></h2>
            <?php endif; ?>
        </div>
        <div class="service-package__list">
            <?php if (get_field('package_item', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('package_item', pll_current_language('slug'))) : ?>
                    <div class="item <?php echo get_sub_field('template_name'); ?>">
                        <div class="item__head">
                            <div class="item__head__wrap">
                                <h3 class="item__name"><?php echo get_sub_field('title'); ?></h3>
                                <p class="item__desc"><?php echo get_sub_field('sub-title'); ?></p>
                                <div class="item__star">
                                    <i class="icon-star-full"></i>
                                    <i class="icon-star-full"></i>
                                    <i class="icon-star-full"></i>
                                    <i class="icon-star-full"></i>
                                    <i class="icon-star-full"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item__body">
                            <ul class="margin-0 p-0">
                                <?php while (the_repeater_field('listing')) : ?>
                                    <li>
                                        <i class="icon-check"></i>
                                        <span><?php echo get_sub_field('item'); ?></span>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                        <div class="item__foot text-center">
                            <a href="tel:<?php echo get_field('hotline', pll_current_language('slug')); ?>" class="btn border-rd-25">Liên hệ</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</div>
<div class="service-package service-package__slider only-mobile">
    <div class="home__title">
        <?php if (get_field('package_title', pll_current_language('slug'))) : ?>
            <h2 class="text-center"><?php echo get_field('package_title', pll_current_language('slug')); ?></h2>
        <?php endif; ?>
    </div>
    <div class="sun-slider service-package__list" data-slick='{"slidesToShow": 3, "centerMode": true, "centerPadding": "0px", "dots": true}'>
        <?php if (get_field('package_item', pll_current_language('slug'))) : ?>
            <?php while (the_repeater_field('package_item', pll_current_language('slug'))) : ?>
                <div class="item <?php echo get_sub_field('template_name'); ?>">
                    <div class="item__head">
                        <div class="item__head__wrap">
                            <h3 class="item__name"><?php echo get_sub_field('title'); ?></h3>
                            <p class="item__desc"><?php echo get_sub_field('sub-title'); ?></p>
                            <div class="item__star">
                                <i class="icon-star-full"></i>
                                <i class="icon-star-full"></i>
                                <i class="icon-star-full"></i>
                                <i class="icon-star-full"></i>
                                <i class="icon-star-full"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item__body">
                        <ul class="margin-0 p-0">
                            <?php while (the_repeater_field('listing')) : ?>
                                <li>
                                    <i class="icon-check"></i>
                                    <span><?php echo get_sub_field('item'); ?></span>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <div class="item__foot text-center">
                        <a href="tel:<?php echo get_field('hotline', pll_current_language('slug')); ?>" class="btn border-rd-25">

                            <?php
                            if (pll_current_language('slug') == 'vi') {
                                echo 'Liên hệ';
                            }
                            if (pll_current_language('slug') == 'en') {
                                echo 'Contact Us';
                            }
                            if (pll_current_language('slug') == 'zh') {
                                echo '联系';
                            }
                            ?>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>