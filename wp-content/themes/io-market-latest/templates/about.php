<?php
/**
 * Template Name: About Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */
 get_header(); ?>
<section class="iomarket-section solution-section">
    <div class="container">
        <div class="d-flex align-items-stretch flex-wrap owl-carousel solution-slider about-solution-slider">
            <?php $inc = 0; if( have_rows('add_section') ): while( have_rows('add_section') ): the_row(); 
				$sol_heading = get_sub_field('sol_heading');$sol_description = get_sub_field('sol_description');
				if ($inc == 0) {
                            $cls = 'about-icon-one';
                        }
                        if ($inc == 1) {
                            $cls = 'about-icon-two';
                        }

                        if ($inc == 2) {
                            $cls = 'about-icon-three';
                        }
						?>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 pt-5 pb-xl-5 pb-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute about-icon <?php echo $cls;?>"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 font-semibold text-break"><?php echo $sol_heading;?>
                    </div>
                    <p><?php echo $sol_description;?></p>
                </div>
            </div>
            <?php $inc++; endwhile;endif; ?>
        </div>
    </div>
</section>
<section class="iomarket-section history-section fs-5 gray-bg">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">
            <?php the_field('history_head'); ?></div>
        <?php the_field('history_desc'); ?>
    </div>
</section>
<section class="iomarket-section team-section">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">
            <?php the_field('team_heading'); ?>
            <div class="fs-4 lightgray-color font-black d-block"><?php the_field('team_sub_heading'); ?>
            </div> 
        </div>
        <div id="teamSlider" class="team-slider d-flex flex-wrap">
            <?php  if( have_rows('add_team_member') ): while( have_rows('add_team_member') ): the_row(); 
				$team_name = get_sub_field('team_name');$team_designation = get_sub_field('team_designation');
				$team_photo = get_sub_field('team_photo');$team_linkedin = get_sub_field('team_linkedin');?>
            <div class="item text-center mt-lg-5 mt-4">
                <div class="round-box-wrapper">
                    <div class="round-box rounded-circle m-auto ripple-animation">
                        <img class="rounded-circle" src="<?php echo $team_photo['url']; ?>"
                            alt="<?php echo $team_photo['alt'] ?>">
                    </div>
                </div>
                <div class="member-name green-color font-bold fs-4 mt-3"><?php echo $team_name;?></div>
                <div class="member-post fs-5 black-color"><?php echo $team_designation;?></div>

                <?php if(!empty($team_linkedin)){ ?><div class="social-media mt-2">
                    <a href="<?php echo $team_linkedin;?>" target="_blank" title="Linkedin" class="linkedin">
                        <img class="trans"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/linkedin-team.svg"
                            alt="Linkedin">
                    </a>
                </div>
                <?php }?>
            </div>
            <?php  endwhile;endif; ?>
        </div>
    </div>
