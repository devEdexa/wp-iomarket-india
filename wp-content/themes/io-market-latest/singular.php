<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */

get_header();
if ( is_single() && 'post' == get_post_type() ) {
if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );
	}
}

?>
<?php } else { ?>
<main id="site-content" role="main">
   
            <?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>
      </main><!-- #site-content -->
<?php } ?>
<?php get_footer(); ?>