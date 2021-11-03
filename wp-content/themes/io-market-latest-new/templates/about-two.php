<?php
/**
 * Template Name: About Template Two
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */
 get_header(); ?>
<section class="iomarket-section vision-section position-relative overflow-hidden pb-0">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">
            <?php the_field('offer_heading'); ?>
            <span class="d-block"><?php the_field('offer_heading_subline'); ?></span>

        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6 vision-left order-lg-1 order-2">
                <div class="vision-content">
                    <!-- <div class="fs-4 lightgray-color font-black d-block mb-xxl-4 mb-3">
                        <?php //the_field('offer_subheading'); ?>
                    </div> -->
                    <div class="mb-xxl-4 mb-3 fs-5"><?php the_field('offer_shortline'); ?></div>
                    <div class="fs-5"><?php the_field('offer_description'); ?>
                    </div>
                    <div class="vision-quote position-relative d-block text-center z-index1 mt-xxl-5 mt-xl-4 mt-3">
                        <div class="vision-quote-inner">
                            <span class="fs-5 fst-italic text-center"><?php the_field('offer_quote'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 vision-right order-lg-2 order-1 mb-lg-0 mb-3">
                <div class="vision-image position-relative z-index1">
                    <?php 
					$offer_upload_image = get_field('offer_upload_image');
					if( !empty( $offer_upload_image ) ): ?>
                    <img class="w-100 img-fluid" src="<?php echo esc_url($offer_upload_image['url']); ?>"
                        alt="<?php echo esc_attr($offer_upload_image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="iomarket-section industries-section">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">
            <?php the_field('emp_heading'); ?>
            <span class="d-block text-break"><?php the_field('emp_heading_secondline'); ?></span>
        </div>
        <div class="row industries-section-row">
            <?php  $i=0; if( have_rows('add_employment_condition') ): while( have_rows('add_employment_condition') ): the_row(); 
                $emp_heading = get_sub_field('emp_heading');$emp_description = get_sub_field('emp_description');
                    if ($i == 0) {
                            $cls = 'use-icon-seven';
                        }
                        if ($i == 1) {
                            $cls = 'use-icon-eight';
                        }

                        if ($i == 2) {
                            $cls = 'use-icon-nine';
                        }?>

            <div class="industries-box col-lg-4 col-md-6 mb-md-4 mb-3">
                <div class="use-content-box h-100 overflow-hidden">
                    <div class="inner-box position-relative transiton-03s z-index2 p-md-4 p-3 gray-bg h-100">
                        <span class="mb-lg-3 icons <?php echo $cls;?>"></span>
                        <div class="inner-box-title text-break mb-3 fs-3 font-bold"><?php echo $emp_heading;?></div>
                        <p><?php echo $emp_description;?></p>
                    </div>
                </div>
            </div>
            <?php $i++; endwhile;endif; ?>

        </div>
    </div>
</section>
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
<?php get_footer();?>
<script type="text/javascript">
$(document).ready(function() {
    // typing effect start
    typing(0, $('.typewriter-text').data('text'));

    function typing(index, text) {
        var textIndex = 1;
        var tmp = setInterval(function() {
            if (textIndex < text[index].length + 1) {
                $('.typewriter-text').text(text[index].substr(0, textIndex));
                textIndex++;
            } else {
                setTimeout(function() {
                    backed(index, text)
                }, 2000);
                clearInterval(tmp);
            }
        }, 150);
    }

    function backed(index, text) {
        var textIndex = text[index].length;
        var tmp = setInterval(function() {
            if (textIndex + 1 > 0) {
                $('.typewriter-text').text(text[index].substr(0, textIndex));
                textIndex--;
            } else {
                index++;
                if (index == text.length) {
                    index = 0;
                }
                typing(index, text);
                clearInterval(tmp);
            }
        }, 0)
    }
    // typing effect end
});
</script>