</section>
<!-- <section class="iomarket-section vision-section position-relative overflow-hidden pb-0">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">
            <?php //the_field('offer_heading'); ?>
            <span class="d-block"><?php //the_field('offer_heading_subline'); ?></span>

        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6 vision-left order-lg-1 order-2">
                <div class="vision-content">
                    <div class="fs-4 lightgray-color font-black d-block mb-xxl-4 mb-3">
                        <?php //the_field('offer_subheading'); ?>
                    </div>
                    <div class="mb-xxl-4 mb-3 fs-5"><?php //the_field('offer_shortline'); ?></div>
                    <div class="fs-5"><?php //the_field('offer_description'); ?>
                    </div>
                    <div class="vision-quote position-relative d-block text-center z-index1 mt-xxl-5 mt-xl-4 mt-3">
                        <div class="vision-quote-inner">
                            <span class="fs-5 fst-italic text-center"><?php //the_field('offer_quote'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 vision-right order-lg-2 order-1 mb-lg-0 mb-3">
                <div class="vision-image position-relative z-index1">
                    <?php 
					//$offer_upload_image = get_field('offer_upload_image');
					//if( !empty( $offer_upload_image ) ): ?>
                    <img class="w-100 img-fluid" src="<?php //echo esc_url($offer_upload_image['url']); ?>"
                        alt="<?php //echo esc_attr($offer_upload_image['alt']); ?>" />
                    <?php //endif; ?>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="iomarket-section opportunities-section">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">
            <?php the_field('career_heading'); ?>
        </div>
        <div class="owl-carousel opportunities-carousel"> <?php   if( have_rows('add_vacancy') ): while( have_rows('add_vacancy') ): the_row(); 
				$career_job_title = get_sub_field('career_job_title');$career_shortline = get_sub_field('career_shortline');
				$apply_now_label = get_sub_field('apply_now_label');
				$career_upload_image = get_sub_field('career_upload_image');?>

            <div
                class="career-box transiton-03s white-bg position-relative h-100 d-flex flex-column justify-content-start pb-xl-4 pb-3">
                <div class="career-img">
                    <img class="transiton-03s w-100" src="<?php echo $career_upload_image['url']; ?>"
                        alt="<?php echo $career_upload_image['alt'] ?>">
                </div>
                <div class="career-content gray-color pt-3 px-xl-4 px-3 mb-xl-4 mb-3">
                    <div class="career-title position-relative font-bold black-color mb-3 pb-2 fs-5">
                        <?php echo $career_job_title;?></div>
                    <p class="font-light"> <?php echo $career_shortline;?> </p>
                </div>
                <div class="career-button px-xl-4 px-3 mt-auto">
                    <?php  $file  = get_sub_field('attach_job_pdf'); 
							            if( !empty($file) ): ?>
                    <a href="<?php echo $file['url']; ?>" target="_blank"
                        class="black-color iom-button fs-5 rounded-pill" title="<?php echo $apply_now_label;?>">
                        <?php echo $apply_now_label;?>
                        <span class="btn-icon trans"></span>
                    </a>
                    <?php else:?>
                    <a href="mailto:contact@io-market.com" class="black-color iom-button fs-5 rounded-pill"
                        title="<?php echo $apply_now_label;?>">
                        <?php echo $apply_now_label;?>
                        <span class="btn-icon trans"></span>
                    </a>
                    <?php endif;?>
                </div>
            </div>

            <?php  endwhile;endif; ?>
        </div>
    </div>
</section>

<section class="iomarket-section industries-section gray-bg">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">
            <?php the_field('value_heading'); ?>
        </div>
        <div class="row industries-section-row">
            <?php  $j=0; if( have_rows('add_value') ): while( have_rows('add_value') ): the_row(); 
				$val_heading = get_sub_field('val_heading');$value_shortline = get_sub_field('value_shortline');
					if ($j == 0) {
                            $cls = 'use-icon-one';
                        }
                        if ($j == 1) {
                            $cls = 'use-icon-two';
                        }

                        if ($j == 2) {
                            $cls = 'use-icon-three';
                        }if ($j == 3) {
                            $cls = 'icons use-icon-four';
                        }if ($j == 4) {
                            $cls = 'use-icon-five';
                        }if ($j == 5) {
                            $cls = 'use-icon-six';
                        }?>
            <div class="industries-box col-lg-4 col-md-6 mb-md-4 mb-3">
                <div class="use-content-box h-100 overflow-hidden">
                    <div class="inner-box position-relative transiton-03s z-index2 p-md-4 p-3 white-bg h-100">
                        <span class="mb-lg-3 icons <?php echo $cls;?>"></span>
                        <div class="inner-box-title text-break mb-3 fs-3 font-bold"><?php echo $val_heading;?></div>
                        <p><?php echo $value_shortline;?>
                        </p>
                    </div>
                </div>
            </div>
            <?php $j++; endwhile;endif; ?>
        </div>
    </div>
</section>
<section class="iomarket-section customer-section ">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">
            <?php the_field('logo_customer_title'); ?>
        </div>
        <ul class="our-best-customer-list owl-carousel d-flex flex-wrap justify-content-xl-start p-0">
            <!-- logo slider-->
            <?php  if (have_rows('customer_logos')): while (have_rows('customer_logos')) : the_row(); $imagess = get_sub_field('customer_logo');?>
            <li
                class="d-flex justify-content-center align-items-center grayscale-item mt-3 p-3 position-relative me-3 white-bg overflow-hidden">
                <div class="img_wrapper">
                    <img src="<?php echo $imagess['url']; ?>" alt="<?php echo $image['alt'] ?>"
                        class="img_grayscale w-100">
                </div>
            </li>
            <?php  endwhile;   else : endif; wp_reset_query(); ?>
            <!-- end logo slider-->


        </ul>
    </div>
</section>


<?php get_footer();?>