<?php
/**
 * The template for displaying the 404 template in the io-market theme.
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */

get_header();
?>

<main id="site-content" role="main">
    <div class="container">
        <div class="error404-content d-flex flex-wrap align-items-center justify-content-center">
            <?php if(ICL_LANGUAGE_CODE=='en'):?>
            <div class="section-inner">
                <img class="not-fond-image d-block m-auto mb-md-3 mb-2"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/vector-404.svg"
                    alt="page-not-found">
                <h1 class="entry-title font-black display-5 mb-2 w-100 text-center text-capitalize dark-color">
                    <?php _e( 'Oops! That page can’t be found.', 'twentytwenty' ); ?></h1>
                <div class="intro-text w-100 text-center">
                    <p class="fs-5 font-semibold text-capitalize dark-color">
                        <?php _e( 'The page may have been removed.', 'twentytwenty' ); ?>
                    </p>
                    <a href="<?php echo icl_get_home_url() ?>"
                        class="iom-button fs-5 z-index2 white-color hover-green-color text-uppercase "
                        title="button "><?php _e( 'GO HOME' ); ?></a>
                </div>
            </div>
            <?php else:?>
            <div class="section-inner">
                <img class="not-fond-image d-block m-auto mb-md-3 mb-2"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/vector-404.svg"
                    alt="page-not-found">
                <h1 class="entry-title font-black display-5 mb-2 w-100 text-center text-capitalize dark-color">
                    <?php _e( 'Oops! This page cannot be found.', 'twentytwenty' ); ?></h1>
                <div class="intro-text w-100 text-center">
                    <p class="fs-5 font-semibold text-capitalize dark-color">
                        <?php _e( 'The page you requested does not exist.', 'twentytwenty' ); ?>
                    </p>
                    <a href="<?php echo site_url() ?>"
                        class="iom-button fs-5 z-index2 white-color hover-green-color text-uppercase "
                        title="button "><?php _e( 'GO HOME' ); ?></a>


                </div>
            </div>
            <?php endif;?>
        </div>
    </div><!-- .section-inner -->

</main><!-- #site-content -->