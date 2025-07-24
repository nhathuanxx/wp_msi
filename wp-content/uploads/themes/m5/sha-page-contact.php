<?php
/**
 * Template Name: Page Contact
 *
 * @since 1.0.0
 * @author Kenji
 */

get_header();
$url = get_template_directory_uri();
?>
<div class="page-contact">

    <div class="container contact-container">

        <div class="contact-content">
            <div class="ss1">
                <?php the_content(); ?>
            </div>


            <div class="row">
                <div class="col-xs-12 col-xl-6">

                    <div class="w-info">
                        <?php echo get_field('page_contact_infomation'); ?>
                    </div>
                </div>

                <div class="col-xs-12 col-xl-6">

                    <div class="w-form">
                        <?php
                        $page_contact_form_contact = get_field('page_contact_form_contact');
                        echo do_shortcode( $page_contact_form_contact, false ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="maps">
        <?php require get_template_directory() . '/template-parts/address.php'; ?>
    </div>
</div>
<?php
get_footer();
