<?php
/**
 * Template Name: Solution Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */
 get_header(); ?>
<?php 
$sol_args = array(
					'post_type' => 'page',
					'posts_per_page'         => '-1',
					'lang' => ICL_LANGUAGE_CODE,
					'order'                  => 'ASC',
					'wpse_include_parent' => true,
					'post_parent'         => 21,
					'post_status' => 'publish'
                );
$solutions = new WP_Query( $sol_args );
if ( $solutions->have_posts() ) :
$count = 1;
 ?>
<section class="iomarket-section network-section">
    <div class="container">
        <div id="sync2" class="sync2 owl-carousel mb-md-5 mb-3">
            <?php while($solutions->have_posts()) : $solutions->the_post(); ?>
            <div class="item">
                <div class="label fs-6 lightgray-color justify-content-center d-flex align-items-center flex-column">
                    <span class="border-3"></span>
                    <?php the_title(); ?>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
        <div id="sync1" class="sync1 owl-carousel position-relative">
            <?php global $post; while($solutions->have_posts()) : $solutions->the_post();
                $main_sol_add_short_detail = get_field('main_sol_add_short_detail');
                $main_sol_upload_image = get_field('main_sol_upload_image');

             ?>

            <div class="item">
                <div class="row align-items-center">
                    <div class="col-md-7 col-sm-12 col-xs-12 mb-md-0 mb-3">
                        <div
                            class="network-title d-flex align-items-center pb-sm-4 display-4 green-color font-black text-uppercase ps-md-5 ps-4 pt-3">
                            <span
                                title="<?php echo sprintf('%02d', $count); ?>"><?php echo sprintf('%02d', $count); ?></span>
                            <?php the_title(); ?>
                        </div>
                        <?php  echo $main_sol_add_short_detail; ?>
                        <?php if(ICL_LANGUAGE_CODE=='en'){?>
                        <a href="<?php echo get_permalink($post->ID) ?>"
                            titile="<?php echo __("Details us","iomarket") ?>"
                            class="iom-arrow-button fs-4 green-bg white-color hover-white-color transiton-03s rounded border-1 green-border text-capitalize position-relative d-inline-block">
                            <?php echo __("Details us","iomarket") ?></a>
                        <?php } else { ?>
                        <a href="<?php echo get_permalink($post->ID) ?>"
                            titile="<?php echo __("mehr lesen","iomarket") ?>"
                            class="iom-arrow-button fs-4 green-bg white-color hover-white-color transiton-03s rounded border-1 green-border text-capitalize position-relative d-inline-block">
                            <?php echo __("mehr lesen","iomarket") ?></a>
                        <?php } ?>
                    </div>

                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="icon-box">
                            <img src="<?php echo $main_sol_upload_image['url']; ?>"
                                alt="<?php echo $main_sol_upload_image['alt'] ?>">
                        </div>
                    </div>

                </div>
            </div>
            <?php $count++; endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- new design for solution-->
<!-- solution new design-->

<section class="iomarket-section solution-section dot-bg">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3"><?php //echo $inn_heading; ?>
        </div>
        <div class="section-discription fs-6 darkgray-color mb-xl-4 mb-3">
            <?php// echo $inn_description; ?>
        </div>
        <?php if(have_rows('innovations')) : ?>
        <div class="d-flex align-items-stretch flex-wrap owl-carousel solution-slider home-solution-slider">
            <?php while(have_rows('innovations')) : the_row(); 
                $innovation_title = get_sub_field('innovation_title');
                $innovation_description = get_sub_field('innovation_description');
              if(!empty($innovation_title) || !empty($innovation_description)) {?>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 pt-5 pb-xl-5 pb-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute platform"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase font-semibold text-break">
                        <?php echo $innovation_title; ?></div>
                    <p class="fs-6 mb-3"><?php echo $innovation_description; ?></p>

                </div>
            </div>
            <?php } ?>
            <?php endwhile; wp_reset_query();?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- new design solution-->
