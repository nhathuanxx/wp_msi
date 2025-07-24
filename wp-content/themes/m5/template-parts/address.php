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
                                                <p class="item__name__store" style="margin-bottom: 0;">

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
                                                </p>
                                                <p class="item__name__area <?php echo get_sub_field('text_color') ?>"><?php echo get_sub_field('khu_vuc') ?></p>
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
                <iframe id="map_frame" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3724.414269783198!2d105.7947488!3d21.0161038!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9787d4def3%3A0x65205b8781585239!2zQ2h1bmcgY8awIFnDqm4gSMOyYQ!5e0!3m2!1svi!2s!4v1666067932401!5m2!1svi!2s" width="600" height="677" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>