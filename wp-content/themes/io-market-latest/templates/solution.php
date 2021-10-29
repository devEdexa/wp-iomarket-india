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
<section class="iomarket-section network-section">
    <div class="container">
        <div class="all">
            <?php 
            global $post; 
            while($solutions->have_posts()) : $solutions->the_post();
                $main_sol_add_short_detail = get_field('main_sol_add_short_detail');
                $main_sol_upload_image = get_field('main_sol_upload_image'); ?>
                <div class="item mb-md-5 mb-4">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="network-title d-flex align-items-md-center  display-4 green-color font-black text-uppercase  ">
                               <span class="me-2"
                                    title="<?php echo sprintf('%02d', $count); ?>"><?php echo sprintf('%02d', $count); ?></span>
                                <?php the_title(); ?></div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 mb-md-3">
                           <?php  echo $main_sol_add_short_detail; ?>
                           <!--  <a href="<?php //echo get_permalink($post->ID) ?>" titile="<?php //echo __("Details us","iomarket") ?>" class="iom-arrow-button fs-4 green-bg white-color hover-white-color transiton-03s rounded border-1 green-border text-capitalize position-relative d-inline-block">
                                <?php echo __("Read more","iomarket") ?></a> --></div>
                        <div class="col-md-5 col-sm-12 col-xs-12 d-md-block d-none">
                            <div class="icon-box">
                                <img src="<?php echo $main_sol_upload_image['url']; ?>">
                            </div>
                        </div>

                    </div>
                </div>
            <?php $count++; endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>
<?php endif;?>
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