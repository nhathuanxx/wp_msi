<div class="confirm home-confirm <?php if (is_page_template('Docter Page Template')) {
                                        echo 'msi-main-bg';
                                    } ?>">
    <div class="container">
        <div class="row">
            <?php if (get_field('are_you_ready', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('are_you_ready', pll_current_language('slug'))) : ?>
                    <div class="col-md-6">
                        <div class="confirm__content">
                            <h2 class="confirm__title"><?php echo get_sub_field('title'); ?></h2>
                            <p class="confirm__desc">
                                <?php echo get_sub_field('description'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="confirm__btns display-flex-center">
                            <a href="tel:<?php echo get_field('hotline', pll_current_language('slug')); ?>" class="btn btn-main btn-main--gradient btn-h60 font-size-18 font-weight-bold text-uppercase">
                                <i class="icon-phone"></i> <?php echo get_field('hotline', pll_current_language('slug')); ?>
                            </a>
                            <a href="javascript:;" class="btn btn-secondary btn-secondary--gradient btn-h60 font-size-16 font-weight-bold book-calendar text-uppercase">
                                <i class="icon-calendar"></i> <?php echo get_field('book_an_appointment', pll_current_language('slug')); ?>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>