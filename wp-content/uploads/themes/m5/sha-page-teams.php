<?php
/*
* Template Name: Page Team
*/
get_header(); 
?>

<main class="main-content page-teams">

    <div class="about-teams">
        <div class="container">
            <div class="teams">
                <?php 
                    $arg_team = array(
                        'post_type' => 'sha-teams',
                        'posts_per_page' => -1,
                    );

                    $query_teams = new WP_Query( $arg_team );

                    if( $query_teams->have_posts()) {
                        while ($query_teams->have_posts()) : 
                            $query_teams->the_post();
                            $team_id = get_the_ID();
                            ?>
                            <div class="item">
                                <div class="im">
                                    <a href="<?php the_permalink($team_id); ?>">
                                        <?php if (has_post_thumbnail($team_id)) : ?>
                                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($team_id), 'full'); ?>
                                            <img class="" alt="<?php echo get_the_title($team_id); ?>" src="<?php echo $image[0]; ?>">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="i-top">
                                    <p class="name">
                                        <a href="<?php echo get_permalink($team_id); ?>" title="<?php echo get_the_title($team_id); ?>"><?php echo get_the_title($team_id); ?></a>
                                    </p>
                                    <span><?php echo get_field('single_team_pos',$team_id); ?></span>
                                    </div>
                                    <div class="i-bot">
                                        <a href="<?php echo get_permalink($team_id); ?>" title="TÌM HIỂU THÊM">TÌM HIỂU THÊM <i class="icon-circle-right"></i></a>
                                    </div>
                                </div>
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

<?php get_footer(); ?>