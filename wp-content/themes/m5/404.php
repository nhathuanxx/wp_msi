<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package k2_kinhdo
 */

get_header(); ?>
<div class="page-404">
    <div class="content">
        <div class="container">
            <div class="box_error404">
                <div class="big">404</div>
                <div class="oops">Oops, Không tìm thấy trang web này!</div>
                <div class="go"><a href="<?php echo home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i> Trở lại trang chủ</a></div>
                <div class="useful">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
                        <h3>Tìm kiếm trên website</h3>
                        <h5>Không tìm thấy điều bạn cần? Bạn vui lòng bỏ chút thời gian để tìm bên dưới!</h5>
                        <div class="searchform-wrap">
                            <input type="text" placeholder="<?php esc_attr_e('Tìm kiếm', 'k2_kinhdo'); ?>" name="s" class="field" />
                            <input type="hidden" name="post_type" value="post">
                        </div>
                    </form>
                    <div class="w-right">
                    <h3>Đây là vài liên kết hữu ích</h3>
                    <ul>
                        <?php
                            $args = array( 'numberposts' => '5' );
                            $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){
                                printf( '<li><a href="%1$s">%2$s</a></li>',
                                     esc_url( get_permalink( $recent['ID'] ) ),
                                     apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
                                 );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>