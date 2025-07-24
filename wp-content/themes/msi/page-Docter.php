<?php
/*
* Template Name: Docter Page Template
*/
get_header(); ?>

<div class="about-count">
    <div class="page-breadcrumb">
        <div class="container">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<div id="breadcrumbs" class="margin-0 padding-0 text-center">', '</div>');
            }
            ?>
        </div>
    </div>
    <div class="container">
        <header class="page-header text-center">
            <?php the_title('<h1 class="page-title">', '</h1>'); ?>
        </header>
    </div>
</div>

<div class="msi-twoCol-grid experienced">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 home__title experienced__title">
                <h2 class="text-uppercase"><?php echo get_the_title(); ?></h2>
            </div>
        </div>

        <div class="msi-docter-listing">
            <div class="row">
                <?php if (get_field('doctor_setting')) : ?>
                <?php while (the_repeater_field('doctor_setting')) : ?>
                <div class="col-md-12 col-sm-12 msi-docter-col">
                    <div class="row msi-docter-item">
                        <div class="col-md-4 col-sm-4 msi-docter-img">
                            <img src="<?php echo get_sub_field('image'); ?>" alt="<?php echo get_sub_field('name'); ?>">
                        </div>
                        <div class="col-md-8 col-sm-8 msi-docter-content">
                            <h3 class="msi-docter-title"><?php echo get_sub_field('name'); ?></h3>
                            <div class="msi-docter-position">
                                <?php echo get_sub_field('title'); ?>
                            </div>
                            <div class="msi-docter-des">

                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0 text-right">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <?php
                            if (pll_current_language('slug') == 'vi') {
                                echo 'Thông tin bác sĩ';
                            }
                            if (pll_current_language('slug') == 'en') {
                                echo 'Read mores';
                            }
                            if (pll_current_language('slug') == 'zh') {
                                echo '阅读更多';
                            }
                            ?>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <?php echo get_sub_field('description'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End #accordion -->
                            </div>
                        </div>
                    </div><!-- End .msi-docter-item -->
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div><!-- End .msi-docter-listings -->

        <!-- <div class="row">
            <div class="col-md-12 col-sm-12 home__title experienced__title">
                <h2 class="text-uppercase">Đội ngũ nhân viên - Kỹ thuật viên</h2>
            </div>
        </div> -->

        <!-- <div class="msi-staff-listing">
            <div class="row">
                <?php //if (get_field('expert_setting')) : ?>
                    <?php //while (the_repeater_field('expert_setting')) : ?>
                        <div class="col-md-3 col-sm-3  msi-docter-col">
                            <div class="msi-docter-item">
                                <div class="msi-docter-img">
                                    <img src="<?php //echo get_sub_field('image'); ?>" alt="<?php //echo get_sub_field('name'); ?>">
                                </div>
                                <div class="msi-docter-content">
                                    <h3 class="msi-docter-title"><?php //echo get_sub_field('name'); ?></h3>
                                    <div class="msi-docter-position">
                                        <?php //echo get_sub_field('title'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php //endwhile; ?>
                <?php //endif; ?>
            </div>
        </div> -->

    </div>
</div>
<?php require get_template_directory() . '/template-parts/confirm.php'; ?>
<?php get_footer(); ?>