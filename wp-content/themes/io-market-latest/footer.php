<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0 
 */

 ?>
<footer class="iomarket-section footer-section">
    <div class="subscribe-box pb-xl-5 pb-md-4 pb-3">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 mb-lg-0 mb-3">
                    <div class="newsletter-text">
                        <div class="section-second-title mb-3 ps-3 position-relative">
                            <div class="fs-2 gray-color"><?php echo the_field('newsletter_title', 'option'); ?></div>
                            <div class="display-5 black-color"><?php echo the_field('newsletter_subtitle', 'option'); ?>
                            </div>
                        </div>
                        <p class="fs-5 gray-color font-light"><?php echo the_field('newsletter_shortline', 'option'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-form position-relative">
                        <?php echo do_shortcode('[yikes-mailchimp form="1"]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-link pt-4">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-9 order-lg-1 order-2 text-lg-start text-center">
                    <div class="links fs-5  font-light">
                        <ul class="d-flex flex-wrap align-items-center"><?php
                         //restore_current_blog(); $main_blog = 1; switch_to_blog( $main_blog ); 
						 if ( has_nav_menu( 'footer' ) ) {

                            wp_nav_menu(
                                array(
								 //'menu'   => 'footer' . ICL_LANGUAGE_CODE,
                                    'container'  => '',
                                    'items_wrap' => '%3$s',
                                    'theme_location' => 'footer',  
                                )
                            );

                            } 
                           //restore_current_blog(); ?> </ul>
                    </div>
                </div>
                <div class="col-lg-3 text-lg-end text-center order-lg-2 order-1 mb-lg-0 mb-3">
                    <div class="social-icons">
                        <?php 
						//$main_blog = 1; switch_to_blog( $main_blog );  
                        $upload_logo = get_field('upload_logo', 'option');
						if( !empty( $upload_logo ) ): ?>
                        <a href="<?php echo site_url() ?>" class="footer-logo mb-3 d-block" title="site-logo">
                            <img src="<?php echo $upload_logo; ?>" alt="IOMARKET">
                        </a>
                        <?php endif; ?>
                        <div class="icons">
                            <a href="<?php echo the_field('insta_icon', 'option'); ?>" title="INSTAGRAM" target="_blank"
                                class="overflow-hidden rounded-circle d-inline-block position-relative instagram"></a>
                            <a href="<?php echo the_field('linkedin_link', 'option'); ?>" title="LINKEDIN"
                                target="_blank"
                                class="overflow-hidden rounded-circle d-inline-block position-relative linkedin"></a>
                            <a href="<?php echo the_field('twitter_link', 'option'); ?>" title="TWITTER" target="_blank"
                                class="overflow-hidden rounded-circle d-inline-block position-relative twitter"></a>
                            <a href="<?php echo the_field('facebook_link', 'option'); ?>" title="FACEBOOK"
                                target="_blank"
                                class="overflow-hidden rounded-circle d-inline-block position-relative facebook"></a>
                            <a href="mailto:<?php echo the_field('email_link', 'option'); ?>" title="MAIL"
                                target="_blank"
                                class="overflow-hidden rounded-circle d-inline-block position-relative email"></a>
                        </div>
                        <?php  //restore_current_blog(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>