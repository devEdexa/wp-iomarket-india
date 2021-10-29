<?php
/**
 * Template Name: Customers Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */
 get_header(); ?>

<section class="iomarket-section blog-news-section">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3"><?php the_field('customer_title'); ?>
            <br><?php the_field('customer_second_title'); ?>
        </div>
        <div class="section-discription fs-5 darkgray-color mb-xl-4 mb-3">
            <?php the_field('customer_section_description'); ?>
        </div>
        <div class="blog-from-main row">

            <?php $argss = array(
									'post_type' => 'post',
									'category_name' =>'customer, customer-en', 
									'posts_per_page'  => -1,  
								     'lang' => ICL_LANGUAGE_CODE, 
									'post_status' => 'publish'
								);
								$newss = new WP_Query($argss); $is=0;$a=0;
								 while ($newss->have_posts()) : $newss->the_post();
									global $post;
                                    $post_slug = $post->post_name;	?>

            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 blog-box mb-md-4 mb-3 loaders">
                <div class="blog-box-item pb-5 h-100 position-relative border-1 gray-border">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blogmodel<?php echo $a;?>"
                        class="transiton-03s" title="<?php the_title();?>">
                        <?php   if ( has_post_thumbnail() ) :?>
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" />
                        <?php else:?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/gallen.jpg"
                            alt="<?php the_title();?>">
                        <?php endif;?>
                    </a>
                    <div class="blog-info-box pt-4 pe-4 ps-4 mb-4">
                        <div class="heading-main">
                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                data-bs-target="#blogmodel<?php echo $a;?>"
                                class="heading position-relative d-flex mb-3 pb-3 text-decoration-none lightgray-color hover-green-color transiton-03s font-bold"
                                title="LAVEBA Genossenschaft ">
                                <?php the_title();?></a>
                        </div>
                        <?php	if ( has_excerpt() ) {?>
                        <?php the_excerpt();  ?>
                        <?php } else { ?>
                        <p class="mb-3"><?php echo wp_trim_words( get_the_content(), 15 );?></p>
                        <?php  } ?>
                    </div>
                    <span class="read-space d-block position-absolute"></span>
                    <?php if(ICL_LANGUAGE_CODE=='en') { ?>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blogmodel<?php echo $a;?>"
                        class="read-more text-decoration-none mb-3 ms-4 lightgray-color hover-green-color transiton-03s d-inline-block font-semibold text-uppercase position-absolute"
                        title="<?php _e( 'Read more' ); ?>"><?php _e( 'Read more' ); ?></a>
                    <?php } else { ?>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blogmodel<?php echo $a;?>"
                        class="read-more text-decoration-none mb-3 ms-4 lightgray-color hover-green-color transiton-03s d-inline-block font-semibold text-uppercase position-absolute"
                        title="<?php _e( 'mehr lesen' ); ?>"><?php _e( 'mehr lesen' ); ?></a>
                    <?php } ?>
                </div>
            </div>
            <?php  $is++; $a++; endwhile;  
                 wp_reset_query();  ?>
        </div>
    </div>
</section>
<section class="iomarket-section customer-section gray-bg">
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
<!-- Modal -->
<?php  $current_url = home_url(add_query_arg(array(),$wp->request));
					$arg1 =  array(
									'post_type' => 'post',
									'lang' => ICL_LANGUAGE_CODE,
									'category_name' =>'customer, customer-en', 
									'posts_per_page'  => -1,  
								//	'order'   => 'DESC',  
									'post_status' => 'publish',
									// 'post__in'      => $myarray
								);
								$news = new WP_Query($arg1); $d=0;
						      	$post_title = urlencode( $post->post_title );
								 while ($news->have_posts()) : $news->the_post(); global $post;
                                    $post_slug = $post->post_name;
								?>
