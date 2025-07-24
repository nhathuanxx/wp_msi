<div class="news bg-f9">
    <div class="container">

        <div class="home__title">
            <h2>Đối tác MSI</h2>
        </div>
        <div id="msi-partner-logo-carousel" class="slider slider-nav">
            <?php if (get_field('partner_logo_list', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('partner_logo_list', pll_current_language('slug'))) : ?>
        	<div>
        	    <!-- <a href="<?php //echo get_sub_field('partner_link'); ?>"> -->
        		    <img src="<?php echo get_sub_field('logo_image'); ?>" alt="Partner logo" />
        		<!-- </a> -->
        	</div>
        	<?php endwhile; ?>
            <?php endif; ?>
        </div>
        </div>
</div>