<!-- end new sol-->
<section class="iomarket-section inquery-section position-relative solution-inquery-section">
    <div id="meeting" class="position-absolute"></div>
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3 text-uppercase text-center">
            <?php the_field('main_sol_heading'); ?>
        </div>
        <p class="section-discription text-center fs-5"><?php the_field('main_sol_shortline'); ?>
        </p>
        <div class="row justify-content-center my-lg-5 my-4">
            <div class="col-xxl-8 col-lg-10 col-12">
                <div class="row justify-content-evenly">
                    <?php $inc = 0; if( have_rows('add_contact_person') ): while( have_rows('add_contact_person') ): the_row(); 
				$sol_name = get_sub_field('sol_name');$sol_photo = get_sub_field('sol_photo');
				$sol_designation = get_sub_field('sol_designation');$sol_call_button_label = get_sub_field('sol_call_button_label');
				$sol_call_button_link = get_sub_field('sol_call_button_link');
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
                                <img class="rounded-circle" src="<?php echo $sol_photo['url']; ?>"
                                    alt="<?php echo $sol_photo['alt'] ?>">
                            </div>
                            <div class="name text-capitalize green-color fs-4 font-bold"><?php echo $sol_name;?></div>
                            <div class="designation fs-5 mb-3"><?php echo $sol_designation;?></div>
                            <a href="<?php echo $sol_call_button_link; ?>" target="_blank"
                                class="iom-button fs-5 z-index2 white-color hover-green-color"
                                title="<?php echo $sol_call_button_label;?>"><?php echo $sol_call_button_label;?></a>
                        </div>
                    </div>
                    <?php $inc++; endwhile;endif; ?>

                </div>
            </div>
        </div>
        <div class="contact-box py-lg-4 px-lg-5 py-3 px-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8 col-md-7 mb-md-0 mb-3">
                    <div class="fs-5 lightgray-color text-uppercase font-bold">
                        <?php the_field('sol_question_shortline'); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 d-flex justify-content-md-end justify-content-start">
                    <a href="<?php the_field('sol_que_contact_button_link'); ?>"
                        title="<?php the_field('sol_question_contact_button_label'); ?>"
                        class="iom-arrow-button fs-5 green-bg white-color hover-white-color transiton-03s rounded border-1 green-border text-capitalize position-relative d-inline-block">
                        <?php the_field('sol_question_contact_button_label'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="iomarket-section case-studies-section">
    <div class="container">
        <div class="section-second-title mb-3 ps-3 position-relative">
            <div class="fs-2 gray-color"><?php the_field('sol_case_heading'); ?></div>
            <div class="display-5 black-color"><?php the_field('sol_case_subheading'); ?></div>
        </div>
        <div class="row mt-5">
            <div class="case-studies-slider owl-carousel d-flex flex-wrap px-0 w-100">
                <?php  wp_reset_query();
								$args = array(
								'post_type' => 'post',
								'orderby' => 'publish_date',
								'lang' => ICL_LANGUAGE_CODE,
								'posts_per_page'   => '-1',
								'order'            => 'DESC',
                                    'tax_query' => array (
                                        array(
                                            'taxonomy' => 'category', 
                                            'field' => 'slug',
											'terms'    => array( 'case-studies' ),
											 'operator' => 'IN'
                                        )
                                    ),
                                    'post_status' => 'publish',
							); 
									$the_querys = new WP_Query( $args); 
									while ( $the_querys -> have_posts() ) :$the_querys ->  the_post(); 
									?>

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
                            <div class="case-title fs-4  font-bold position-relative pb-2 mb-3">
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
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>
<script type="text/javascript">
$(document).ready(function() {
    if ($(window).width() < 992) {
        $(".header-menu .login").click(function() {
            $("body").removeClass("body-stop-scroll");
            $(".header-menu").removeClass("show-menu");
        });
    }
});
</script>