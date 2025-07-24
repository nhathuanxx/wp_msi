<div id="position-rel" class="branch position-rel">
    <div class="branch__content">
        <div class="container">
            <div class="row">
                <div class="col-md-7 pr-0">
                    <div class="branch__content__wrap position-rel bg-color-light">

                        <div class="home__title">
                            <h2>
                                <?php
                                if (pll_current_language('slug') == 'vi') {
                                    echo 'Chi Nhánh Phòng Khám';
                                }
                                if (pll_current_language('slug') == 'en') {
                                    echo 'Clinic Branch';
                                }
                                if (pll_current_language('slug') == 'zh') {
                                    echo '诊所科';
                                }
                                ?>
                            </h2>
                        </div>
                        <div class="branch__areas">
                            <?php if (get_field('clinic_address_info', pll_current_language('slug'))) : ?>
                                <?php 
                                $p = 0;
                                while (the_repeater_field('clinic_address_info', pll_current_language('slug'))) : 
$p++;
?>
                                    <div class="item">
                                        <div class="item__intro display-flex">
                                            <div class="item__icon">
                                                <i class="icon-address <?php echo get_sub_field('text_color') ?>"></i>
                                            </div>
                                            <div class="item__name">
                                                <h4 class="item__name__store">

                                                    <?php
                                                    if (pll_current_language('slug') == 'vi') {
                                                        echo 'Phòng khám';
                                                    }
                                                    if (pll_current_language('slug') == 'en') {
                                                        echo 'Clinics locations';
                                                    }
                                                    if (pll_current_language('slug') == 'zh') {
                                                        echo '诊所';
                                                    }
                                                    ?>
                                                </h4>
                                                <h4 class="item__name__area <?php echo get_sub_field('text_color') ?>"><?php echo get_sub_field('khu_vuc') ?></h4>
                                            </div>
                                        </div>
                                        <ul class="item__list margin-0 p-0">
                                            <?php 
                                                        $a =0;
                                                        while (the_repeater_field('address_info')) : 
$a++;
?>
                                                <li>
                                                    <a href="#" data-map="<?php echo get_sub_field('map_embed') ?>"><?php echo get_sub_field('address') ?></a>
                                                <a class="msi-collapse-link-btn" data-toggle="collapse" href="#collapseAddress<?php echo $a.'-'.$p; ?>" role="button" aria-expanded="false" aria-controls="collapseAddress<?php echo $a.'-'.$p; ?>">
    <?php
                                                    if (pll_current_language('slug') == 'vi') {
                                                        echo 'Giờ mở cửa';
                                                    }
                                                    if (pll_current_language('slug') == 'en') {
                                                        echo 'Opening times';
                                                    }
                                                    if (pll_current_language('slug') == 'zh') {
                                                        echo '营业时间';
                                                    }
                                                    ?> <i class="fa" aria-hidden="true"></i>
  </a>
                                                        <div class="collapse" id="collapseAddress<?php echo $a.'-'.$p; ?>">
                                                        <?php echo get_sub_field('on_time') ?>
                                                        </div>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 pl-0"></div>
            </div>
        </div>
    </div>
    <div class="branch__map">
        <div class="row">
            <div class="col-md-7 pr-0"></div>
            <div class="col-md-5 pl-0">
                <iframe id="map_frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8250797010614!2d105.7894751506404!3d21.039683885923726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab379b922995%3A0x35dafdcd8bab9392!2sMarie%20Stopes%20Vi%E1%BB%87t%20Nam!5e0!3m2!1svi!2s!4v1595851822503!5m2!1svi!2s" width="600" height="677" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>