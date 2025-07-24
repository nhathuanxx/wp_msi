<?php

/**
 * Template Name: Page Q&A
 *
 * @since 1.0.0
 * @author Kenji
 */

get_header();
$url = get_template_directory_uri();
?>
<div class="page-qa">
    <div class="container">
        <div class="page-qa__banner">
            <div class="page-qa__banner-content">
                <div class="page-qa__banner-title">
                    <?php
                    if (pll_current_language('slug') == 'vi') {
                        echo 'Khám phá thế giới sức khỏe phụ nữ';
                    }
                    if (pll_current_language('slug') == 'en') {
                        echo "Discover the World of Women's Health";
                    }
                    if (pll_current_language('slug') == 'zh') {
                        echo '探索女性健康世界';
                    }
                    ?>
                </div>
                <div class="page-qa__banner-subtitle">
                    <?php
                    if (pll_current_language('slug') == 'vi') {
                        echo 'Khám phá cách chúng tôi có thể trao quyền cho bạn để không chỉ tồn tại mà còn phát triển. Đi sâu hơn vào việc ưu tiên sức khỏe của bạn<br />và thu thập kiến ​​thức cần thiết để đưa ra những quyết định sáng suốt giúp bạn có một lối sống lành mạnh hơn.';
                    }
                    if (pll_current_language('slug') == 'en') {
                        echo "Discover how we can empower you to not just survive, but thrive. Dive deeper into prioritizing your well being<br />and gain the knowledge needed to make informed decisions that will lead to a healthier lifestyle.";
                    }
                    if (pll_current_language('slug') == 'zh') {
                        echo '了解我们如何帮助您不仅生存，而且蓬勃发展。更深入地优先考虑您的健康<br />并获得做出明智决策所需的知识，从而实现更健康的生活方式。';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="os-page-qa">
    <div class="container">
        <ul class="nav nav-pills msi-post-tab-nav" id="pills-tab" role="tablist">
            <!-- <li class="nav-item">
                <a class="nav-link active" id="msi-post-cat-0-tab" data-toggle="pill" href="#msi-post-cat-0" role="tab" aria-controls="msi-post-cat-0" aria-selected="true">All</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link active" id="msi-post-cat-1-tab" data-toggle="pill" href="#msi-post-cat-1" role="tab" aria-controls="msi-post-cat-1" aria-selected="true">Sức khỏe sinh sản</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="msi-post-cat-2-tab" data-toggle="pill" href="#msi-post-cat-2" role="tab" aria-controls="msi-post-cat-2" aria-selected="false">Biện pháp tránh thai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="msi-post-cat-3-tab" data-toggle="pill" href="#msi-post-cat-3" role="tab" aria-controls="msi-post-cat-3" aria-selected="false">Đình chỉ thai</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          
            <div class="tab-pane fade active show" id="msi-post-cat-1" role="tabpanel" aria-labelledby="msi-post-cat-1-tab">
                <div class="row msi-post-tab-content">
                    <div class="col-md-12 msi-post-tab-content-left">
                        <div class="msi-post-list row">

                            <?php
                            $args = array(
                                'post_type' => 'hoi-dap',
                                'orderby' => 'post_date',
                                'posts_per_page' => 12,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'hoi-dap-cat',
                                        'terms' => 12,
                                        'field' => 'term_id',
                                    )
                                ),
                            );
                            $query = new WP_Query($args); ?>

                            <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <div class="msi-post-item col-md-6 col-lg-4">
                                        <div class="row" style="height: 100%; position:relative">
                                            <div class="col-md-12 post-thumbnail-img">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                                                        <img class="" alt="Post Thumbnail" src="<?php echo $image[0]; ?>">
                                                    <?php endif; ?>
                                                    <img class="" alt="Post Thumbnail" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/qadefault.png'); ?>">
                                                </a>
                                            </div>
                                            <div class="col-md-12 post-item-content">
                                                <h3 class="post-item-title">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h3>
                                                <!-- <div class="msi-post-created">
                                                    <?php the_date(); ?>
                                                </div> -->
                                                <div class="post-item-description">
                                                    <?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
                                                </div>
                                                <div class="msi-read-more">
                                                    <a href="<?php the_permalink(); ?>">Xem chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End .msi-post-item -->
                                <?php endwhile; ?>
                                <!-- <div class="text-center mt-5 mb-5">
                                    <a href="<?php echo get_category_link(4); ?>">
                                        <b>XEM THÊM <i class="fas fa-angle-double-right"></i></b>
                                    </a>
                                </div> -->
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                    </div> 
                    <div class="col-md-12 os-read-more">
                    <a href="<?php bloginfo('wpurl'); ?>/danh-muc-hoi-dap/bien-phap-tranh-thai/"> <span>XEM THÊM <i class="fas fa-angle-double-right"></i></span></a>
                    </div>
                    <!-- <div class="col-md-4  msi-post-tab-sidebar-right">
                        
                    </div> -->
                </div><!-- .msi-post-tab-content -->
            </div>
            <div class="tab-pane fade" id="msi-post-cat-2" role="tabpanel" aria-labelledby="msi-post-cat-2-tab">
                <div class="row msi-post-tab-content">
                    <div class="col-md-12 msi-post-tab-content-left">
                        <div class="msi-post-list row">

                            <?php
                            $args = array(
                                'post_type' => 'hoi-dap',
                                'orderby' => 'post_date',
                                'posts_per_page' => 12,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'hoi-dap-cat',
                                        'terms' => 11,
                                        'field' => 'term_id',
                                    )
                                ),
                            );
                            $query = new WP_Query($args); ?>

                            <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <div class="msi-post-item col-md-6 col-lg-4">
                                        <div class="row" style="height: 100%; position:relative">
                                            <div class="col-md-12 post-thumbnail-img">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                                                        <img class="" alt="Post Thumbnail" src="<?php echo $image[0]; ?>">
                                                    <?php endif; ?>
                                                    <img class="" alt="Post Thumbnail" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/qapost.png'); ?>">
                                                </a>
                                            </div>
                                            <div class="col-md-12 post-item-content">
                                                <h3 class="post-item-title">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h3>
                                                <!-- <div class="msi-post-created">
                                                    <?php the_date(); ?>
                                                </div> -->
                                                <div class="post-item-description">
                                                    <?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
                                                </div>
                                                <div class="msi-read-more">
                                                    <a href="<?php the_permalink(); ?>">Xem chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End .msi-post-item -->
                                <?php endwhile; ?>
                                <!-- <div class="text-center mt-5 mb-5">
                                    <a href="<?php echo get_category_link(4); ?>">
                                        <b>XEM THÊM <i class="fas fa-angle-double-right"></i></b>
                                    </a>
                                </div> -->
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-12 os-read-more">
                    <a href="<?php bloginfo('wpurl'); ?>/danh-muc-hoi-dap/dinh-chi-thai/"> <span>XEM THÊM <i class="fas fa-angle-double-right"></i></span></a>
                    </div>
                    <!-- <div class="col-md-4  msi-post-tab-sidebar-right">
                        
                    </div> -->
                </div><!-- .msi-post-tab-content -->
            </div>
            <div class="tab-pane fade" id="msi-post-cat-3" role="tabpanel" aria-labelledby="msi-post-cat-3-tab">
                <div class="row msi-post-tab-content">
                    <div class="col-md-12 msi-post-tab-content-left">
                        <div class="msi-post-list row">

                            <?php
                            $args = array(
                                'post_type' => 'hoi-dap',
                                'orderby' => 'post_date',
                                'posts_per_page' => 12,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'hoi-dap-cat',
                                        'terms' => 10,
                                        'field' => 'term_id',
                                    )
                                ),
                            );
                            $query = new WP_Query($args); ?>

                            <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <div class="msi-post-item col-md-6 col-lg-4">
                                        <div class="row" style="height: 100%; position:relative">
                                            <div class="col-md-12 post-thumbnail-img">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                                                        <img class="" alt="Post Thumbnail" src="<?php echo $image[0]; ?>">
                                                    <?php endif; ?>
                                                    <img class="" alt="Post Thumbnail" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/os/qapost.png'); ?>">
                                                </a>
                                            </div>
                                            <div class="col-md-12 post-item-content">
                                                <h3 class="post-item-title">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h3>
                                                <!-- <div class="msi-post-created">
                                                    <?php the_date(); ?>
                                                </div> -->
                                                <div class="post-item-description">
                                                    <?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
                                                </div>
                                                <div class="msi-read-more">
                                                    <a href="<?php the_permalink(); ?>">Xem chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End .msi-post-item -->
                                <?php endwhile; ?>
                                <!-- <div class="text-center mt-5 mb-5">
                                    <a href="<?php echo get_category_link(4); ?>">
                                        <b>XEM THÊM <i class="fas fa-angle-double-right"></i></b>
                                    </a>
                                </div> -->
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-12 os-read-more">
                    <a href="<?php bloginfo('wpurl'); ?>/danh-muc-hoi-dap/suc-khoe-sinh-san/"> <span>XEM THÊM <i class="fas fa-angle-double-right"></i></span></a>
                    </div>
                   
                    <!-- <div class="col-md-4  msi-post-tab-sidebar-right">
                        
                    </div> -->
                </div><!-- .msi-post-tab-content -->
            </div>
        </div>

    </div>