<div class="modal fade customer-modal" id="blogmodel<?php echo $d; ?>" tabindex="-1"
    data-slug="<?php echo basename(get_permalink()); ?>" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close close position-absolute white-bg" data-bs-dismiss="modal"
                aria-label="Close">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-icon.svg" alt="Close"
                    class="align-top">
            </button>
            <div class="modal-body">
                <div class="customer-detail float-start" id="printThis">
                    <h2 class="fs-4 font-bold d-inline-block position-relative"> <?php the_title();?></h2>
                    <img class="bg-img position-absolute"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/popup-round.png"
                        alt="popup-round">
                    <div class="customer-popup-img position-relative overflow-hidden float-end">
                        <p>
                            <?php   if ( has_post_thumbnail() ) :?>
                            <img class="w-100" src="<?php echo the_post_thumbnail_url(); ?>"
                                alt="<?php the_title();?>" />
                            <?php else:?>
                            <img class="w-100"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/news/gallen.jpg"
                                alt="<?php the_title();?>">
                            <?php endif;?>
                        </p>
                    </div>
                    <?php the_content();?>
                    <?php 
						$image = get_field('customer_photo');
						if( !empty( $image ) ): ?>
                    <div class="head-img">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <div class="quote green-color d-inline-block align-middle position-relative">
                            <?php the_field('cust_quote'); ?>
                            <span class="d-block mt-3 gray-color"> <strong class="fs-5 black-color">
                                    <?php the_field('customer_name'); ?> |
                                </strong>
                                <?php the_field('cust_designation'); ?></span>
                        </div>
                    </div> <?php endif; ?>
                    <div
                        class="share-buttons d-flex flex-wrap align-items-center justify-content-sm-end justify-content-center">
                        <ul
                            class="share-icons transiton-03s d-flex flex-wrap align-items-center justify-content-center mb-sm-0 mb-3">
                            <li>
                                <a rel="noreferrer" class="transiton-03s d-flex flex-wrap"
                                    href="https://web.skype.com/share?url=<?php echo $current_url; ?>/?<?php echo basename(get_permalink()); ?>"
                                    target="_blank" title="Skype">
                                    <svg viewBox="0 0 26 26">
                                        <use
                                            xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svg/social-share.svg#skype">
                                        </use>
                                    </svg>
                                </a>
                            </li>
                            <li class="ms-sm-3 ms-2">
                                <a rel="noreferrer" class="transiton-03s d-flex flex-wrap"
                                    href="https://mail.google.com/mail/?view=cm&su=<?php echo $post_title; ?>&body=<?php echo $current_url; ?>/?<?php echo basename(get_permalink()); ?>"
                                    target="_blank" title="Mail">
                                    <svg viewBox="0 0 26 26">
                                        <use
                                            xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svg/social-share.svg#mail">
                                        </use>
                                    </svg>
                                </a>
                            </li>
                            <li class="ms-sm-3 ms-2">
                                <a rel="noreferrer" class="transiton-03s d-flex flex-wrap"
                                    href="https://www.facebook.com/sharer.php?u=<?php echo $current_url; ?>/?<?php echo basename(get_permalink()); ?>"
                                    target="_blank" title="Facebook">
                                    <svg viewBox="0 0 26 26">
                                        <use
                                            xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svg/social-share.svg#facebook">
                                        </use>
                                    </svg>
                                </a>
                            </li>
                            <li class="ms-sm-3 ms-2">
                                <a rel="noreferrer" class="transiton-03s d-flex flex-wrap"
                                    href="https://twitter.com/intent/tweet/?text=<?php echo $post_title; ?>&url=<?php echo $current_url; ?>/?<?php echo basename(get_permalink()); ?>"
                                    target="_blank" title="Twitter">
                                    <svg viewBox="0 0 26 26">
                                        <use
                                            xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svg/social-share.svg#twitter">
                                        </use>
                                    </svg>
                                </a>
                            </li>
                            <li class="ms-sm-3 ms-2">
                                <a rel="noreferrer" class="transiton-03s d-flex flex-wrap"
                                    href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $current_url; ?>/?<?php echo basename(get_permalink()); ?>"
                                    target="_blank" title="Linkedin">
                                    <svg viewBox="0 0 26 26">
                                        <use
                                            xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svg/social-share.svg#linkedin">
                                        </use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <?php if(ICL_LANGUAGE_CODE=='en'):?>
                        <a href="#" class="black-color print-button iom-button fs-5 rounded-pill z-index2 ms-sm-3"
                            title="<?php _e( 'Print' ); ?> "><?php _e( 'Print' ); ?></a>
                        <?php else:?>
                        <a href="#" class="black-color print-button iom-button fs-5 rounded-pill z-index2 ms-sm-3"
                            title="<?php _e( 'Drucken' ); ?> "><?php _e( 'Drucken' ); ?></a>
                        <?php endif;?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  $d++; endwhile; wp_reset_query();?>

<?php get_footer();?>
<!-- popup model url script-->
<script>
(function($) {
    $(document).ready(function() {
        var url = window.location.search == '' ? window.location.href : window.location.href.replace(window
            .location.search, '');
        if (window.location.search != '') {
            var popup = window.location.search.replace("?", '');
            $("[data-slug='" + popup + "']").modal('show');
        }
        $('.customer-modal').on('shown.bs.modal', function() {
            history.pushState({}, null, url + "?" + $(this).attr("data-slug"));
        })

        $('.customer-modal').on('hidden.bs.modal', function() {
            history.pushState({}, null, url);
        })

        $(".print-button").click(function() {
            printElement($(this).closest(".modal-body").find(".customer-detail")[0]);
        })

    })

})(jQuery)
</script>
<!-- print button script-->
<script>
(function($) {
    $(".print-button").click(function() {
        var elem = $(this).closest(".modal-body").find(".customer-detail")[0];
        var domClone = elem.cloneNode(true);
        var $printSection = document.getElementById("printSection");

        if (!$printSection) {
            var $printSection = document.createElement("div");
            $printSection.id = "printSection";
            document.body.appendChild($printSection);
        }

        $printSection.innerHTML = "";
        $printSection.appendChild(domClone);
        window.print();
    })
})(jQuery)
</script>