<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package k2_kinhdo
 */

get_header(); ?>
<div class="page-404" style="text-align:center; padding:60px 20px; background-color:white;">
    <div class="content">
        <div class="container">
            <div class="box_error404" style="max-width:1335px; margin:0 auto;">
                <div class="big" style="font-size:100px; font-weight:bold; color:#283573; font-family:'Roboto', sans-serif; margin-bottom:20px;">404</div>
                <div class="oops" style="font-size:22px; color:#283573; font-family:'Roboto', sans-serif; margin-bottom:30px;">
                    Oops, Không tìm thấy trang web này!
                </div>
                <div class="go" style="margin-bottom:40px;">
                    <a href="<?php echo home_url(); ?>" style="display:inline-block; padding:10px 20px; background:#283573; color:#fff; font-family:'Roboto', sans-serif; font-size:16px; text-decoration:none; border-radius:4px;">
                        <i class="fa fa-home" aria-hidden="true"></i> Trở lại trang chủ
                    </a>
                </div>
                <div class="useful" style="display:flex; justify-content:space-between; align-items:flex-start; gap:20px;text-align:left;">
                    <div class="w-right">
                        <h3 style="color:#283573; font-family:'Roboto', sans-serif; font-size:20px; margin-bottom:15px;">Đây là vài liên kết hữu ích</h3>
                        <ul style="list-style:none; padding:0; margin:0;">
                            <?php
                                $args = array( 'numberposts' => '5' );
                                $recent_posts = wp_get_recent_posts( $args );
                                foreach( $recent_posts as $recent ){
                                    printf(
                                        '<li style="margin-bottom:8px;"><a href="%1$s" style="color:#283573; font-family:\'Roboto\', sans-serif; font-size:16px; text-decoration:none;">%2$s</a></li>',
                                        esc_url( get_permalink( $recent['ID'] ) ),
                                        apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
                                    );
                                }
                            ?>
                        </ul>
                    </div>
                     <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url( '/' )); ?>" style="margin-bottom:40px;">
                        <h3 style="color:#283573; font-family:'Roboto', sans-serif; font-size:20px; margin-bottom:10px;">Tìm kiếm trên website</h3>
                        <h5 style="color:#283573; font-family:'Roboto', sans-serif; font-size:16px; margin-bottom:15px;">
                            Không tìm thấy điều bạn cần? Bạn vui lòng bỏ chút thời gian để tìm bên dưới!
                        </h5>
                        <div class="searchform-wrap" style="display:flex; gap:10px;">
                            <input type="text" placeholder="<?php esc_attr_e('Tìm kiếm', 'k2_kinhdo'); ?>" name="s" class="field" 
                                   style="flex:1; padding:10px; border:1px solid #ccc; border-radius:4px; font-family:'Roboto', sans-serif; font-size:16px; color:#283573;" />
                            <input type="hidden" name="post_type" value="post">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
