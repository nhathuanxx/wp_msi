<?php
/*
 * Template Name: Page Team
 */
get_header();
?>

<main class="main-content page-teams">

    <div class="page-doctor">
        <div class="container">
            <div class="doctor-title">
                <?php
                if (pll_current_language('slug') == 'vi') {
                    echo 'Gặp gỡ các bác sĩ của chúng tôi';
                }
                if (pll_current_language('slug') == 'en') {
                    echo 'Meet Our Professionals Doctors';
                }
                if (pll_current_language('slug') == 'zh') {
                    echo '认识我们的专业医生';
                }
                ?>
            </div>
            <div class="teams row">
                <?php
                $arg_team = array(
                    'post_type' => 'sha-teams',
                    'posts_per_page' => -1,
                );

                $query_teams = new WP_Query($arg_team);

                if ($query_teams->have_posts()) {
                    while ($query_teams->have_posts()):
                        $query_teams->the_post();
                        $team_id = get_the_ID();
                        ?>
                        <div class=" col-12 col-lg-6 list-doctors__slider_item-col">
                            <a href="<?php the_permalink($team_id); ?>" class="list-doctors__slider_item row align-items-center justify-content-between">
                                <div class="col-12 col-lg-6 list-doctors__slider_item-col">
                                    <div class="list-doctors__slider_item-img">
                                        <div>
                                            <!-- <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($team_id), 'full'); ?> -->
                                            <?php
                                                if (has_post_thumbnail($team_id)):
                                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($team_id), 'full');
                                                    $image_url = $image[0];
                                                else:
                                                    $link = get_bloginfo('wpurl');
                                                    $image_url = $link . '/wp-content/themes/m5/assets/images/os/icon-menu-item.svg';
                                                endif;
                                            ?>
                                            <img src="<?php echo $image_url; ?>" alt="<?php echo get_the_title($team_id); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div ss="list-doctors__slider_item-content">
                                        <div
                                            title="<?php echo get_the_title($team_id); ?>">
                                            <div class="list-doctors__slider_item-content_title">
                                                <?php echo get_the_title($team_id); ?>
                                            </div>
                                        </div>
                                        <div class="list-doctors__slider_item-content_rate">
                                            <?php
                                                $rating_images = array(
                                                    get_bloginfo('wpurl') . '/wp-content/themes/m5/assets/images/os/icon-star-4.svg',
                                                    get_bloginfo('wpurl') . '/wp-content/themes/m5/assets/images/os/icon-star-4.5.svg',
                                                    get_bloginfo('wpurl') . '/wp-content/themes/m5/assets/images/os/icon-star-5.svg'
                                                );

                                                $random_image = $rating_images[array_rand($rating_images)];
                                            ?>
                                            <img src="<?php echo $random_image; ?>" alt="icon-start">
                                        </div>
                                        <div class="list-doctors__slider_item-content_subtitle">
                                            <?php echo get_field('descriptions', $team_id); ?>
                                        </div>
                                        <div class="list-doctors__slider_item-content_language_title">
                                            <?php
                                            if (pll_current_language('slug') == 'vi') {
                                                echo 'Liên hệ:';
                                            }
                                            if (pll_current_language('slug') == 'en') {
                                                echo 'Contact:';
                                            }
                                            if (pll_current_language('slug') == 'zh') {
                                                echo '接触:';
                                            }
                                            ?>
                                        </div>
                                        <div class="list-doctors__slider_item-content_language">
                                            <div
                                                class="list-doctors__slider_item-content_language__item vietnamese book-calendar">
                                                <?php
                                                if (pll_current_language('slug') == 'vi') {
                                                    echo 'Đặt lịch';
                                                }
                                                if (pll_current_language('slug') == 'en') {
                                                    echo 'Booking';
                                                }
                                                if (pll_current_language('slug') == 'zh') {
                                                    echo '立即预订';
                                                }
                                                ?>
                                            </div>
                                            <!-- <div class="list-doctors__slider_item-content_language__item english book-calendar">
                                            <?php
                                            if (pll_current_language('slug') == 'vi') {
                                                echo 'Đặt lịch';
                                            }
                                            if (pll_current_language('slug') == 'en') {
                                                echo 'Booking';
                                            }
                                            if (pll_current_language('slug') == 'zh') {
                                                echo '立即预订';
                                            }
                                            ?>
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    endwhile;

                    k2_kinhdo_posts_pagination($query_teams);
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php require get_template_directory() . '/template-parts/os-partner-logo-2.php'; ?>
<?php require get_template_directory() . '/template-parts/content-us-now.php'; ?>

<?php get_footer(); ?>

<style>
    #pagetitle {
        display: none;
    }

    .page-doctor {
        padding: 64px 0;
        background-color: #fff;
    }

    .doctor-title {
        font-family: "Space Grotesk", sans-serif;
        font-size: 56px;
        font-weight: 500;
        line-height: 67px;
        text-align: left;
        color: #292929;
        margin-bottom: 72px;
    }

    .page-doctor .teams {
        /* gap: 24px; */
    }

    .list-doctors__slider_item {
        margin-left: 13px;
        margin-right: 13px;
        margin-bottom: 72px;
    }

    /* .list-doctors__slider_item-img img {
        height: 300px;
    } */

    
    @media screen and (min-width: 992px) and (max-width: 1200px) {
        .list-doctors__slider_item .list-doctors__slider_item-col {
            padding: 0px;
        }
    }

    @media screen and (min-width: 768px) and (max-width: 991px) {
        .doctor-title {
            font-size: 40px;
            line-height: 54px;
        }

        /* .list-doctors__slider_item-img img {
            height: 400px;
            object-position: top;
        } */
    }

    @media screen and (max-width: 767px) {
        .page-doctor {
            padding: 24px 16px;
        }
        .doctor-title {
            font-size: 28px;
            line-height: 35.73px;
            margin-bottom: 24px;
        }
        .list-doctors__slider_item-col {
            padding: 0px;
        }
        .list-doctors__slider_item {
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 24px;
        }

        .page-doctor .teams.row .list-doctors__slider_item-col {
            padding: 0;
        }
    }
</style>