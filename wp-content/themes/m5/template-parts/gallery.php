<div class="gallery bg-f9">
    <?php if (get_field('gallery_setting', pll_current_language('slug'))) : ?>
        <?php while (the_repeater_field('gallery_setting', pll_current_language('slug'))) : ?>
            <div class="gallery__head">
                <div class="container">
                    <div class="home__title display-flex">
                        <h2><?php echo get_sub_field('main_title'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="gallery__body">
                <?php while (the_repeater_field('gallery')) : ?>
                    <figure class="item">
                        <img src="<?php echo get_sub_field('image_1'); ?>" alt="Gallery">
                    </figure>
                    <figure class="item">
                        <img src="<?php echo get_sub_field('image_2'); ?>" alt="Gallery">
                    </figure>
                    <figure class="item">
                        <img src="<?php echo get_sub_field('image_3'); ?>" alt="Gallery">
                    </figure>
                    <figure class="item">
                        <img src="<?php echo get_sub_field('image_4'); ?>" alt="Gallery">
                    </figure>
                    <figure class="item">
                        <img src="<?php echo get_sub_field('image_5'); ?>" alt="Gallery">
                    </figure>
                    <figure class="item">
                        <img src="<?php echo get_sub_field('image_6'); ?>" alt="Gallery">
                    </figure>
                    <figure class="item">
                        <img src="<?php echo get_sub_field('image_7'); ?>" alt="Gallery">
                    </figure>
                    <figure class="item">
                        <img src="<?php echo get_sub_field('image_8'); ?>" alt="Gallery">
                    </figure>
                <?php endwhile; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>