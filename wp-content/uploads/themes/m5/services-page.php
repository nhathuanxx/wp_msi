<?php
/*
* Template Name: Services Page
*/
get_header();
$current_page_ID = get_the_ID();
$page_content = get_post($current_page_ID)->post_content;
?>
<main class="main-content service-page">
    <div class="service-banner">
        <figure class="margin-0">
            <?php 
            $header_banner =  get_field('header_banner');
            if($header_banner) :
                ?>
                <img src="<?php echo $header_banner; ?>"
                alt="Dịch vụ">
                <?php
            else :
            ?>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/service/banner.jpg'); ?>"
                alt="Dịch vụ">
            <?php endif; ?>
        </figure>
    </div>
    <div class="service-intro bg-f9">
        <div class="container">
            <div class="service-intro__wrap">
                <div class="service-intro__content">
                    <div class="margin-0">
                        <?php echo $page_content; ?>
                    </div>
                </div>

                <div class="service-intro__action display-flex-center justify-content-center">
                    <a href="tel:<?php echo get_field('hotline', pll_current_language('slug')); ?>"
                        class="btn btn-white btn-h60 font-size-18 font-weight-bold text-uppercase">
                        <i class="icon-phone"></i> <?php echo get_field('hotline', pll_current_language('slug')); ?>
                    </a>
                    <a href="javascript:;"
                        class="btn btn-secondary btn-secondary--gradient btn-h60 font-size-16 font-weight-bold book-calendar text-uppercase">
                        <i class="icon-calendar"></i>
                        <?php echo get_field('book_an_appointment', pll_current_language('slug')); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="service-step">
        <div class="container">
            <div class="service-step__wrap">
                <div class="home__title home__title--light service-step__title display-flex only-mobile">
                    <p><?php echo get_field('heading_center'); ?></p>
                </div>
                <div class="row">

                    <div class="col-md-6 col-lg-4">
                        <div class="service-step__list service-step__list--left">
                            <?php if (get_field('steps_setting_left')) : ?>
                            <?php while (the_repeater_field('steps_setting_left')) :?>
                            <div class="item">
                                <div class="item__circle"></div>
                                <div class="item__step">
                                    <span class="item__step__name">Bước</span>
                                    <span class="item__step__number"><?php echo get_sub_field('step_number'); ?></span>
                                </div>
                                <div class="item__content">
                                    <h3 class="item__title font-size-18 font-weight-bold">
                                        <?php echo get_sub_field('title'); ?></h3>
                                    <p class="item__desc margin-0 font-size-14 secondary-color-txt">
                                        <?php echo get_sub_field('description'); ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4 display-flex-center only-desktop">
                        <div class="service-step__center">
                            <h2 class="service-step__center__title font-size-30 font-weight-bold margin-0">
                                <?php echo get_field('heading_center'); ?>
                            </h2>
                            <div class="service-step__center__list">
                                <div class="item">
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="item">
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="item">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-step__list service-step__list--right">
                            <?php if (get_field('steps_setting_right')) : ?>
                            <?php while (the_repeater_field('steps_setting_right')) : ?>
                            <div class="item">
                                <div class="item__circle"></div>
                                <div class="item__step">
                                    <span class="item__step__name">Bước</span>
                                    <span class="item__step__number"><?php echo get_sub_field('step_number'); ?></span>
                                </div>
                                <div class="item__content">
                                    <h3 class="item__title font-size-18 font-weight-bold">
                                        <?php echo get_sub_field('title'); ?></h3>
                                    <p class="item__desc margin-0 font-size-14 secondary-color-txt">
                                        <?php echo get_sub_field('description'); ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="experienced bg-f9">
        <div class="container">
            <?php //echo var_dump(get_field('video_setting')); ?>
            <?php if (get_field('video_setting')) { ?>
            <?php while (the_repeater_field('video_setting')) : ?>
            <div class="home__title experienced__title">
                <h2 class="text-uppercase"><?php echo get_sub_field('video_section_title') ?></h2>
            </div>
            <div class="experienced__list row">
                <div class="video-section_item col-md-6">
                    <?php 
                $vd1 = 0;
                while (the_repeater_field('videos_section_listing')) : 
                    $vd1++;
                ?>

                    <?php if($vd1 === 1): ?>
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/<?php echo get_sub_field('video_id') ?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <?php endif; ?>
                <?php endwhile; ?>
                </div>
                <div class="video-section_item col-md-6">
                    <?php 
                $vd2 = 0;
                while (the_repeater_field('videos_section_listing')) : 
                    $vd2++;
                ?>
                    <?php if($vd2 != 1): ?>
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/<?php echo get_sub_field('video_id') ?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endwhile; ?>
            <?php } else { ?>
            <div class="home__title experienced__title">
                <h2 class="text-uppercase">Khách hàng đánh giá</h2>
            </div>
            <div class="experienced__list">
                <div class="item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/tTwb_HLWX_k"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/IJAScBRyxhI"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/1TuouYPJK-Q"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php require get_template_directory() . '/template-parts/why-does-choose.php'; ?>
    <?php require get_template_directory() . '/template-parts/gallery.php'; ?>

    <div class="service-testimonial">
        <div class="container">
            <div class="testimonial">
                <?php if (get_field('feedback_group', pll_current_language('slug'))) : ?>
                <?php while (the_repeater_field('feedback_group', pll_current_language('slug'))) : ?>
                <div class="home__title home__title--light">
                    <h2><?php echo get_sub_field('title') ?></h2>
                </div>
                <div class="testimonial__data">
                    <div class="testimonial__nav">
                        <button type="button" class="bg-transparent border-0 testimonial__prev"><i
                                class="icon-arrow-back"></i></button>
                        <button type="button" class="bg-transparent border-0 testimonial__next"><i
                                class="icon-arrow-next"></i></button>
                    </div>
                    <div class="sun-slider sun-slider--center"
                        data-slick='{"slidesToShow": 3, "nextArrow": ".testimonial__next", "prevArrow": ".testimonial__prev", "centerMode": true, "centerPadding": "0px", "dots": true, "autoplay": true,"infinite": false, "autoplaySpeed": 8000, "responsive": [{"breakpoint": 575, "settings": {"centerMode": false, "slidesToShow": 1 } } ]}'>
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
            </div>
        </div>
    </div>
    <div class="service-qa bg-f9">
        <div class="container">
            <div class="qa">

                <div class="home__title qa__head home__title--3">
                    <h2 class="text-uppercase"><?php echo get_field('faq_in_services_title'); ?></h2>
                </div><!-- End .home__title qa__head home__title--3 -->
                <div class="qa__body">

                    <div class="qa__list">
                        <div class="row">
                            <?php
							if (get_field('select_faq')) :
								$faq_data = get_field('select_faq');
								$f = 0;
								foreach ($faq_data as $faq_item) :
									$f++;
							?>
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="item__question">
                                        <span class="item__num"><?php echo $f; ?>.</span>
                                        <p class="item__question__content margin-0">
                                            <?php echo $faq_item->post_title; ?>
                                        </p>
                                        <div class="item__arrow">
                                            <i class="icon-arrow-next"></i>
                                        </div>
                                    </div>
                                    <div class="item__answer">
                                        <p class="margin-0">
                                            <?php echo $faq_item->post_content; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;  ?>
                            <?php endif; ?>
                        </div>
                    </div><!-- End .qa__list -->

                </div><!-- End .qa__body -->

            </div>
        </div>
    </div>

    <div class="confirm service-confirm primary-bg-color">
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
                        <a href="tel:<?php echo get_field('hotline', pll_current_language('slug')); ?>"
                            class="btn btn-main btn-main-white btn-h60 font-size-18 font-weight-bold text-uppercase">
                            <i class="icon-phone"></i> <?php echo get_field('hotline', pll_current_language('slug')); ?>
                        </a>
                        <a href="javascript:;"
                            class="btn btn-secondary btn-secondary--gradient btn-h60 font-size-16 font-weight-bold book-calendar text-uppercase">
                            <i class="icon-calendar"></i>
                            <?php echo get_field('book_an_appointment', pll_current_language('slug')); ?>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>