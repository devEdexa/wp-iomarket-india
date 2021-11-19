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
					'order'                  => 'ASC',
					'wpse_include_parent' => true,
					'post_parent'         => 11,
					'post_status' => 'publish'
                );
$solutions = new WP_Query( $sol_args );
if ( $solutions->have_posts() ) :
$count = 1;
 ?>
            <?php 
            global $post; 
            while($solutions->have_posts()) : $solutions->the_post();
                $main_sol_add_short_detail = get_field('main_sol_add_short_detail');
                $main_sol_upload_image = get_field('main_sol_upload_image'); 
            if($count % 2 == 0){
                ?>
                <section class="iomarket-section network-section gray-bg">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-lg-6 col-sm-12 col-xs-12 d-md-block ">
                                <div class="network-title d-flex display-4 font-black text-uppercase  mb-4 network-title-hide">
                                    <?php the_title(); ?>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo $main_sol_upload_image['url']; ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 col-xs-12 mb-md-3 ">
                               <div class="network-title d-flex align-items-md-center  display-4 font-black text-uppercase  mb-4 removeTitle">
                                <!-- <span class="me-2"
                                        title="<?php echo sprintf('%02d', $count); ?>"><?php echo sprintf('%02d', $count); ?></span> -->
                                    <?php the_title(); ?>
                                </div>
                             <?php  echo wp_trim_words( $main_sol_add_short_detail, 32, '...' ); ?> 
                             <p class="pt-3"><a href="javascript:void(0)" class="green-color fw-800" data-bs-toggle="modal" data-bs-target="#blogmodel<?php echo $count; ?>">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } else{ ?> 
                <section class="iomarket-section network-section ">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-lg-6 col-sm-12 col-xs-12 d-md-block order-md-1 order-2 ">
                               <div class="network-title d-flex  display-4 font-black text-uppercase  mb-4 removeTitle">
                               <!--  <span class="me-2"
                                        title="<?php echo sprintf('%02d', $count); ?>"><?php echo sprintf('%02d', $count); ?></span> -->
                                    <?php the_title(); ?>
                                </div>
                             <?php  echo wp_trim_words( $main_sol_add_short_detail, 32, '...' ); ?>
                             <p class="pt-3"><a href="javascript:void(0)" class="green-color fw-800" data-bs-toggle="modal" data-bs-target="#blogmodel<?php echo $count; ?>">Read More</a></p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 col-xs-12 mb-md-3 order-md-2 order-1">
                                <div class="network-title d-flex align-items-md-center  display-4 font-black text-uppercase  mb-4 network-title-hide">
                                    <?php the_title(); ?>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo $main_sol_upload_image['url']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php }$count++; endwhile; wp_reset_query(); ?>
<?php endif;?>
<?php 
            $counttwo = 1;
            while($solutions->have_posts()) : $solutions->the_post();
                $main_sol_add_short_detail = get_field('main_sol_add_short_detail');
                $main_sol_upload_image = get_field('main_sol_upload_image'); 
            ?>

            <div class="modal fade customer-modal" id="blogmodel<?php echo $counttwo; ?>" tabindex="-1"
                data-slug="" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="btn-close close position-absolute white-bg" data-bs-dismiss="modal"
                            aria-label="Close">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-icon.svg" alt="Close"
                                class="align-top">
                        </button>
                        <div class="modal-body">
                            <div class="customer-detail float-start" id="printThis">
                                <h2 class="fs-4 font-bold d-inline-block position-relative"> <?php the_title(); ?></h2>
                                <img class="bg-img position-absolute"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/popup-round.png"
                                    alt="popup-round">
                                <div class="customer-popup-img position-relative overflow-hidden float-end">
                                    <img class="w-100" src="<?php echo $main_sol_upload_image['url']; ?>"
                                alt="<?php the_title();?>" />
                                </div>
                                <?php echo $main_sol_add_short_detail; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php $counttwo++; endwhile; wp_reset_query(); ?>


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