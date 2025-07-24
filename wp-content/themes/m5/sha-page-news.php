<?php
/**
 * Template Name: News
 *
 * @since 1.0.0
 * @author Kenji
 */

get_header();
?>
<div class="page-blog">
    <div class="container">
        <div class="wrap-content">
            <?php 
                $page_bao_chi = get_field('page_bao_chi');
                if ($page_bao_chi) {
                    // code...
                    foreach ($page_bao_chi as $key_bao_chi => $value_bao_chi) {
                        // code...
                        ?>
                        <div class="item-archive">
                            <div class="archive_img">
                                <a rel="nofollow" target="_blank" href="<?php echo $value_bao_chi['link']; ?>" rel="nofollow">
                                    <img src="<?php echo $value_bao_chi['image']; ?>" alt="">
                                </a>
                            </div>

                            <div class="archive_content">
                                <h3 class="entry-title"><a rel="nofollow" target="_blank" href="<?php echo $value_bao_chi['link']; ?>" rel="nofollow"><?php echo $value_bao_chi['title']; ?></a></h3>
                                <p><?php echo $value_bao_chi['des']; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
