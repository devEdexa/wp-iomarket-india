<?php
/**
 * Template Name: Contact Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */
 get_header(); ?>

<section class="iomarket-section form-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xxl-3 col-md-4 col-12 mb-md-0 mb-4">
                <div class="profile-box text-center">
                    <div class="profile-image mb-3 rounded-circle m-auto ripple-animation">
                        <?php 
		$contact_photo = get_field('contact_photo');
		if( !empty( $contact_photo ) ){ ?>
                        <img class="rounded-circle" src="<?php echo esc_url($contact_photo['url']); ?>"
                            alt="contact person">
                        <?php } else { ?>
                        <img class="rounded-circle"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/team/BENSON.jpg"
                            alt="Andrea Zeller">
                        <?php } ?>

                    </div>
                    <div class="name text-capitalize green-color fs-4 font-bold">
                        <?php the_field('contact_person_name'); ?></div>
                    <div class="designation fs-5"> <?php the_field('contact_designation'); ?></div>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div class="form-box p-lg-5 p-4">
                    <div class="form-title fs-4 text-uppercase font-bold mb-md-4 mb-3">
                        <?php the_field('contact_form_label'); ?></div>
                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="405" title="Contact form 1"]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="iomarket-section contact-section dot-bg">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">
            <?php the_field('contact_heading_label'); ?>
        </div>
        <div class="contact-main mb-lg-5">
            <div class="contact-info w-100 d-inline-block py-lg-5 py-4 px-lg-4 px-3">
                <div class="py-lg-4">
                    <div class="info contact gray-color d-flex flex-wrap align-items-baseline">
                        <strong
                            class="fs-5 black-color mb-sm-0 mb-2 me-sm-2"><?php the_field('phone_label'); ?></strong>
                        <a class="gray-color hover-green-color"
                            href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a>
                    </div>
                    <div class="info address gray-color d-flex flex-wrap align-items-baseline">
                        <strong class="fs-5 black-color mb-sm-0 mb-2 me-sm-2"><?php the_field('address_label'); ?>
                        </strong>
                        <a class="gray-color hover-green-color" target="_blank"
                            href="https://goo.gl/maps/Qcf4sx9bte7LapTB6"
                            target="_blank"><?php the_field('address_detail'); ?>
                        </a>
                    </div>
                    <div class="info email gray-color d-flex flex-wrap align-items-baseline">
                        <strong
                            class="fs-5 black-color mb-sm-0 mb-2 me-sm-2"><?php the_field('email_label'); ?></strong>
                        <a class="gray-color hover-green-color" href="mailto:<?php the_field('email_id'); ?>"
                            title="email"><?php the_field('email_id'); ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="contact-map d-inline-block align-bottom mt-lg-0 mt-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15703.853986399123!2d76.3506098!3d10.2645249!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7a2b297af3f7d633!2sio-market%20software%20services%20pvt.ltd.!5e0!3m2!1sen!2sin!4v1635422878045!5m2!1sen!2sin"
                    width="100%" height="394" frameborder="0" style="border:0" allowfullscreen=""></iframe>

            </div>
        </div>
    </div>
</section>


<?php get_footer();?>