<div class="home-testimonial">
    <div class="container">
        <div class="testimonial">
            <?php if (get_field('feedback_group', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('feedback_group', pll_current_language('slug'))) : ?>
                    <div class="home__title home__title--light">
                        <h2><?php echo get_sub_field('title') ?></h2>
                    </div>
                    <div class="testimonial__data">
                        <div class="testimonial__nav">
                            <button type="button" class="bg-transparent border-0 testimonial__prev"><i class="icon-arrow-back"></i></button>
                            <button type="button" class="bg-transparent border-0 testimonial__next"><i class="icon-arrow-next"></i></button>
                        </div>
                        <div class="sun-slider sun-slider--center" data-slick='{"slidesToShow": 3, "nextArrow": ".testimonial__next", "prevArrow": ".testimonial__prev", "centerMode": true, "centerPadding": "0px", "dots": true, "autoplay": true, "autoplaySpeed": 8000, "responsive": [{"breakpoint": 575, "settings": {"centerMode": false, "slidesToShow": 1 } } ]}'>
                            <?php while (the_repeater_field('item')) : ?>
                                <div class="item">
                                    <div class="item__wrap">
                                        <p class="item__desc">
                                            <?php echo get_sub_field('feedback_content') ?>
                                        </p>
                                        <div class="item__body">
                                            <figure class="item__avatar">
                                                <img src="<?php echo get_sub_field('avatar') ?>" alt="Avatar">
                                            </figure>
                                            <h4 class="item__name"><?php echo get_sub_field('name') ?></h4>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- End .testimonial -->
    </div>
</div>