</div>
<?php require get_template_directory() . '/template-parts/os-partner-logo-2.php'; ?>
<?php require get_template_directory() . '/template-parts/content-us-now.php'; ?>

<?php get_footer(); ?>


<style>
    .os-page-qa {
        background-color: white;
    }

    .os-page-qa .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #007bff;
    }

    #pagetitle,
    .partner-row-header-3,
    #msi-partner-logo-carousel {
        display: none;
    }

    .page-qa {
        padding-top: 64px;
        padding-bottom: 72px;
        background-color: #fff;
    }


    .page-qa__banner {
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        height: 339px;
        border-radius: 40px;
        background-image: url('<?php bloginfo('wpurl'); ?>/wp-content/themes/m5/assets/images/os/qa-banner.png');
    }

    .page-qa__banner-content {
        border-radius: 40px;
        background: linear-gradient(92.84deg, rgba(236, 249, 255, 0.4) -22.65%, #B6E9FF 168.27%);
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .page-qa__banner-title {
        font-family: "Space Grotesk", sans-serif;
        font-size: 56px;
        font-weight: 500;
        line-height: 67px;
        text-align: center;
        color: #0072AB;
    }

    .page-qa__banner-subtitle {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: center;
        color: #292929;
        margin-top: 24px;
    }

    .msi-post-tab-content {
        border: none;
    }

    .os-page-qa .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: var(--Alias-Text-White, #FFFFFF);

        background: var(--Alias-Button-Primary-Pink, #E50C75);

    }

    .os-page-qa .msi-post-tab-nav .nav-item a {
        background: var(--Alias-Button-Primary-Pinkex, #FFE4F4);
        padding: 12px 24px;
        border-radius: 100px;
        color: var(--Alias-Button-Primary-DarkPink, #D40261);
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
        text-align: left;

    }

    .os-page-qa .msi-post-tab-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        top: unset;
        right: unset;
        gap: 24px;
    }

    .os-page-qa .nav-item {
        margin: 0;
    }

    .os-page-qa .msi-post-tab-content-left {
        padding-right: 0;
        padding-top: 72px;
        border-right: none;
    }

    .os-page-qa .msi-post-item {
        margin-bottom: 120px;
        padding: 0px 28px;
    }

    .os-page-qa .post-thumbnail-img img {
        border-radius: 24px;
    }

    .os-page-qa .post-thumbnail-img {
        margin-bottom: 32px;
    }

    .os-page-qa .post-item-title {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 24px;
        font-weight: 600;
        line-height: 30px;
        text-align: left;
        margin-bottom: 28px;
        color: #000000;

    }

    .os-page-qa .post-item-description {
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
        color: var(--Alias-Text-Neutral, #292929);
        margin-bottom: 28px;
    }

    .os-page-qa .msi-read-more {
        position: absolute;
        bottom: -48px;
        width: calc(100% - 28px);
        height: 48px;
        padding: 12px 24px 12px 24px;
        border-radius: 100px;
        background: var(--Alias-Button-Primary-Bluex, #DEF3FF);
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
        text-align: left;
        color: var(--Alias-Button-Primary-DarkBlue, #0072AB);
        text-align: center;
    }

    .os-page-qa .tab-pane {
        padding-bottom: 88px;
    }
    .os-read-more{
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size: 20px;
        font-weight: 600;
        line-height: 24px;
        text-align: center;
    }
    .os-read-more a{
        color: #00adf0 !important; 
    }
    .os-read-more a:hover {
    color: #f167ac !important;
}

    @media screen and (min-width: 991px) and (max-width: 1199px) {}

    @media screen and (max-width: 991px) {}

    @media screen and (max-width: 768px) {
        .page-qa .container {
            padding: 0px 16px
        }

        .page-qa__banner-title {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 20.42px;
            text-align: center;
            color: var(--Alias-Text-Primary-DarkBlue, #0072AB);
            margin-bottom: 5px;
        }

        .page-qa__banner-subtitle {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-size: 12px;
            font-weight: 400;
            line-height: 18px;
            text-align: center;
            margin-top: 0px;
        }

        .page-qa__banner {
            height: auto;
            padding: 18.17px 10.17px;
            border-radius: 24px;
        }

        .os-page-qa .msi-post-tab-nav {
            display: flex;
            justify-content: start;
            flex-wrap: nowrap;
            white-space: nowrap;
            overflow: scroll;
        }

        .os-page-qa .msi-post-tab-content-left {
            padding-left: 0px;
        }
    }
    .os-page-qa .post-thumbnail-img img{
		height: 350px;
	}
</style>