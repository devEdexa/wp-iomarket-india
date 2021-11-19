<?php
/**
 * Template Name: Frontpage Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */
 get_header(); 
 
$about_io_title = get_field('about_io-market_title');
$about_io_description = get_field('about_io-market_description');
$we_offer = get_field('we_offer');
$we_offer_description = get_field('we_offer_description');
$we_offer_2 = get_field('we_offer_2');
$we_offer_description_2 = get_field('we_offer_description_2');
$about_io_image = get_field('about_io-market_image');
if(!empty($about_io_title) || !empty($about_io_description) || !empty($we_offer) || !empty($we_offer_description) || !empty($about_io_image)){?>
<section class="iomarket-section about-section">
    <div class="container">
        <div class="about-content">
            <!-- <div class="section-title display-5 green-color font-black mb-md-4 mb-3">
                <?php echo $about_io_title; ?>
            </div> -->
            <div class="row">
                <div class="col-xl-7">
                    <?php if(!empty($about_io_description)) { ?>
                    <p class="section-discription fs-4 darkgray-color mb-xl-4 mb-3">
                        <?php echo $about_io_description; ?>
                    </p>
                    <?php } ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-md-0 mb-3 mt-3">
                    <?php if(!empty($we_offer)) { ?>
                    <div class="list-title fs-3 lightgray-color font-black text-uppercase mb-md-3 mb-2">
                        <?php echo $we_offer; ?>
                    </div>
                    <?php } ?>
                    <?php echo $we_offer_description; ?>
                </div>
                <div class="col-md-6 ps-md-5 mt-3">
                    <?php if(!empty($we_offer_2)) { ?>
                    <div class="list-title fs-3 lightgray-color font-black text-uppercase mb-md-3 mb-2">
                        <?php echo $we_offer_2; ?>
                    </div>
                    <?php } ?>
                    <?php echo $we_offer_description_2; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<section class="position-relative iomarket-banner-wrapper">
    <div class="iomarket-video-wrapper">
        <video id="edexaVideo" autoplay muted loop>
            <source src=<?php echo get_stylesheet_directory_uri(); ?>/assets/images/io-market.mp4" type="video/mp4">
            <source src=<?php echo get_stylesheet_directory_uri(); ?>/assets/images/io-market.mp4" type="video/ogg">
        </video>
    </div>
    <div class="container">
        <div class="quote-text text-center p-md-5 p-4 m-auto fs-3 font-black position-relative white-color">
            <span ><?php the_field('invest_sec'); ?></span><p><?php the_field('invest_timeline_shortline_sub_title'); ?></p>
        </div>
    </div>
    <!-- <div class="container">
        <div class="quote-text text-center p-md-5 p-4 m-auto fs-3 font-black position-relative white-color">
            <span ><?php //the_field('invest_sec'); ?></span><p><?php //the_field('invest_timeline_shortline_sub_title'); ?></p>
        </div>
    </div> -->
</section>
<?php 
$our_solutions_title = get_field('our_solutions_title');
$our_solutions_description = get_field('our_solutions_description');
$our_solutions = get_field('our_solutions');
if(!empty($our_solutions_title) || !empty($our_solutions_description) || !empty($our_solutions)) { ?>
<section class="iomarket-section solution-section gray-bg">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3"><?php echo $our_solutions_title; ?>
        </div>
        <div class="section-discription fs-5 darkgray-color mb-xl-4 mb-3">
            <?php echo $our_solutions_description; ?>
        </div>
        <?php if(have_rows('our_solutions')) : ?>
        <div class="d-flex align-items-stretch flex-wrap owl-carousel solution-slider home-solution-slider">
            <?php $i=1; while(have_rows('our_solutions')) : the_row(); 
                $solution_title = get_sub_field('solution_title');
                $solution_description = get_sub_field('solution_description');
                $solution_features = get_sub_field('solution_features');
                $solution_page_link = get_sub_field('solution_page_link');
                if(!empty($solution_title) || !empty($solution_description) || !empty($solution_features)) {?>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <a href="<?php echo $solution_page_link; ?>"
                    class="d-block solution-box position-relative h-100 pt-5 pb-xl-5 pb-4 px-xl-4 px-3 darkgray-color"
                    title="<?php echo $solution_title; ?>">
                    <div class="icon rounded-circle position-absolute home-boxicon-<?php echo $i;?>"></div>
                    <div class="box-title fs-5 mb-xl-4 mb-3 font-semibold text-break mt-2"><?php echo $solution_title; ?>
                    </div>
                    <p class="fs-6 mb-3"><?php echo $solution_description; ?></p>
                    <ul class="iomarket-listing fs-6 gray-color">
                        <?php echo $solution_features; ?>
                    </ul>
                </a>
            </div>
            <?php } ?>
            <?php $i++; endwhile; wp_reset_query();?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php } ?>
<?php 
$satisfied_costumers_title = get_field('satisfied_costumers_title');
$satisfied_costumers = get_field('satisfied_costumers');
if(!empty($satisfied_costumers_title) || !empty($satisfied_costumers)) {?>
<section class="iomarket-section costumers-section">
    <div class="container">
        <?php if(!empty($satisfied_costumers_title)) { ?>
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">
            <?php echo $satisfied_costumers_title; ?></div>
        <?php } ?>
        <?php if(have_rows('satisfied_costumers')) :?>
        <div class="owl-carousel mt-5 costumers-carousel">
            <?php while(have_rows('satisfied_costumers')) : the_row(); 
                $customer_profile_photo = get_sub_field('customer_profile_photo');
                $profile_url = $customer_profile_photo['sizes']['profilepic'];
                $customer_name = get_sub_field('customer_name');
                $customer_designation = get_sub_field('customer_designation');
                $about_customer = get_sub_field('about_customer');
                if(!empty($customer_profile_photo) || !empty($customer_name) || !empty($customer_designation) || !empty($about_customer)){?>
            <div class="item justify-content-center d-flex flex-wrap">
                <img src="<?php echo $profile_url; ?>" width="206" height="206" alt="profile"
                    class="w-50 h-auto pb-sm-0 pb-3">
                <div class="text-center pt-sm-3 pe-sm-3 ps-sm-3">
                    <div class="title lightgray-color fs-4 font-bold pb-md-4 pb-3">
                        <?php echo $customer_name; ?>
                        <span class="d-block"><?php echo $customer_designation; ?></span>
                    </div>
                    <?php if(!empty($about_customer)) { ?>
                    <div class="subtext fs-6 "><?php echo $about_customer; ?></div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php } ?>
<?php 
$three_reason = get_field('three_reasons_why_heading_title');
$three_reasons = get_field('three_reasons');
if(have_rows('three_reasons')){ ?>
<section class="iomarket-section reason-section gray-bg">
    <div class="container">
        <?php if(!empty($three_reason)){ ?>
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3"><?php echo $three_reason; ?></div>
        <?php } ?>
        <?php $count = 1; while(have_rows('three_reasons')) : the_row(); 
            $reason_number = get_sub_field('reason_number');
            $reason_title = get_sub_field('reason_title');
            $Reason_image = get_sub_field('Reason_image');
            $reason_sub = get_sub_field('reason_sub-title');
            $reason_description = get_sub_field('reason_description');
            $button_text = get_sub_field('button_text');
            $button_link = get_sub_field('button_link');
            $background_text = get_sub_field('background_text');
            if(!empty($background_text)) {
            $get_first = $background_text;
            } else {
            $prefix_br = explode('<br/>', $reason_title);
            $get_first = $prefix_br[0];
            }
            $button_link = isset($button_link)? $button_link : '#';
            if(!empty($reason_number) || !empty($reason_title) || !empty($Reason_image) || !empty($reason_sub) || !empty($reason_description) || !empty($button_text) || !empty($button_link)){ ?>
        <?php if($count % 2 != 0){ ?>
        <div class="row justify-content-between reason-wrapper">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-xs-12 d-flex flex-wrap mb-3">
                <div class="why-head d-flex pb-xl-5 pb-xxl-4 pb-lg-3">
                    <?php if(!empty($reason_number)) { ?>
                    <span class="why-number font-bold lightgray-color"><?php echo $reason_number; ?></span>
                    <?php } ?>
                    <div
                        class="why-titile display-4 font-black green-color ms-xl-3 ms-2 ps-xl-4 ps-lg-3 position-relative text-capitalize pt-3">
                        <?php if(!empty($reason_title)) { ?>
                        <?php echo $reason_title; ?>
                        <?php } ?>
                        <?php if(isset($get_first)) { ?>
                        <span
                            class="position-absolute display-3 lightgray-color text-capitalize font-black"><?php echo $get_first; ?></span>
                        <?php } ?>
                        <?php if(!empty($Reason_image)) { ?>
                <img class="mx-auto m-auto why-icon reasonImg mt-5" src="<?php echo $Reason_image; ?>" alt="innovative" >
                <?php } ?>
                    </div>
                </div>
            </div>
            <?php if(!empty($reason_sub) || !empty($reason_description) || !empty($button_text) || !empty($button_link)){?>
            <div class="col-xl-5 col-lg-6 col-sm-12 col-xs-12 mb-md-5 mb-4 reason-wrapper-inner pt-xxl-4 pt-lg-3 r-margin">
                <?php if(!empty($reason_sub)) { ?>
                <div class="title fs-3 font-bold pb-xl-4 pb-3 lightgray-color"><?php echo $reason_sub; ?></div>
                <?php } ?>
                <div class="detail-text fs-5 pt-3">
                    <!-- <p class="mb-xxl-5 mb-xl-4 mb-3">--><?php echo $reason_description; ?>

                    <!-- <?php if(!empty($button_text)) { ?>
                    <a href="<?php echo $button_link; ?>" title="<?php echo $button_text; ?>"
                        class="iom-arrow-button fs-4 green-bg white-color hover-white-color transiton-03s rounded border-1 green-border text-capitalize position-relative d-inline-block"><?php echo $button_text; ?></a>
                    <?php } ?> -->
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } else { ?>

        <div class="row justify-content-between reason-wrapper">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-xs-12 d-flex flex-wrap order-lg-2 order-1 mb-3">
                <div class="why-head d-flex pb-xl-5 pb-xxl-4 pb-lg-3">
                    <?php if(!empty($reason_number)) { ?>
                    <span class="why-number font-bold lightgray-color"><?php echo $reason_number; ?></span>
                    <?php } ?>
                    <div
                        class="why-titile display-4 font-black green-color ms-xl-3 ms-2 ps-xl-4 ps-lg-3 position-relative text-capitalize pt-3">
                        <?php if(!empty($reason_title)) { ?>
                        <?php echo $reason_title; ?>
                        <?php } ?>
                        <?php if(isset($get_first)) { ?>
                        <span
                            class="position-absolute display-3 lightgray-color text-capitalize font-black"><?php echo $get_first; ?></span>
                        <?php } ?>
                        <?php if(!empty($Reason_image)) { ?>
                <img class="mx-auto m-auto why-icon reasonImg mt-5" src="<?php echo $Reason_image; ?>" alt="individual" >
                <?php } ?>
                    </div>
                </div>
                
            </div>
            <div class="col-xl-5 col-lg-6 col-sm-12 col-xs-12 order-lg-1 order-2 mb-md-5 mb-4 pt-xxl-4 pt-lg-3 r-margin">
                <?php if(!empty($reason_sub)) { ?>
                <div class="title fs-3 font-bold pb-xl-4 pb-3 lightgray-color"><?php echo $reason_sub; ?></div>
                <?php } ?>
                <div class="detail-text fs-5">
                    <!-- <p class="mb-xxl-5 mb-xl-4 mb-3">-->
                    <?php echo $reason_description; ?>
                    <!-- <?php if(!empty($button_text)) { ?>
                    <a href="<?php echo $button_link; ?>" titile="button"
                        class="iom-arrow-button fs-4 green-bg white-color hover-white-color transiton-03s rounded border-1 green-border text-capitalize position-relative d-inline-block"><?php echo $button_text; ?></a>
                    <?php } ?> -->
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
        <?php $count++; endwhile; ?>
    </div>
</section>
<?php } ?>
<?php 
$new_title = get_field('io-market_news_title');
	$args = array(
								'post_type' => 'post',
								//'paged' => $paged,  
								'orderby' => 'publish_date',
								'posts_per_page'   => '10',
								'order'            => 'DESC',
                                    'tax_query' => array (
                                        array(
                                            'taxonomy' => 'category', // I have a custom taxonomy, 'subject'
                                            'field' => 'slug',
											'terms'    => array( 'blog' ),
											 'operator' => 'IN'
                                            //'terms' => array('highlights', 'customer', 'casestudy'),
                                            //'operator' => 'NOT IN' // This operator ensures that the values listed in 'term' are excluded
                                        )
                                    ),
                                    'post_status' => 'publish',
							); 
$newpost = new WP_Query( $args );
if ( $newpost->have_posts() ) :
 ?>
<section class="iomarket-section news-section dot-bg">
    <div class="container">
        <?php if(!empty($new_title)){ ?>
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3"><?php echo $new_title; ?>
        </div>
        <?php } ?>
        <div id="news-carousel" class="owl-carousel">
            <?php global $post; ?>
            <?php while( $newpost->have_posts() ) : $newpost->the_post(); ?>
            <div class="item white-bg d-flex flex-column justify-content-start pb-xl-4 pb-3 position-relative">
                <?php if(has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('newsimg',array('class'=>'w-100')); ?>
                <?php } ?>
                <div class="detail-box pt-3 px-xl-4 px-3 mb-xl-4 mb-3">
                    <div class="date green-bg white-color px-3 py-2 position-absolute transiton-03s">
                        <?php echo get_the_date(); ?></div>
                    <div class="title lightgray-color fs-4 font-bold pb-xl-4 pb-3"><?php the_title(); ?></div>
                    <div class="subtext fs-6"><?php the_excerpt(); ?></div>
                </div>
                <div class="news-button px-xl-4 px-3 mt-auto">

                    <a href="<?php echo get_permalink($post->ID); ?>"
                        class="black-color iom-button fs-5 rounded-pill text-capitalize"
                        title="<?php _e( 'Read more' ); ?>">
                        <?php _e( 'Read more' ); ?>
                    </a>



                </div>
            </div>
            <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php get_footer();?>
