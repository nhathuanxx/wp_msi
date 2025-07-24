<?php

if ( (is_front_page() || is_home()) || is_404() )
{
    return;
}

$titles = k2_kinhdo_get_page_titles();

ob_start();

if ( $titles['title'] )
{
    printf( '<h1 class="page-title--title">%s</h1>', wp_kses_post($titles['title']) );
}

$titles_html = ob_get_clean();

if ( ! $titles_html )
{
    return;
}
?>
<div id="pagetitle" class="page-title">

    <div class="container">
        <div class="title-flex">
            <?php
                printf( '<div class="title-content">%s</div>', wp_kses_post($titles_html));
            ?> 
        </div>

        <?php dimox_breadcrumbs(); ?>
    </div>
</div>