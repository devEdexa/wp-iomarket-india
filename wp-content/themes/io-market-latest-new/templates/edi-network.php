<?php
/**
 * Template Name: Edi-network Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */
 get_header(); ?>
<div class="breadcrumb py-md-4 py-3">
    <div class="container">
        <ul class="d-flex flex-wrap align-items-center font-semibold">
            <li><a href="<?php echo icl_get_home_url() ?>" title="Home"
                    class="dark-color hover-green-color me-2 pe-2 position-relative">Home</a></li>
            <li><a href="<?php echo get_permalink( $post->post_parent ); ?>"
                    title="<?php $parent_title = get_the_title($post->post_parent); echo $parent_title;?>"
                    class="dark-color hover-green-color me-2 pe-2 position-relative"><?php $parent_title = get_the_title($post->post_parent); echo $parent_title;?></a>
            </li>
            <li><a href="javascript:void(0)" title="<?php echo $page_title = $wp_query->post->post_title;;?>"
                    class="dark-color hover-green-color me-2 pe-2 position-relative current"><?php echo $page_title = $wp_query->post->post_title;;?></a>
            </li>
        </ul>
    </div>
</div>

<?php 
$main_sec_head = get_field('main_sec_head');
$main_sec_desc = get_field('main_sec_desc');
if(!empty($main_sec_head) || !empty($main_sec_desc)) { 
 ?>
<section class="iomarket-section content-section fs-5" id="pdfDokument">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="section-title display-5 green-color font-black mb-md-4 mb-3 text-uppercase">
                    <?php the_field('main_sec_head'); ?></div>
                <p> <?php the_field('main_sec_desc'); ?></p>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php 
$right_heading = get_field('right_heading');
$right_desc = get_field('right_desc');
$right_greenline = get_field('right_greenline');
$right_upload_image = get_field('right_upload_image');
 if( $right_heading ): 
 ?>
<section class="iomarket-section content-image-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-1 order-2 fs-5">
                <div
                    class="section-title display-5 green-color font-black mb-md-4 mb-3 desktop-title d-none d-md-block">
                    <?php echo $right_heading;?> </div>
                <p><?php echo $right_desc;?></p>
                <div class="green-color font-bold"><?php echo $right_greenline;?></div>
            </div>
            <div class="col-md-6 mb-md-0 mb-3 text-center order-md-2 order-1">
                <div
                    class="section-title display-5 green-color font-black mb-md-4 mb-3 mobile-title d-md-none d-block text-start">
                    <?php echo $right_heading;?> </div>
                <img src="<?php echo $right_upload_image['url']; ?>" alt="<?php echo $right_upload_image['alt'] ?>">
            </div>
        </div>
    </div>
</section>
<?php if( get_field('feature_main_heading') ): ?>
<section class="iomarket-section feature-slider-section">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3 text-center">
            <?php the_field('feature_main_heading'); ?>
        </div>
        <div class="featureslider-carousel owl-carousel mb-xxl-5 mb-xl-4 position-relative">
            <?php while(have_rows('add_feature')) : the_row(); 
                $ft_heading = get_sub_field('ft_heading');$ft_icon = get_sub_field('ft_icon');
                $ft_shortline = get_sub_field('ft_shortline');$ft_screenshot = get_sub_field('ft_screenshot');
            ?>
            <div class="slider">
                <div class="text text-center position-relative">
                    <div class="start-box d-flex align-items-center justify-content-center">
                        <?php if(!empty($ft_icon)) { ?>
                        <img src="<?php echo esc_url($ft_icon['url']); ?>"
                            alt="<?php echo esc_attr($ft_icon['alt']); ?>" />
                        <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/star-icon.svg"
                            alt="icon" title="icon">
                        <?php } ?>
                    </div>
                    <div class="feature-title fs-4 font-bold">
                        <?php echo $ft_heading;?>
                    </div>
                    <p><?php echo $ft_shortline;?></p>
                </div>
                <div class="screenshot">
                    <div class="image">
                        <img src="<?php echo esc_url($ft_screenshot['url']); ?>"
                            alt="<?php echo esc_attr($ft_screenshot['alt']); ?>" />
                    </div>
                </div>
            </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>
<?php endif;endif; ?>

<?php 
$left_heading = get_field('left_heading');
$left_desc = get_field('left_desc');
$left_upload_image = get_field('left_upload_image');
 if( $left_heading ): 
 ?>
<section class="iomarket-section content-image-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center mb-md-0 mb-3">
                <div
                    class="section-title display-5 green-color font-black mb-md-4 mb-3 mobile-title d-md-none d-block text-start">
                    <?php echo $left_heading;?> </div>
                <img src="<?php echo $left_upload_image['url']; ?>" alt="<?php echo $left_upload_image['alt'] ?>">
            </div>
            <div class="col-md-6 fs-5">
                <div
                    class="section-title display-5 green-color font-black mb-md-4 mb-3 desktop-title d-none d-md-block">
                    <?php echo $left_heading;?> </div>
                <p><?php echo $left_desc;?></p>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php 
$detail_heading = get_field('detail_heading');
$detail_desc = get_field('detail_desc');
if(!empty($detail_heading) || !empty($detail_desc)) {
 ?>
<section class="iomarket-section content-section fs-5" id="pdfDokument">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="section-title display-5 green-color font-black mb-md-4 mb-3 ">
                    <?php the_field('detail_heading'); ?></div>
                <p> <?php the_field('detail_desc'); ?></p>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- new box section-->
<!-- solution new design-->
<!-- new box section-->
<?php echo get_template_part( 'templates/inner-solution');?>
<!-- new design solution-->
<!-- new design solution-->
<section class="iomarket-section inquery-section">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3 text-center">
            <?php the_field('con_heading'); ?>
        </div>
        <p class="section-discription text-center fs-5"><?php the_field('con_shortline'); ?>
        </p>
        <div class="row justify-content-center mt-lg-5 mt-4">
            <div class="col-xxl-8 col-lg-10 col-12">
                <div class="row justify-content-evenly">
                    <?php $inc = 0; if( have_rows('add_contact_member') ): while( have_rows('add_contact_member') ): the_row(); 
				$con_name = get_sub_field('con_name');$con_profile_image = get_sub_field('con_profile_image');
				$con_designation = get_sub_field('con_designation');$call_button_label = get_sub_field('call_button_label');
				$call_redirect_link = get_sub_field('call_redirect_link');
				if ($inc == 0) {
                            $cls = ' mb-sm-0 mb-4';
                        }
                        if ($inc == 1) {
                            $cls = '';
                        }
						?>

                    <div class="col-xl-4 col-sm-6 text-center mb-sm-0 mb-4">
                        <div class="profile-box">
                            <div class="profile-image mb-xxl-4 mb-3 rounded-circle m-auto ripple-animation">
                                <img class="rounded-circle" src="<?php echo $con_profile_image['url']; ?>"
                                    alt="<?php echo $con_profile_image['alt'] ?>">
                            </div>
                            <div class="name text-capitalize green-color fs-4 font-bold"><?php echo $con_name;?></div>
                            <div class="designation fs-5 mb-3"><?php echo $con_designation;?></div>
                            <a href="<?php echo $call_redirect_link; ?>" target="_blank"
                                class="iom-button fs-5 z-index2 white-color hover-green-color"
                                title="<?php echo $call_button_label;?>"><?php echo $call_button_label;?></a>
                        </div>
                    </div>
                    <?php $inc++; endwhile;endif; ?>
                </div>
            </div>
        </div>

        <?php 
		$question_label_description = get_field('question_label_description');
		if( $question_label_description ): ?>
        <div class="contact-box py-lg-4 px-lg-5 py-3 px-4 mt-lg-5 mt-sm-4 mt-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8 col-md-7 mb-md-0 mb-3">
                    <div class="fs-5 lightgray-color text-uppercase font-bold">
                        <?php the_field('question_label_description'); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 d-flex justify-content-md-end justify-content-start">
                    <a href="<?php the_field('que_button_link'); ?>" title="<?php the_field('que_button_label'); ?>"
                        class="iom-arrow-button fs-5 green-bg white-color hover-white-color transiton-03s rounded border-1 green-border text-capitalize position-relative d-inline-block">
                        <?php the_field('que_button_label'); ?></a>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php  $contact_form_shortcode = get_field('contact_form_shortcode');
if( $contact_form_shortcode ):?>
<section class="iomarket-section edi-form-section">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">
            <?php the_field('contact_form_heading'); ?>
        </div>
        <div class="section-discription fs-6 darkgray-color mb-xl-4 mb-3"><?php the_field('contact_form_desc'); ?></div>
        <div class="contact-form">
            <?php
            echo do_shortcode($contact_form_shortcode);?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php

$featured_posts = get_field('select_posts_for_case_study');
if( $featured_posts ): ?>
<section class="iomarket-section case-studies-section">
    <div class="container">
        <div class="section-second-title mb-3 ps-3 position-relative">
            <div class="fs-2 gray-color"><?php the_field('case_heading'); ?></div>
            <div class="display-5 black-color"><?php the_field('case_sub_heading'); ?></div>
        </div>
        <div class="row mt-5">
            <div class="case-studies-slider owl-carousel d-flex flex-wrap px-0 w-100">
                <?php foreach( $featured_posts as $post ): 

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>

                <div class="item float-start">
                    <div class="case-box position-relative">
                        <?php   if ( has_post_thumbnail() ) :?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" />
                        <?php else:?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-study-2.jpg"
                            alt="<?php the_title();?>">
                        <?php endif;?>
                        <div
                            class="case-info p-xl-4 p-3 position-absolute m-auto overflow-hidden d-flex flex-column fs-xxl-5">
                            <div class="case-title fs-4 font-bold position-relative pb-2 mb-3">
                                <?php the_title();?></div>
                            <?php	if ( has_excerpt() ) {?>
                            <?php the_excerpt();  ?>
                            <?php } else { ?>
                            <p class="mb-3"><?php echo wp_trim_words( get_the_content(), 15 );?></p>
                            <?php  } ?>
                            <div class="case-button">
                                <?php if(ICL_LANGUAGE_CODE=='en'){ ?>
                                <a href="<?php echo get_permalink($post->ID) ?>" class="black-color iom-button fs-5"
                                    title="Read more">
                                    <?php echo __("Read more","iomarket");?>
                                </a><?php } else { ?>
                                <a href="<?php echo get_permalink($post->ID) ?>" class="black-color iom-button fs-5"
                                    title="Mehr Lesen"> <?php echo __("Mehr Lesen","iomarket");?>
                                </a> <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>
<?php get_footer();?>